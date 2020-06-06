<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Owner extends CI_Controller {

	public function __construct() {
		parent::__construct();
		if ($this->session->userdata('username')=="") {
			redirect('auth');
		}
		$this->load->helper('text');
		$this->load->model('crud','user_crud');
	}
	public function index() {
		$data['username'] = $this->session->userdata('username');
		$this->load->view('owner/v_owner', $data);
	}

	// fungsi pelanggan
	public function view_pelanggan(){
		$data['pel']=$this->crud->view_pelanggan()->result_array();
		$this->load->view('owner/pelanggan',$data);
	}

	public function simpan_pelanggan(){
		$post=$this->input->post();
		$data=$this->crud->simpan('customer', array('nama'=>$post['nama'],'no_hp'=>$post['no_hp'], 'email'=>$post['email'], 'negara'=>$post['negara']));
		if($data>=1){
			$this->session->set_flashdata('sukses','Input Data pelanggan Sukses');
			redirect ('owner/view_pelanggan');
		}else{
			$this->session->set_flashdata('gagal','Input Data pelanggan Gagal');
			redirect ('owner/view_pelanggan');
		}
	}

	public function edit_pelanggan($id)
	{
		$data=$this->crud->edit_pelanggan($id,'customer')->result_array();
		$input=array(
			'id_cust'=>$data[0]['id_cust'],
			'nama'=>$data[0]['nama'],
			'no_hp'=>$data[0]['no_hp'],
			'email'=>$data[0]['email'],
			'negara'=>$data[0]['negara']);
		$this->load->view('owner/edit_pelanggan',$input);
	}

	public function simpan_edit_pelanggan()
	{
		$post=$this->input->post();
		$id=$_POST['id_cust'];
		$data= array('nama'=>$post['nama'],'no_hp'=>$post['no_hp'],'email'=>$post['email'],'negara'=>$post['negara']);
		$where = array('id_cust'=>$id);
		$update=$this->crud->update('customer',$data,$where);
		if($update==true){
			$this->session->set_flashdata('sukses','Edit Data Pelanggan Sukses');
			redirect ('owner/view_pelanggan');
		}else{
			$this->session->set_flashdata('gagal','Edit Data Pelanggan Gagal');
			redirect ('owner/view_pelanggan');
		}
	}

	public function hapus_pelanggan($id)
	{
		$this->crud->hapus_pelanggan($id, 'customer');
		redirect ('owner/view_pelanggan');
	}

	public function detail_pelanggan($id)
	{
		$data['pel']=$this->crud->view_detail_pelanggan($id)->result_array();
		$data['pemesanan']=$this->crud->view_detail_pemesanan($id)->result_array();
		$this->load->view('owner/detail_pelanggan',$data);
	}
// end pelanggan


// fungsi supir
	public function view_supir(){
		$data['supir']=$this->crud->view_supir()->result_array();
		$this->load->view('owner/supir',$data);
	}

	public function simpan_supir(){
		$post=$this->input->post();
		$data=$this->crud->simpan('supir',array('nama_driver'=>$post['nama'],'alamat'=>$post['alamat'],'no_hp'=>$post['no_hp'],'type_sim'=>$post['type_sim']));
		if($data==true){
			$this->session->set_flashdata('sukses','Input Data Supir Sukses');
			redirect('owner/view_supir');
		}else{
			$this->session->set_flashdata('gagal','Input Data Supir Gagal');
			redirect ('owner/view_supir');
		}
	}

	public function edit_supir($id)
	{
		$data=$this->crud->edit_supir($id,'supir')->result_array();
		$input=array(
			'id_driver'=>$data[0]['id_driver'],
			'nama_driver'=>$data[0]['nama_driver'],
			'alamat'=>$data[0]['alamat'],
			'no_hp'=>$data[0]['no_hp'],
			'type_sim'=>$data[0]['type_sim']);
		$this->load->view('owner/edit_supir',$input);
	}

	public function simpan_edit_supir()
	{
		$post=$this->input->post();
		$id = $_POST['id_driver'];
		$data=array('nama_driver'=>$post['nama_driver'],'alamat'=>$post['alamat'],'no_hp'=>$post['no_hp'],'type_sim'=>$post['type_sim']);
		$where = array('id_driver'=>$id);
		$update=$this->crud->update('supir',$data,$where,$id);
		if($update==true){
			$this->session->set_flashdata('sukses','Edit Data Supir Sukses');
			redirect ('owner/view_supir');
		}else{
			$this->session->set_flashdata('gagal','Edit Data Supir Gagal');
			redirect ('owner/view_supir');
		}
	}
	public function hapus_supir($id)
	{
		$data=$this->crud->hapus_supir($id, 'supir');
		if($data==true){
			$this->session->set_flashdata('sukses','Hapus Data Supir Berhasil');
		redirect ('owner/view_supir');
		}else{
			$this->session->set_flashdata('gagal','Hapus Data Supir Gagal');
		redirect ('owner/view_supir');
		}
	}
// end supir


//fungsi kendaraan
	public function view_kendaraan()
	{
		$data['kendaraan']=$this->crud->view_kendaraan()->result_array();
		$data['type']=$this->crud->view_type_kendaraan()->result_array();
		$this->load->view('owner/kendaraan',$data);
	}

	public function simpan_kendaraan()
	{
		$post=$this->input->post();
		$data=$this->crud->simpan('kendaraan', array('type'=>$post['type'],'jenis'=>$post['jenis'],'no'=>$post['no'],'kapasitas'=>$post['kapasitas'],'tahun'=>$post['tahun']));
		if($data==true){
			$this->session->set_flashdata('sukses','Input Data Kendaraan Sukses');
			redirect ('owner/view_kendaraan');
		}else{
			$this->session->set_flashdata('gagal','Input Data Kendaraan Gagal');
			redirect ('owner/view_kendaraan');
		}
	}

	public function hapus_kendaraan($id)
	{
		$data=$this->crud->hapus_kendaraan($id,'kendaraan');
		if($data==true){
			$this->session->set_flashdata('sukses','Hapus Data Kendaraan Sukses');
			redirect ('owner/view_kendaraan');
		}else{
			$this->session->set_flashdata('gagal','Hapus Data Kendaraan Gagal');
		redirect ('owner/view_kendaraan');
		}
	}

	public function edit_kendaraan($id)
	{
		$data=$this->crud->edit_kendaraan($id)->result_array();
		$input=array(
			'id_kend'=>$data[0]['id_kend'],
			'type'=>$data[0]['type'],
			'jenis'=>$data[0]['jenis'],
			'no'=>$data[0]['no'],
			'kapasitas'=>$data[0]['kapasitas'],
			'tahun'=>$data[0]['tahun']);
		
		$this->load->view('owner/edit_kendaraan',$input);
	}


	public function simpan_edit_kendaraan()
	{
		$post=$this->input->post();
		$id=$_POST['id_kend'];
		$data=array('type'=>$post['type'],'jenis'=>$post['jenis'],'no'=>$post['no'],'kapasitas'=>$post['kapasitas'],'tahun'=>$post['tahun']);
		$where=array('id_kend'=>$id);
		$update=$this->crud->update('kendaraan',$data,$where,$id);
		if($update==true){
			$this->session->set_flashdata('sukses','Edit Data Kendaraan Sukses');
			redirect ('owner/view_kendaraan');
		}else{
			$this->session->set_flashdata('gagal','Edit Data Kendaraan Gagal');
			redirect ('owner/view_kendaraan');
		}
	}

	
// fungsi type kendaraan

	public function simpan_type_kendaraan()
	{
		$post=$this->input->post();
		$data=$this->crud->simpan('type_kendaraan',array('type'=>$post['type'],'harga_sewa'=>$post['harga']));
		if($data==true){
			$this->session->set_flashdata('sukses','Input Data Type Kendaraan Sukses');
			redirect ('owner/view_kendaraan');
		}else{
			$this->session->set_flashdata('gagal','Input Data Type Kendaraan Gagal');
			redirect ('owner/view_kendaraan');
		}
	}
	public function hapus_type_kendaraan($harga)
	{
		$data=$this->crud->hapus_type_kendaraan($harga, 'type_kendaraan');
		if($data==true){
			$this->session->set_flashdata('sukses','Hapus Data Type Kendaraan Sukses');
			redirect ('owner/view_kendaraan');
		}else{
			$this->session->set_flashdata('gagal','Hapus Data Type Kendaraan Gagal');
			redirect ('owner/view_kendaraan');
		}
	}
// end kendaraan


// fungsi reservasi
	public function view_reservasi()
	{
		$data['pel']=$this->crud->view_pelanggan()->result_array();
		$data['tgl']=$this->crud->tgl_reservasi()->result_array();
		$data['type']=$this->crud->view_type_kendaraan()->result_array();
		$data['reservasi']=$this->crud->view_reservasi()->result_array();
		$this->load->view('owner/reservasi',$data);
	}


	public function simpan_reservasi()
	{
		$post=$this->input->post();
		$data=$this->crud->simpan('reservation', array('kode_resv'=>$post['kode'],'pass'=>$post['pass'],'id_cust'=>$post['id_cust'],'pax'=>$post['pax'],'tgl_datang'=>$post['tgl_datang'],'tgl_pulang'=>$post['tgl_pulang'],'notes'=>$post['notes'],));
		if($data==true){
			$this->session->set_flashdata('sukses','Input Data Reservasi Sukses');
			redirect ('owner/view_reservasi');
		}else{
			$this->session->set_flashdata('gagal','Input Data Reservasi Gagal');
			redirect ('owner/view_reservasi');
		}
	}

	
	public function hapus_reservasi($kode)
	{
		$this->crud->hapus_reservasi($kode,'reservation');
		redirect ('owner/view_reservasi');
	}

	public function tambah_reservasi($kode)
	{
		$data['type']=$this->crud->view_type_kendaraan()->result_array();
		$data['user']=$this->crud->v_user($kode)->result_array();
		$data['supir']=$this->crud->view_supir()->result_array();
		$data['kend']=$this->crud->view_kendaraan()->result_array();
		$data['data']=$this->crud->view_alokasi_tambah($kode)->result_array();
		$this->load->view('owner/tambah_reservasi',$data);
	}

	public function simpan_detail_reservasi()
	{
		$jml=count($this->input->post('tanggal'));
		$kode_resv=$this->input->post('kode_resv');
		$tanggal=$this->input->post('tanggal');
		$type=$this->input->post('type');
		$city=$this->input->post('city');
		$itinerary=$this->input->post('itinerary');
		$total=$this->input->post('total');
		$driver=$this->input->post('driver');
		$no=$this->input->post('no_mobil');
		$status=$this->input->post('status');


		$data=array();
		for($i=0;$i<$jml;$i++){
			$data[$i]=array('kode_resv'=>$kode_resv[$i],
							'tgl'=>$tanggal[$i],
							'type'=>$type[$i],
							'city'=>$city[$i],
							'itinerary'=>$itinerary[$i],
							'total'=>$total[$i],
							'id_driver'=>$driver[$i],
							'id_kend'=>$no[$i],
							'status'=>$status[$i]);
		}
		$cek=$this->crud->simpan_detail_reservasi('detail_reservasi',$data);
		if($cek ==true){
			$this->session->set_flashdata('sukses','Input Detail Reservasi Sukses');
			redirect('owner/view_reservasi');
		}else{
			$this->session->set_flashdata('gagal','Input Detail Reservasi Gagal');
			redirect ('owner/view_reservasi');
		}
	}

	public function edit_reservasi($kode)
	{
		$data=$this->crud->edit_reservasi($kode)->result_array();
		$input = array(
			'kode_resv'=>$data[0]['kode_resv'],
			'pass'=>$data[0]['pass'],
			'id_cust'=>$data[0]['nama'],
			'pax'=>$data[0]['pax'],
			'tgl_datang'=>$data[0]['tgl_datang'],
			'tgl_pulang'=>$data[0]['tgl_pulang'],
			'notes'=>$data[0]['notes']);
		$this->load->view('owner/edit_reservasi',$input);
	}

	public function simpan_edit_reservasi()
	{
		$post=$this->input->post();
		$kode_resv=$_POST['kode_resv'];
		$data=array(
			'pass'=>$post['pass'],
			'id_cust'=>$post['nama'],
			'pax'=>$post['pax'],
			'tgl_datang'=>$post['tgl_datang'],
			'tgl_pulang'=>$post['tgl_pulang'],
			'notes'=>$post['notes']);
		$where=array('kode_resv',$kode_resv);
		$update=$this->crud->update('reservation',$data,$where);
		if($update==true)
		{
			$this->session->set_flashdata('sukses','Edit data user berhasil');
			redirect ('owner/view_reservasi');
		}else
		{
			$this->session->set_flashdata('gagal','Edit data user gagal');
			redirect ('owner/index');
		}

	}
	
// end reservasi

// fungsi user

	public function view_user()
	{
		$data['view_user']=$this->crud->view_user()->result_array();
		$data=$this->load->view('owner/view_user',$data);
	}

	//simpan user
	public function simpan_user()
	{
		$post=$this->input->post();
		$pass = base64_encode($post['password']);
		$data=$this->crud->simpan('owner',array('username'=>$post['username'],'password'=>$pass,'hak_akses'=>$post['hak_akses']));
		if($data==true)
		{
			$this->session->set_flashdata('sukses','Input user berhasil');
			redirect ('owner/view_user');
		}else
		{
			$this->session->set_flashdata('gagal','Input user gagal');
			redirect ('owner/view_user');
		}
	}

	public function hapus_user($id)
	{
		$data=$this->crud->hapus_user($id,'owner');
		if($data==true)
		{
			$this->session->set_flashdata('sukses','Hapus data user berhasil');
			redirect ('owner/view_user');
		}else
		{
			$this->session->set_flashdata('gagal','Hapus data user gagal');
			redirect ('owner/view_user');
		}
	}

	public function edit_user($id)
	{
		$data=$this->crud->edit_user($id)->result_array();
		$edit=array(
					'id'=>$data[0]['id'],
					'username'=>$data[0]['username'],
					'password'=>$data[0]['password'],
					'hak_akses'=>$data[0]['hak_akses']);
		$this->load->view('owner/edit_user',$edit);
	}

	public function simpan_edit_user()
	{
		$post=$this->input->post();
		$id=$_POST['id'];
		$pass = base64_encode($post['password']);
		$data=array(
				'username'=>$post['username'],
				'password'=>$pass,
				'hak_akses'=>$post['hak_akses']);
		$where=array('id'=>$id);
		$update=$this->crud->update('owner',$data,$where,$id);
		if($update==true)
		{
			$this->session->set_flashdata('sukses','Edit data user berhasil');
			redirect ('owner/view_user');
		}else
		{
			$this->session->set_flashdata('gagal','Edit data user gagal');
			redirect ('owner/view_user');
		}
	}

	

// end fungsi user


// fungsi alokasi kendaraan
	public function view_alokasi()
	{
		$data['alokasi']=$this->crud->view_alokasi()->result_array();
		$this->load->view('owner/alokasi',$data);
	}

	public function hapus_alokasi($kode,$tgl)
	{
		$this->crud->hapus_alokasi($kode,$tgl);
		redirect('owner/view_alokasi');
	}

	public function detail_alokasi($kode)
	{
		$data['detail']=$this->crud->detail_alokasi($kode)->result_array();
		$data['data']=$this->crud->v_user($kode)->result_array();
		// fungsi view pembayaran
		$data['pemb']=$this->crud->view_pembayaran($kode)->result_array();
		$this->load->view('owner/detail_alokasi',$data);
	}

// fungsi pemeliharaan
	public function view_pemeliharaan()
	{
		$data['pemeliharaan']=$this->crud->view_pemeliharaan()->result_array();
		$data['no']=$this->crud->view_kendaraan()->result_array();
		$this->load->view('owner/pemeliharaan',$data);
	}

	public function simpan_pemeliharaan()
	{
		$post=$this->input->post();
		$data=$this->crud->simpan('pemeliharaan',array('tgl'=>$post['tgl'],'id_kend'=>$post['id'],'jenis_kerusakan'=>$post['jenis'],'keterangan'=>$post['keterangan'],'biaya'=>$post['biaya'],'nama_bengkel'=>$post['bengkel']));
		if($data==true){
			$this->session->set_flashdata('sukses','Input Data Pemeliharaan Sukses');
			redirect ('owner/view_pemeliharaan');
			}else{
			$this->session->set_flashdata('gagal','Input Data Pemeliharaan Gagal');
			redirect ('owner/view_pemeliharaan');
		}
	}

	public function hapus_pemeliharaan($id)
	{
		$data=$this->crud->hapus_pemeliharaan($id,'pemeliharaan');
		if($data==true){
			$this->session->set_flashdata('sukses','Hapus Data Pemeliharaan Sukses');
			redirect ('owner/view_kendaraan');
		}else{
			$this->session->set_flashdata('gagal','Hapus Data Pemeliharaan Gagal');
		redirect ('owner/view_pemeliharaan');
		}
	}
// end pemeliharaan

// fungsi tour paket
	public function view_tour_paket()
	{
		$data['tour']=$this->crud->v_tour_paket()->result_array();
		$this->load->view('owner/tour_paket',$data);
	}

	public function tambah_tour_paket()
	{
		$this->load->view('owner/tambah_tour_paket');
	}

	public function simpan_tour_paket()
	{
		$post=$this->input->post();
		$data=$this->crud->simpan('tour_paket',array('nama'=>$post['nama'],'harga'=>$post['harga'],'minimal'=>$post['minimal'],'kota'=>$post['kota'],'tanggal'=>$post['tanggal'],'isi'=>$post['isi']));
		if($data==true){
			$this->session->set_flashdata('sukses','Input Data Tour Paket Sukses');
			redirect ('owner/view_tour_paket');
		}else{
			$this->session->set_flashdata('gagal','Input Data Tour Paket Gagal');
			redirect ('owner/view_tour_paket');
		}
	}

	public function h_tour_paket($id)
	{
		$this->crud->tp_hapus($id,'tour_paket');
		redirect ('owner/view_tour_paket');
	}
// end tour paket

// Fungsi Laporan

	public function view_laporan_pemesanan()
	{

		$data['laporan_pemesanan']=$this->crud->view_laporan_pemesanan()->result_array();
		$this->load->view('owner/laporan_pemesanan',$data);
	}

	public function view_laporan_pemeliharaan()
	{
		$data['laporan_pemeliharaan']=$this->crud->view_laporan_pemeliharaan()->result_array();
		$this->load->view('owner/laporan_pemeliharaan',$data);
	}

	public function view_laporan_keuangan()
	{
		$data['laporan_keuangan']=$this->crud->view_laporan_keuangan()->result_array();
		$this->load->view('owner/laporan_keuangan',$data);
	}

// fungsi pembayaran

	public function simpan_pembayaran()
	{
		$post=$this->input->post();
		$data=$this->crud->simpan('payment',array('date'=>$post['tanggal'],'kode_resv'=>$post['kode_resv'],'payment'=>$post['payment'],'discount'=>$post['discount'],'method'=>$post['method'],'via'=>$post['via']));
		if($data==true)
		{
			$this->session->set_flashdata('sukses','Input data payment berhasil');
			redirect ('owner/view_alokasi');
		}else
		{
			$this->session->set_flashdata('gagal','Input data payment gagal');
			redirect ('owner/view_alokasi');
		}
	}

// fungsi tour


// fungsi cetak
	public function cetak_invoice($kode)
  { 
    //load mPDF library
    $this->load->library('m_pdf');
    //load mPDF library
 
 $where=array('kode_resv'=>$kode);
    //now pass the data//
     $data['title']="MY PDF TITLE 1.";
    // $data['pegawai'] = $this->M_user->read_tampil($where);
	// $data['pensiun'] = $this->M_user->read_pensiun($where);
     //now pass the data //
 
    
    $html=$this->load->view('owner/cetak_invoice',$data, true); //load the pdf_output.php by passing our data and get all data in $html varriable.
   
    //this the the PDF filename that user will get to download
    $pdfFilePath ="mypdfName-".time()."-download.pdf";
 	
    $mpdf->shrink_tables_to_fit = 1;
    //actually, you can pass mPDF parameter on this load() function
    $pdf = $this->m_pdf->load();
    //generate the PDF!
   
    $this->mpdf = new mPDF();
    $this->mpdf->AddPage('L', // L - landscape, P - portrait
            '', '', '', '',
            4, // margin_left
            4, // margin right
			4, // margin top
           	4, // margin bottom
            4, // margin header
            4); // margin footer
    $this->mpdf->WriteHTML($html);
    //$this->mpdf->Output($file_name, 'D'); // download force
    $this->mpdf->Output($file_name, 'D'); // view in the explorer

      
  }
	public function logout() {
		$this->session->unset_userdata('username');
		$this->session->unset_userdata('hak_akses');
		session_destroy();
		redirect('Welcome');
	}

	public function view_pembayaran()
	{
		$data['payment']=$this->user_crud->pembayaran()->result_array();
		$this->load->view('owner/payment',$data);
	}

	public function hapus_payment($id)
	{
		$data=$this->user_crud->hapus_payment($id,'payment');
		if($data==true){
			$this->session->set_flashdata('sukses','Hapus data berhasil');
			redirect ('owner/view_pembayaran');
		}else{
			$this->session->set_flashdata('gagal','Hapus data gagal');
			redirect ('owner/view_pembayaran');
		}
	}

// KUMPULAN FUNGSI EDIT

	public function edit_payment($id)
	{
		$data=$this->user_crud->edit_payment($id,'payment')->result_array();
		$input=array(
			'id'=>$data[0]['id'],
			'date'=>$data[0]['date'],
			'kode_resv'=>$data[0]['kode_resv'],
			'payment'=>$data[0]['payment'],
			'discount'=>$data[0]['discount'],
			'method'=>$data[0]['method'],
			'via'=>$data[0]['via']);
		$this->load->view('owner/edit_payment',$input);
	}


// SIMPAN EDIT
	public function simpan_edit_payment()
	{
		$this->load->model('crud');
		$post=$this->input->post();
		$id=$_POST['id'];
		$data= array('date'=>$post['date'],'kode_resv'=>$post['kode_resv'],'payment'=>$post['payment'],'discount'=>$post['discount'],'method'=>$post['method'],'via'=>$post['via']);
		$where = array('id'=>$id);
		$update=$this->crud->update('payment',$data,$where);
		if($update==true){
			$this->session->set_flashdata('sukses','Edit Data Payment Sukses');
			redirect ('owner/view_pembayaran');
		}else{
			$this->session->set_flashdata('gagal','Edit Data Payment Gagal');
			redirect ('owner/view_pembayaran');
		}
	}

}
