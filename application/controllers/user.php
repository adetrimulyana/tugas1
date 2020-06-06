<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class User extends CI_Controller {

	function __construct(){
	parent :: __construct();
	$this->load->model('user_crud');
	$this->load->library('m_pdf');
	$this->load->helper('text');

	if($this->session->userdata('status') != "login"){
			redirect(base_url("welcome"));
		}
}
	public function index()
	{

		$this->load->view('user/v_user');
	}


	public function detail_pemesanan($kode)
	{
		$data['detail']=$this->user_crud->view_detail($kode)->result_array();
		$data['data']=$this->user_crud->v_user($kode)->result_array();
		// fungsi view pembayaran
		$data['pemb']=$this->user_crud->view_pembayaran($kode)->result_array();
		$this->load->view('user/detail_pemesanan',$data);
	}
		public function logout() {
		$this->session->unset_userdata('username');
		//$this->session->unset_userdata('hak_akses');
		session_destroy();
		redirect('Welcome');
	}
}
