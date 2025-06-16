<?php
class DashboardSubakTerdata	 extends CI_Controller {

	public function __construct() {
        parent::__construct();
        $this->load->model('SubakModel');
    }
	
	public function index()
	{
		$data['judul'] = 'Dashboard';
		$this -> load -> model('SubakModel');
		$data['totalsubak'] = $this->SubakModel-> get_all_subak();
	
		$this -> load -> library('pagination');
		$config['base_url'] = 'http://localhost/PendataanSubakGianyar/DashboardSubakTerdata/index';
		$config['per_page'] = 10;
		$data['start'] = $this -> uri -> segment(3);
        $this->pagination->initialize($config);
        $data['totalsubak'] = $this-> SubakModel -> pagination($config['per_page'] ,$data['start']);
		$data['link'] =  $this->pagination->create_links();
		echo $this->pagination->create_links();

		$this->load->view('templates/dashboard/headerdashboard', $data);
		$this->load->view('templates/dashboard/sidepaneldashboard');
		$this->load->view('dashboard/dashboardsubakterdata',$data);
		$this->load->view('templates/dashboard/footerdashboard');
	}

    public function update_data($id_subak)
    {
		// SUBAK
		$data_subak =[
            'nama_subak' => $this->input->post('nama_subak'),
            'kriteria_subak' => $this->input->post('kriteria_subak'),
            'nomor_akte_notaris' => $this->input->post('nomor_akte_notaris'),
            'npwp' => $this->input->post('npwp'),
            'verifikasi' => $this->input->post('verifikasi'),
		];
		$this->SubakModel->update_tb_subak($id_subak, $data);
        
		// ALAMAT SUBAK
		$data_alamat = [
            'id_subak' => $id_subak,
            'br_lingkungan_subak' => $this->input->post('br_lingkungan_subak'),
            'desa_subak' => $this->input->post('desa_subak'),
            'kecamatan_subak' => $this->input->post('kecamatan_subak'),
            'kabupaten_subak' => $this->input->post('kabupaten_subak'),
            'kode_pos' => $this->input->post('kode_pos')
        ];
        $this->SubakModel->update_tb_alamat_subak($id_subak, $data_alamat);

		// PRAJURU
		$data_prajuru = [
			'id_subak' => $id_subak,
            'masa_bhakti_ayahan_start' => $this->input->post('masa_bhakti_ayahan_start'),
            'masa_bhakti_ayahan_end' => $this->input->post('masa_bhakti_ayahan_end'),
            'pekaseh_nama' => $this->input->post('pekaseh_nama'),
            'pekaseh_npwp' => $this->input->post('pekaseh_npwp'),
            'pekaseh_hp_wa' => $this->input->post('pekaseh_hp_wa'),
            'petajuh_nama' => $this->input->post('petajuh_nama'),
            'petajuh_npwp' => $this->input->post('petajuh_npwp'),
            'petajuh_hp_wa' => $this->input->post('petajuh_hp_wa'),
            'penyarikan_nama' => $this->input->post('penyarikan_nama'),
            'penyarikan_npwp' => $this->input->post('penyarikan_npwp'),
            'penyarikan_hp_wa' => $this->input->post('penyarikan_hp_wa'),
        ];
        $this->SubakModel->update_tb_prajuru($id_subak, $data_prajuru);
       
		// PERAHYANGAN
        $data_perahyangan = [
		    'id_subak' => $id_subak,
            'ketersediaan_pura_bedugul' => $this->input->post('ketersediaan_pura_bedugul'),
		];
        $this->SubakModel->update_tb_perahyangan($id_subak, $data_perahyangan);
       
        // PERAHYANGAN PURA BEDUGUL ADA
        $data_perahyangan_pura_bedugul_ada = [
            'id_perahyangan' => $id_perahyangan,
            'nama_pura' => $this->input->post('nama_pura'),
            'pura_bedugul_disungsung' => $this->input->post('pura_bedugul_disungsung'),
            'pura_bedugul_disungsung_lain' => $this->input->post('pura_bedugul_disungsung_lain'),
            'alamat_pura_bedugul' => $this->input->post('alamat_pura_bedugul'),
            'piodalan_wali_pertahun' => $this->input->post('piodalan_wali_pertahun'),
            'hari_piodalan_wali' => $this->input->post('hari_piodalan_wali'),
            'jumlah_pelinggih' => $this->input->post('jumlah_pelinggih'), 
		];
        $this->SubakModel->update_tb_perahyangan($id_subak, $data_perahyangan);

        // PERAHYANGAN INVENTARIS
		$id_inventaris_array = $this->input->post('id_inventaris');
		$inventaris_array = $this->input->post('inventaris');

		if ($id_inventaris_array && $inventaris_array) {
			for ($i = 0; $i < count($inventaris_array); $i++) {
				$id_inventaris = $id_inventaris_array[$i];
				$inventaris = $inventaris_array[$i];

				if (!empty($inventaris)) {
					$this->SubakModel->update_tb_perahyangan_inventaris($id_inventaris, [
						'inventaris' => $inventaris
					]);
				}
			}
		}
	
		// PERAHYANGAN ACI-ACI
		$id_aci_subak_array = $this->input->post('id_aci_subak');
		$aci_aci_subak_array = $this->input->post('aci_aci_subak');

		if ($aci_aci_subak_array && $id_aci_subak_array) {
			for ($i = 0; $i < count($aci_aci_subak_array); $i++) {
				$id_aci_subak = $id_aci_subak_array[$i];
				$aci_aci_subak = $aci_aci_subak_array[$i];

				if (!empty($aci_aci_subak)) {
					$this->SubakModel->update_tb_perahyangan_aci_aci_subak($id_aci_subak, [
						'aci_aci_subak' => $aci_aci_subak
					]);
				}
			}
		}

        // PERAHYANGAN FOTO PURA
		$id_foto_pura_array = $this->input->post('id_foto_pura');
		$foto_pura_array = $this->input->post('foto_pura');

		if ($id_foto_pura_array && $foto_pura_array) {
			for ($i = 0; $i < count($foto_pura_array); $i++) {
				$id_foto_pura = $id_foto_pura_array[$i];
				$foto_pura = $foto_pura_array[$i];

				if (!empty($foto_pura)) {
					$this->SubakModel->update_tb_perahyangan_foto_pura($id_foto_pura, [
						'foto_pura' => $foto_pura
					]);
				}
			}
		}

        // PERAHYANGAN FOTO PURA2
		$id_foto_pura_array2 = $this->input->post('id_foto_pura2');
		$foto_pura_array2 = $this->input->post('foto_pura2');

		if ($id_foto_pura_array2 && $foto_pura_array2) {
			for ($i = 0; $i < count($foto_pura_array2); $i++) {
				$id_foto_pura2 = $id_foto_pura_array2[$i];
				$foto_pura2 = $foto_pura_array2[$i];

				if (!empty($foto_pura2)) {
					$this->SubakModel->update_tb_perahyangan_foto_pura2($id_foto_pura2, [
						'foto_pura2' => $foto_pura2
					]);
				}
			}
		}

        // PAWONGAN
        $data_pawongan = [
            'id_subak' => $id_subak,
            'jumlah_krama_pemilik_lahan'=> $this->input->post('jumlah_krama_pemilik_lahan'),
            'jumlah_krama_penyakap' => $this->input->post('jumlah_krama_penyakap'),
            'awig_awig' => $this->input->post('awig_awig'),
            'perarem' => $this->input->post('perarem'),
            'perarem_alih_fungsi' => $this->input->post('perarem_alih_fungsi'),
        ];
        $this->SubakModel->update_tb_pawongan($id_subak, $data_pawongan);

        // PAWONGAN NAMA PERAREM
		$id_nama_perarem_array = $this->input->post('id_nama_perarem');
		$nama_perarem_array = $this->input->post('nama_perarem');

		if ($id_nama_perarem_array && $nama_perarem_array) {
			for ($i = 0; $i < count($nama_perarem_array); $i++) {
				$id_nama_perarem = $id_nama_perarem_array[$i];
				$nama_perarem = $nama_perarem_array[$i];

				if (!empty($nama_perarem)) {
					$this->SubakModel->update_tb_pawongan_nama_perarem($id_nama_perarem, [
						'nama_perarem' => $nama_perarem
					]);
				}
			}
		}

        // PAWONGAN NAMA PENYAKAP
		$id_nama_penyakap_list = $this->input->post('id_nama_penyakap');
		$nama_penyakap_list = $this->input->post('nama_penyakap');
		$pendidikan_penyakap_list = $this->input->post('tingkat_pendidikan_penyakap');

		if (!empty($nama_penyakap_list) && is_array($nama_penyakap_list)) {
			foreach ($nama_penyakap_list as $i => $nama_penyakap) {
				if (!empty($nama_penyakap)) {
					$this->SubakModel->update_tb_pawongan_nama_penyakap($id_nama_penyakap_list[$i], [
						'nama_penyakap' => $nama_penyakap,
						'tingkat_pendidikan_penyakap' => $pendidikan_penyakap_list[$i] ?? null,
					]);
				}
			}
		}

        // PALEMAHAN
        $data_palemahan = [
            'id_subak' => $id_subak,
            'luas_lahan_awal_ha' => $this->input->post('luas_lahan_awal_ha'),
            'luas_lahan_sekarang_ha' => $this->input->post('luas_lahan_sekarang_ha'),
            'panjang_saluran_irigasi_tersier_ml' => $this->input->post('panjang_saluran_irigasi_tersier_ml'),
            'panjang_jalan_usaha_tani_ml' => $this->input->post('panjang_jalan_usaha_tani_ml'),
            'bale_timbang' => $this->input->post('bale_timbang'),
            'batas_wilayah_subak_utara' => $this->input->post('batas_wilayah_subak_utara'),
            'batas_wilayah_subak_timur' => $this->input->post('batas_wilayah_subak_timur'),
            'batas_wilayah_subak_selatan' => $this->input->post('batas_wilayah_subak_selatan'),
            'batas_wilayah_subak_barat' => $this->input->post('batas_wilayah_subak_barat'),
            'sumber_aliran_air_das' => $this->input->post('sumber_aliran_air_das'),
            'jumlah_dam' => $this->input->post('jumlah_dam'),
            'lokasi_dam' => $this->input->post('lokasi_dam'),
            'jumlah_temukuaya' => $this->input->post('jumlah_temukuaya'),
            'lokasi_temukuaya' => $this->input->post('lokasi_temukuaya'),
            'masa_musim_tanam_pertahun' => $this->input->post('masa_musim_tanam_pertahun'),
            'tanaman_penyela' => $this->input->post('tanaman_penyela'),
        ];
        $this->SubakModel->update_tb_palemahan($id_subak, $data_palemahan);

        // PALEMAHAN TANAMAN POKOK
        $data_palemahan_tanaman_pokok = [
            'id_palemahan' => $id_palemahan,
            'tanaman_pokok' => $this->input->post('tanaman_pokok'),
        ];
        $this->SubakModel->update_tb_pawongan($id_subak, $data_palemahan_tanaman_pokok);

		// PALEMAHAN TANAMAN POKOK
        $data_palemahan_jenis_tanaman_pokok = [
            'id_palemahan' => $id_palemahan,
            'jenis_tanaman_pokok' => $this->input->post('jenis_tanaman_pokok'),
        ];
        $this->SubakModel->update_tb_palemahan_jenis_tanaman_pokok($id_subak, $update_tb_palemahan_jenis_tanaman_pokok);

        // PALEMAHAN HAMA
		$id_hama_list = $this->input->post('id_hama');
		$nama_hama_list = $this->input->post('nama_hama');

		foreach ($id_hama_list as $i => $id_hama) {
			$data = [
				'id_palemahan' => $id_palemahan,
				'nama_hama'    => $nama_hama_list[$i] ?? null,
			];
			$this->SubakModel->update_tb_palemahan_hama($id_hama, $data);
		}

        // PALEMAHAN BANTUAN PEMERINTAH
		$id_bantuan_list     = $this->input->post('id_bantuan_pemerintah');
		$nama_bantuan        = $this->input->post('nama_bantuan');
		$tahun_bantuan       = $this->input->post('tahun_bantuan');
		$nilai_rp_bantuan    = $this->input->post('nilai_rp_bantuan');

		foreach ($id_bantuan_list as $i => $id_bantuan) {
			$data = [
				'id_palemahan'      => $id_palemahan,
				'nama_bantuan'      => $nama_bantuan[$i] ?? null,
				'tahun_bantuan'     => $tahun_bantuan[$i] ?? null,
				'nilai_rp_bantuan'  => $nilai_rp_bantuan[$i] ?? null
			];
			$this->SubakModel->update_tb_palemahan_bantuan_pemerintah($id_bantuan, $data);
		}






        redirect(base_url('DashboardHome'));
    }
}

