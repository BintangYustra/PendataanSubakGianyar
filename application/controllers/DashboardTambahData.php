<?php

class DashboardTambahData extends CI_Controller {

	public function __construct()
	{
        parent::__construct();
        $this->load->model('SubakModel');
        $this->load->model('PrajuruModel');
        $this->load->model('PerahyanganModel');
        $this->load->model('PawonganModel');
    }
	
	public function index()
	{
		$data['judul'] = 'Dashboard';

		$this->load->view('templates/dashboard/headerdashboard', $data);
		$this->load->view('templates/dashboard/sidepaneldashboard');
		$this->load->view('dashboard/dashboardtambahdata');
		$this->load->view('templates/dashboard/footerdashboard');
	}

	public function AddData(){
		// nama subak
		$nama_subak = $this -> input -> post('nama_subak');
		$kriteria_subak = $this -> input -> post('kriteria_subak');
		$nomor_akte_notaris = $this -> input -> post('nomor_akte_notaris');
		$npwp = $this -> input -> post('npwp');
		$verifikasi = $this -> input -> post('verifikasi');

		// alamat subak
		$br_lingkungan_subak = $this -> input -> post('br_lingkungan_subak');
		$desa_subak = $this -> input -> post('desa_subak');
		$kecamatan_subak = $this -> input -> post('kecamatan_subak');
		$kabupaten_subak = $this -> input -> post('kabupaten_subak');
		$kode_pos = $this -> input -> post('kode_pos');

		// prajuru subak
		$masa_bhakti_ayahan_start = $this -> input -> post('masa_bhakti_ayahan_start');
		$masa_bhakti_ayahan_end = $this -> input -> post('masa_bhakti_ayahan_end');
		$pekaseh_nama = $this -> input -> post('pekaseh_nama');
		$pekaseh_npwp = $this -> input -> post('pekaseh_npwp');
		$pekaseh_hp_wa = $this -> input -> post('pekaseh_hp_wa');
		$petajuh_nama = $this -> input -> post('petajuh_nama');
		$petajuh_npwp = $this -> input -> post('petajuh_npwp');
		$petajuh_hp_wa = $this -> input -> post('petajuh_hp_wa');
		$penyarikan_nama = $this -> input -> post('penyarikan_nama');
		$penyarikan_npwp = $this -> input -> post('penyarikan_npwp');
		$penyarikan_wa_hp = $this -> input -> post('penyarikan_wa_hp');

		
		$penyarikan_wa_hp = $this -> input -> post('penyarikan_wa_hp');
	}
}
