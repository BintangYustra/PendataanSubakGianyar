<?php

class DashboardTambahData extends CI_Controller {

	public function __construct()
	{
        parent::__construct();
        $this->load->model('SubakModel');
    }
	
	public function index()
	{
		$data['judul'] = 'Dashboard';

		$this->load->view('templates/dashboard/headerdashboard', $data);
		$this->load->view('templates/dashboard/sidepaneldashboard');
		$this->load->view('dashboard/dashboardtambahdata');
		$this->load->view('templates/dashboard/footerdashboard');
	}

	public function AddData()
	{
		$data = [
		// tb_subak
		$nama_subak = $this -> input -> post('nama_subak'),
		$kriteria_subak = $this -> input -> post('kriteria_subak'),
		$nomor_akte_notaris = $this -> input -> post('nomor_akte_notaris'),
		$npwp = $this -> input -> post('npwp'),
		$verifikasi = $this -> input -> post('verifikasi'),

		// tb_alamat_subak
		$br_lingkungan_subak = $this -> input -> post('br_lingkungan_subak'),
		$desa_subak = $this -> input -> post('desa_subak'),
		$kecamatan_subak = $this -> input -> post('kecamatan_subak'),
		$kabupaten_subak = $this -> input -> post('kabupaten_subak'),
		$kode_pos = $this -> input -> post('kode_pos'),

		// tb_prajuru
		$masa_bhakti_ayahan_start = $this -> input -> post('masa_bhakti_ayahan_start'),
		$masa_bhakti_ayahan_end = $this -> input -> post('masa_bhakti_ayahan_end'),
		$pekaseh_nama = $this -> input -> post('pekaseh_nama'),
		$pekaseh_npwp = $this -> input -> post('pekaseh_npwp'),
		$pekaseh_hp_wa = $this -> input -> post('pekaseh_hp_wa'),
		$petajuh_nama = $this -> input -> post('petajuh_nama'),
		$petajuh_npwp = $this -> input -> post('petajuh_npwp'),
		$petajuh_hp_wa = $this -> input -> post('petajuh_hp_wa'),
		$penyarikan_nama = $this -> input -> post('penyarikan_nama'),
		$penyarikan_npwp = $this -> input -> post('penyarikan_npwp'),
		$penyarikan_hp_wa = $this -> input -> post('penyarikan_hp_wa'),

		//tb_perahyangan
		$ketersediaan_pura_bedugul = $this -> input -> post('ketersediaan_pura_bedugul'),
		// perahyangan subak bedugul ada
		$pura_bedugul_disungsung = $this -> input -> post('pura_bedugul_disungsung'),
		$pura_bedugul_disungsung_lain = $this -> input -> post('pura_bedugul_disungsung_lain'),
		$alamat_pura_bedugul = $this -> input -> post('alamat_pura_bedugul'),
		$hari_piodalan_wali = $this -> input -> post('hari_piodalan_wali'),
		$jumlah_pelinggih = $this -> input -> post('jumlah_pelinggih'),
		$foto_pura = $this -> input -> post('foto_pura'),  /////////////////////////////
		// perahyangan subak bedugul tidak ada
		$alamat_pura = $this -> input -> post('alamat_pura'),
		$piodalan_wali_pertahun = $this -> input -> post('piodalan_wali_pertahun'),
		$foto_pura = $this -> input -> post('foto_pura'),
		// perahyangan subak aci aci
		$aci_aci = $this -> input -> post('aci_aci'),
		// perahyangan subak inventaris
		$inventaris = $this -> input -> post('inventaris'),
		// perahyangan penyungsung lain
		$penyungsung_lain = $this -> input -> post('penyungsung_lain'),
		// perahyangan penyungsung lain tidak ada bedugul
		$penyungsung_lain_tidakada_bedugul = $this -> input -> post('penyungsung_lain_tidakada_bedugul'),

		// tb_pawongan
		$jumlah_krama_pemilik_lahan = $this -> input -> post('jumlah_krama_pemilik_lahan'),
		$jumlah_krama_penyakap = $this -> input -> post('jumlah_krama_penyakap'),
		$nama_penyakap = $this -> input -> post('nama_penyakap'),
		$tingkat_pendidikan_penyakap = $this -> input -> post('tingkat_pendidikan_penyakap'),
		$awig_awig = $this -> input -> post('awig_awig'),
		$perarem = $this -> input -> post('perarem'),
		$nama_perarem = $this -> input -> post('nama_perarem'),

		// tb_palemahan
		$luas_lahan_awal_ha = $this -> input -> post('luas_lahan_awal_ha'),
		$luas_lahan_sekarang_ha = $this -> input -> post('luas_lahan_sekarang_ha'),
		$panjang_saluran_irigasi_tersier_ml = $this -> input -> post('panjang_saluran_irigasi_tersier_ml'),
		$panjang_jalan_usaha_tani_ml = $this -> input -> post('panjang_jalan_usaha_tani_ml'),
		$bale_timbang = $this -> input -> post('bale_timbang'),
		$batas_wilayah_subak_utara = $this -> input -> post('batas_wilayah_subak_utara'),
		$batas_wilayah_subak_timur = $this -> input -> post('batas_wilayah_subak_timur'),
		$batas_wilayah_subak_selatan = $this -> input -> post('batas_wilayah_subak_selatan'),
		$batas_wilayah_subak_barat = $this -> input -> post('batas_wilayah_subak_barat'),
		$sumber_aliran_air_das = $this -> input -> post('sumber_aliran_air_das'),
		$jumlah_dam = $this -> input -> post('jumlah_dam'),
		$lokasi_dam = $this -> input -> post('lokasi_dam'),
		$jumlah_temukuaya = $this -> input -> post('jumlah_temukuaya'),
		$lokasi_temukuaya = $this -> input -> post('lokasi_temukuaya'),
		$masa_musim_tanam_pertahun = $this -> input -> post('masa_musim_tanam_pertahun'),
		$tanaman_penyela = $this -> input -> post('tanaman_penyela'),
		// palemahan bantuan pemerintah
		$nama_bantuan = $this -> input -> post('nama_bantuan'),
		$tahun = $this -> input -> post('tahun'),
		$nilai_rp = $this -> input -> post('nilai_rp'),
		// palemahan hama
		$nama_hama = $this -> input -> post('nama_hama'),
		// palemahan tanaman pokok
		$tanaman_pokok = $this -> input -> post('tanaman_pokok'),
		// palemahan jenis tanaman pokok
		$jenis_tanaman_pokok = $this -> input -> post('jenis_tanaman_pokok'),
		// palemahan nama hama
		$nama_hama = $this -> input -> post('nama_hama'),
		// palemahan nama bantuan
		$nama_bantuan = $this -> input -> post('nama_bantuan'),
		// palemahan tahun bantuan
		$tahun_bantuan = $this -> input -> post('tahun_bantuan'),
		// palemahan nilai rp bantuan
		$nilai_rp_bantuan = $this -> input -> post('nilai_rp_bantuan'),


		];

		$this->SubakModel->insert_subak($data);
        redirect('subak');

	}
}
