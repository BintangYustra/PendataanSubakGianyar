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

		// perahyangan subak bedugul ada
		$pura_bedugul_disungsung = $this -> input -> post('pura_bedugul_disungsung');
		$alamat_pura_bedugul = $this -> input -> post('alamat_pura_bedugul');
		$piodalan_wali_pertahun = $this -> input -> post('piodalan_wali_pertahun');
		$hari_piodalan_wali = $this -> input -> post('hari_piodalan_wali');
		$jumlah_pelinggih = $this -> input -> post('jumlah_pelinggih');
		$foto_pura = $this -> input -> post('foto_pura');

		// perahyangan subak bedugul tidak ada
		$alamat_pura = $this -> input -> post('alamat_pura');
		$piodalan_wali_pertahun = $this -> input -> post('piodalan_wali_pertahun');
		$foto_pura = $this -> input -> post('foto_pura');

		// perahyangan subak aci aci
		$aci_aci = $this -> input -> post('aci_aci');

		// perahyangan subak inventaris
		$inventaris = $this -> input -> post('inventaris');

		// perahyangan penyungsung lain
		$penyungsung_lain = $this -> input -> post('penyungsung_lain');

		// perahyangan penyungsung lain tidak ada bedugul
		$penyungsung_lain_tidakada_bedugul = $this -> input -> post('penyungsung_lain_tidakada_bedugul');
	}
}
