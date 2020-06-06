<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Crud extends CI_Model {
	public function __construct()
  {
    parent::__construct();
  }

	public function simpan($tabel, $data)
	{
		$data=$this->db->insert($tabel, $data);
		return $data;
	}

	public function update($tabel, $data, $where)
	{
		$data=$this->db->update($tabel, $data, $where);
		return $data;
	}

// fungsi pelanggan
	public function view_pelanggan()
	{
		$this->db->select('*');
		$this->db->from('customer');
		return $this->db->get();		
	}
	
	public function hapus_pelanggan($where, $table)
	{
		$this->db->where('id_cust',$where);
		$this->db->delete($table);
	}

	public function edit_pelanggan($id)
	{
		$this->db->where('id_cust',$id);
		$this->db->from('customer');
		return $this->db->get();
	}

	public function view_detail_pelanggan($id)
	{
		$this->db->select('*');
		$this->db->where('id_cust',$id);
		$this->db->from('customer');
		return $this->db->get();
	}

	public function view_detail_pemesanan($id)
	{
		$this->db->select('*');
		$this->db->where('id_cust',$id);
		$this->db->from('reservation');
		return $this->db->get();
	}

// fungsi supir
	public function view_supir()
	{
		$this->db->select('*');
		$this->db->from('supir');
		return $this->db->get();
	}

	public function hapus_supir($where, $table)
	{
		$this->db->where('id_driver',$where);
		$this->db->delete($table);
	}

	public function edit_supir($id)
	{
		$this->db->where('id_driver',$id);
		$this->db->from('supir');
		return $this->db->get();
	}

// fungsi kendaraan
	public function view_kendaraan()
	{
		$this->db->select('*');
		$this->db->from('kendaraan');
		$this->db->join('type_kendaraan','kendaraan.type=type_kendaraan.type');
		return $this->db->get();
	}

	public function tambah_view_kendaraan($kode)
	{
		$this->db->select('*');
		$this->db->from('reservation');
		$this->db->where('kode_resv',$kode);
		$this->db->join('type_kendaraan','reservation.type=type_kendaraan.type');
		$this->db->join('kendaraan','type_kendaraan.type=kendaraan.type');
		//$this->db->order_by('type','asc');
		return $this->db->get();
	}

	public function hapus_kendaraan($where, $table)
	{
		$this->db->where('id_kend', $where);
		$this->db->delete($table);
	}

	public function edit_kendaraan($id)
	{
		$this->db->select('*');
		$this->db->from('kendaraan');
		$this->db->where('id_kend',$id);
		return $this->db->get();
	}

// fungsi type kendaraan
	public function view_type_kendaraan()
	{

		$this->db->select('*');
		$this->db->from('type_kendaraan');
		return $this->db->get();
	}


public function tambah_view_type_kendaraan($kode)
	{

		$this->db->select('type');
		$this->db->from('reservation');
		$this->db->where('kode_resv',$kode);
		return $this->db->get();
	}


	public function hapus_type_kendaraan($where, $table)
	{
		$this->db->where('harga_sewa', $where);
		$this->db->delete($table);
	}

	public function edit_type_kendaraan($type)
	{
		$this->db->select('*');
		$this->db->from('type_kendaraan');
		$this->db->where('type', $type);
		return $this->db->get();
	}
// fungsi reservasi
	public function view_reservasi()
	{
		$this->db->select('*');
		$this->db->from('reservation');
		$this->db->join('type_kendaraan','reservation.type=type_kendaraan.type');
		$this->db->join('tour_paket','reservation.id_tour=tour_paket.id_tour');
		$this->db->join('customer','reservation.id_cust=customer.id_cust');
		return $this->db->get();
	}

	public function hapus_reservasi($where, $table)
	{
		$this->db->where('kode_resv',$where);
		$this->db->delete($table);
	}

	public function simpan_detail_reservasi($table, $data)
	{
		$data=$this->db->insert_batch($table, $data);
		return $data;
	}

	public function edit_reservasi($kode)
	{
		$this->db->select('*');
		$this->db->from('reservation');
		$this->db->join('customer','reservation.id_cust=customer.id_cust');
		$this->db->where('kode_resv',$kode);
		return $this->db->get();
	}

// fungsi user
	public function view_user()
	{
		$this->db->select('*');
		$this->db->from('admin');
		return $this->db->get();
	}

	public function hapus_user($where, $table)
	{
		$this->db->where('id',$where);
		$this->db->delete($table);
	}

	public function edit_user($id)
	{
		$this->db->select('*');
		$this->db->from('admin');
		$this->db->where('id',$id);
		return $this->db->get();
	}

// detail alokasi
	
	
	
	public function tgl_reservasi()
	{
		$data=$this->db->query("SELECT tgl_datang, tgl_pulang FROM reservation");
		return $data;
	}


// fungsi pemeliharaan

	public function hapus_pemeliharaan($where, $table)
	{
		$this->db->where('id_pemeliharaan',$where);
		$this->db->delete($table);
	}

// fungsi tour paket

	public function v_tour_paket()
	{
		$data=$this->db->query('SELECT * FROM tour_paket');
		return $data;
	}

	public function hapus_tour_paket($where, $table)
	{
		$this->db->where('id_tour',$where);
		$this->db->delete($table);
	}

	public function tp_hapus($where, $table)
	{
		$this->db->where('id_tour',$where);
		$this->db->delete($table);
	}

	public function v_user($where)
	{
		$this->db->select('*');
		$this->db->from('reservation');
		$this->db->where('kode_resv',$where);
		$this->db->join('customer','reservation.id_cust=customer.id_cust');
		return $this->db->get();
	}


	public function view_mail()
	{
		$this->db->select('*');
		$this->db->from('pemesanan');
		$this->db->order_by('tgl','asc');
		return $this->db->get();
	}

	public function hapus_mail($where,$table)
	{
		$this->db->where('id',$where);
		$this->db->delete($table);
		
	}
	
// menampilkan daftar alokasi
	// ganti syntax

	public function select_driver()
	{
		$this->db->select('*');
		$this->db->from('detail_reservasi');
		return $this->db->get();
	}
	
	public function view_alokasi()
	{
		$this->db->select('*');
		$this->db->from('detail_reservasi');
		$this->db->join('reservation','detail_reservasi.kode_resv=reservation.kode_resv');
		$this->db->join('supir','detail_reservasi.id_driver=supir.id_driver');
		$this->db->join('kendaraan','detail_reservasi.id_kend=kendaraan.id_kend');
		$this->db->join('customer','reservation.id_cust=customer.id_cust');
		return $this->db->get();
	}

	public function view_alokasi_tambah($kode)
	{
		$this->db->select('*');
		$this->db->from('detail_reservasi');
		$this->db->where('kode_resv',$kode);
		$this->db->join('supir','detail_reservasi.id_driver=supir.id_driver');
		$this->db->join('kendaraan','detail_reservasi.id_kend=kendaraan.id_kend');
		return $this->db->get();
	}

	public function hapus_alokasi($kode, $tgl)
	{

		$this->db->where('kode_resv',$kode);
		$this->db->where('tgl',$tgl);
		$this->db->delete('detail_reservasi');
	}

	public function detail_alokasi($kode)
	{
		$this->db->where('kode_resv',$kode);
		$this->db->select('*');
		//$this->db->select('SUM(total) as jml');
		$this->db->from('detail_reservasi');
		$this->db->join('supir','detail_reservasi.id_driver=supir.id_driver');
		$this->db->join('kendaraan','detail_reservasi.id_kend=kendaraan.id_kend');
		return $this->db->get();
	}

	public function detail_jumlah($kode)
	{
		$this->db->select('SUM(total) as jml');
		$this->db->from('detail_reservasi');
		return $this->db->get();
	}


// fungsi pemeliharaan
	public function view_pemeliharaan()
	{
		$this->db->select('*');
		$this->db->from('pemeliharaan');
		$this->db->join('kendaraan','pemeliharaan.id_kend=kendaraan.id_kend');
		return $this->db->get();
	}

// cek supir+kendaraan sebelum di jadwalkan
	public function cek_tanggal()
	{
		$this->db->select('tgl');
		$this->db->from('detail_reservasi');
		return $this->db->get();
	}

	public function cek_id_kendaraan()
	{
		$this->db->select('id_kend');
		$this->db->from('kendaraan');
		return $this->db->get();
	}

	public function cek_supir()
	{
		$this->db->select('id_driver');
		$this->db->from('supir');
		return $this->db->get();
	}

// laporan pemesanan

	public function view_laporan_pemesanan()
	{
		$this->db->select('*');
		$this->db->from('detail_reservasi');
		$this->db->join('reservation','detail_reservasi.kode_resv=reservation.kode_resv');
		$this->db->join('customer','reservation.id_cust=customer.id_cust');
		$this->db->order_by('tgl','asc');
		//$this->db->join('customer','reservation.id_cust=customer.id_cust');
		return $this->db->get();
	}

	public function view_laporan_pemesanan2()
	{
		$this->db->select('*');
		$this->db->from('detail_reservasi');
		$this->db->join('reservation','detail_reservasi.kode_resv=reservation.kode_resv');
		$this->db->join('customer','reservation.id_cust=customer.id_cust');
		$this->db->order_by('tgl','asc');
		//$this->db->join('customer','reservation.id_cust=customer.id_cust');
		return $this->db->get();
	}

	public function view_laporan_pemeliharaan()
	{
		$this->db->select('*');
		$this->db->from('pemeliharaan');
		$this->db->order_by('tgl','asc');
		$this->db->join('kendaraan','pemeliharaan.id_kend=kendaraan.id_kend');
		return $this->db->get();
	}

	public function view_laporan_pemeliharaan2()
	{
		$this->db->select('*');
		$this->db->from('pemeliharaan');
		$this->db->order_by('tgl','asc');
		$this->db->join('kendaraan','pemeliharaan.id_kend=kendaraan.id_kend');
		return $this->db->get();
	}

	public function view_laporan_keuangan()
	{
		$this->db->select('*');
		$this->db->from('payment');
		$this->db->order_by('date','asc');
		$this->db->join('reservation','payment.kode_resv=reservation.kode_resv');
		$this->db->join('customer','reservation.id_cust=customer.id_cust');
		//$this->db->join('customer','reservation.id_cust=customer.id_cust');
		return $this->db->get();
	}
	public function view_laporan_keuangan2()
	{
		$this->db->select('*');
		$this->db->from('payment');
		$this->db->order_by('date','asc');
		$this->db->join('reservation','payment.kode_resv=reservation.kode_resv');
		$this->db->join('customer','reservation.id_cust=customer.id_cust');
		//$this->db->join('customer','reservation.id_cust=customer.id_cust');
		return $this->db->get();
	}
// fungsi pembayaran
	public function view_pembayaran($kode)
	{
		$this->db->select('*');
		$this->db->from('payment');
		//$this->db->query("SELECT * FROM detail_reservasi SUM(total) AS jml GROUP BY kode_resv");
		$this->db->where('kode_resv',$kode);
		return $this->db->get();
	}

	public function edit_tour_paket($id)
	{
		$this->db->select('*');
		$this->db->from('tour_paket');
		$this->db->where('id_tour',$id);
		return $this->db->get();
	}

}
