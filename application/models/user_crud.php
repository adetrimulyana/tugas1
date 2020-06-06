<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class User_crud extends CI_Model {
	public function __construct()
  {
    parent::__construct();
  }

  public function view_detail()
  {
  	$kode=$this->session->userdata('kode_resv');
  	$this->db->select('*');
  	$this->db->from('detail_reservasi');
  	$this->db->where('kode_resv',$kode);
  	$this->db->join('supir','detail_reservasi.id_driver=supir.id_driver');
	$this->db->join('kendaraan','detail_reservasi.id_kend=kendaraan.id_kend');
  	return $this->db->get();
  }

  	public function v_user()
	{
		$kode=$this->session->userdata('kode_resv');
		$this->db->select('*');
		$this->db->from('reservation');
		$this->db->where('kode_resv',$kode);
		$this->db->join('customer','reservation.id_cust=customer.id_cust');
		return $this->db->get();
	}

	public function view_pembayaran()
	{
		$kode=$this->session->userdata('kode_resv');
		$this->db->select('*');
		$this->db->from('payment');
		$this->db->where('kode_resv',$kode);
		return $this->db->get();
	}

	public function pembayaran()
	{
		$this->db->select('*');
		$this->db->from('payment');
		$this->db->order_by('date','asc');
		return $this->db->get();
	}

	public function hapus_payment($where, $table)
	{
		$this->db->where('id',$where);
		$this->db->delete($table);
	}

// KUMPULAN FUNGSI EDIT
	public function edit_payment($id)
	{
	$this->db->where('id',$id);
		$this->db->from('payment');
		return $this->db->get();
	}
}
