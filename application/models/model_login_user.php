<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Model_login_user extends CI_Model {

	public $db_tabel='detail_reservasi';
	
	public function load_form_rules()
	{
		$form_rules=array(
			array(
				'field'=>'kode_resv',
				'label'=>'kode_Resv',
				'rules'=>'required'),
			array(
				'field'=>'pass',
				'label'=>'pass',
				'rules'=>'required'
				),);
		return $form_rules;
	}

	public function validasi()
	{
		$form=$this->load_form_rules();
		$this->form_validation->set_rules($form);
		if($this->form_validation->run())
		{
			return TRUE;
		}
		else
		{
			return FALSE;
		}
	}

	//cek status user login atau tidak
	public function cek_user()
	{
		$username=$this->input->post('kode_resv');
		$password=$this->input->post('pass');

		$query=$this->db->where('kode_resv',$username)->where('pass',$password)->limit(1)->get($this->db_tabel);

	if($query->num_rows()==1)
	{
		$data=array('kode_resv'=>$username,'login'=>TRUE);
		//buat session jika login benar
		$this->session->Set_userdata($data);
		return TRUE;
	}
	else
	{
		return FALSE;
	}
	}

	public function logout()
	{
		$this->session->unset_userdata(array('kode_Resv'=>'','login'=>FALSE));
		$this->session->sess_destroy();
	}

	public function v_user()
	{
		$data=$this->db->query('SELECT * FROM reservation');
		return $data;
	}
}
