<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Auth extends CI_Controller {

	function __construct(){
		parent :: __construct();
		$this->load->helper('url');
		$this->load->model('login');
		$this->load->library('session');

	}

	public function index()
	{
		$this->load->view('form_login');
	}


	public function cek_login()
	{
		$data = array('username' => $this->input->post('username', TRUE),'password' =>(md5($this->input->post('password', TRUE))));
		$hasil = $this->login->cek_user($data);
		if ($hasil->num_rows() == 1) {
			foreach ($hasil->result() as $sess) {
				//var_dump($sess); die();
				$sess_data['logged_in'] = 'Sudah Loggin';
				$sess_data['id'] = $sess->id;
				$sess_data['username'] = $sess->username;
				//$sess_data['hak_akses'] = $sess->hak_akses;
				// var_dump($sess_data); die();
				// var_dump($this->session->userdata); die();
				$this->session->set_userdata($sess_data,'true');
			}
			//if ($this->session->userdata('hak_akses')=='1') {
			redirect('admin');
			//}
			//elseif ($this->session->userdata('hak_akses')=='2') {
			//redirect('owner');
			//}		
		}
		else {
			echo "<script>alert('Gagal login: Cek username, password!');history.go(-1);</script>";
		}
	}

	
	public function cek_login_pelanggan()
	{
		$username = $this->input->post('kode_resv');
		$password = $this->input->post('pass');
		$where = array(
			'kode_resv' => $username,
			'pass' => $password
			);
		$cek = $this->login->cek_login_pelanggan("reservation",$where)->num_rows();
		if($cek > 0){
 
			$data_session = array(
				'kode_resv' => $username,
				'status' => "login"
				);
 
			$this->session->set_userdata($data_session);
			redirect(base_url("user"));
 
		}else{
			echo "Username dan password salah !";
		}
	}

}