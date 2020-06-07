<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Welcome extends CI_Controller {

	function __construct(){
		parent :: __construct();
		$this->load->helper('url');
		$this->load->model('login');
	}

	public function index()
	{
		$this->load->helper('url');
		$data['tour']=$this->crud->v_tour_paket()->result_array();
		$this->load->view('index',$data);
	}

	public function login()
	{
		$username=$this->input->post('username');
		$password=$this->input->post('password');
		$where = array('username'=>$username,
						'password'=>var_dump(md5($password)
						));
	$cek=$this->login->cek_login("admin",$where)->num_rows();
	if($cek > 0){
		$data_session= array('nama'=> $username,
							' status' => "login");
		$this->session->set_userdata($data_session);
		redirect ('admin');
	}else{
		echo "username dan password salah";
		}
	}

	public function simpan_pesan()
	{
		$this->load->model('crud');
		$post=$this->input->post();
		$data=$this->crud->simpan('pemesanan',array('nama'=>$post['nama'],'no_hp'=>$post['no_hp'],'email'=>$post['email'],'pax'=>$post['pax'],'id_tour'=>$post['tour'],'tgl_datang'=>$post['tgl_datang'],'tgl_pulang'=>$post['tgl_pulang'],'tgl'=>$post['tgl'],'notes'=>$post['notes']));
		if($data==true)
		{
			$this->session->set_flashdata('sukses','Terima Kasih pesan anda sudah terkirim');

			redirect('Welcome/index');
		}else
		{
			$this->session->set_flashdata('gagal','Maaf ..!! Pesan anda gagal terkirim. Silahkan coba lagi ');
			redirect ('Welcome/index');
		}

	}

	public function form_login()
	{
		$this->load->view('form_login');
	}

	public function form_login_pelanggan()
	{
		$this->load->view('form_login_pelanggan');
	}
}
