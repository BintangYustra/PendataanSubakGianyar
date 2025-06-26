<?php
class DashboardSubakTerdata	 extends CI_Controller {

	public function __construct() {
        parent::__construct();
        $this->load->model('SubakModel');
    }
	
	public function index()
	{
		$data['judul'] = 'Dashboard';
		$data['totalsubak'] = $this->SubakModel-> get_all_subak();
	
		$this -> load -> library('pagination');
		$config['base_url'] = 'http://localhost/PendataanSubakGianyar/DashboardSubakTerdata/index';
		$config['per_page'] = 50;
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
	
    public function DashboardViewData($id_subak) {
        $data['subak'] = $this->SubakModel->get_subak_by_id($id_subak);
		$data['alamat'] = $this->SubakModel->get_alamat_by_id($id_subak);
		$data['prajuru'] = $this->SubakModel->get_prajuru_by_id($id_subak);
		$data['perahyangan'] = $this->SubakModel->get_perahyangan_by_id($id_subak);
		$data['perahyanganpurabedugulada'] = $this->SubakModel->get_perahyanganpurabedugulada_by_id($id_subak);
		$data['perahyanganpurabeduguladaaciaci'] = $this->SubakModel->get_perahyangan_aci_aci_by_id($id_subak);
		$data['perahyanganpurabeduguladainventaris'] = $this->SubakModel->get_perahyangan_inventaris_by_id($id_subak);
		$data['perahyanganpurabeduguladafotopura'] = $this->SubakModel->get_perahyangan_foto_pura_by_id($id_subak);
		$data['perahyanganpurabedugultidakada'] = $this->SubakModel->get_perahyanganpurabedugultidakada_by_id($id_subak);
		$data['perahyanganpurabedugultidakada2'] = $this->SubakModel->get_perahyanganpurabedugultidakada2_by_id($id_subak);
		$data['perahyanganpurabedugultidakada3'] = $this->SubakModel->get_perahyanganpurabedugultidakada3_by_id($id_subak);
		$data['perahyanganpurabedugultidakadafotopura2'] = $this->SubakModel->get_perahyangan_foto_pura_by_id2($id_subak);
		$data['pawongan'] = $this->SubakModel->get_pawongan_by_id($id_subak);
		$data['pawongannamapenyakap'] = $this->SubakModel->get_pawongan_nama_penyakap_by_id($id_subak);
		$data['pawongannamaperarem'] = $this->SubakModel->get_pawongan_nama_perarem_by_id($id_subak);
		$data['palemahan'] = $this->SubakModel->get_palemahan_by_id($id_subak);
		$data['palemahantanamanpokok'] = $this->SubakModel->get_palemahan_tanaman_pokok_by_id($id_subak);
		$data['palemahanjenistanamanpokok'] = $this->SubakModel->get_palemahan_jenis_tanaman_pokok_by_id($id_subak);
		$data['palemahanhama'] = $this->SubakModel->get_palemahan_hama_by_id($id_subak);
		$data['palemahanbantaunpemerintah'] = $this->SubakModel->get_palemahan_bantuan_pemerintah_by_id($id_subak);
		
        if (empty($data['subak'])) {
            show_404();
        }

        $this->load->view('/dashboard/dashboardviewdata', $data);
    }
	
    public function VerifikasiDataSubak($id_subak) {
        $data['subak'] = $this->SubakModel->get_subak_by_id($id_subak);
		$data['alamat'] = $this->SubakModel->get_alamat_by_id($id_subak);
		$data['prajuru'] = $this->SubakModel->get_prajuru_by_id($id_subak);
		$data['perahyangan'] = $this->SubakModel->get_perahyangan_by_id($id_subak);
		$data['perahyanganpurabedugulada'] = $this->SubakModel->get_perahyanganpurabedugulada_by_id($id_subak);
		$data['perahyanganpurabeduguladaaciaci'] = $this->SubakModel->get_perahyangan_aci_aci_by_id($id_subak);
		$data['perahyanganpurabeduguladainventaris'] = $this->SubakModel->get_perahyangan_inventaris_by_id($id_subak);
		$data['perahyanganpurabeduguladafotopura'] = $this->SubakModel->get_perahyangan_foto_pura_by_id($id_subak);
		$data['perahyanganpurabedugultidakada'] = $this->SubakModel->get_perahyanganpurabedugultidakada_by_id($id_subak);
		$data['perahyanganpurabedugultidakada2'] = $this->SubakModel->get_perahyanganpurabedugultidakada2_by_id($id_subak);
		$data['perahyanganpurabedugultidakada3'] = $this->SubakModel->get_perahyanganpurabedugultidakada3_by_id($id_subak);
		$data['perahyanganpurabedugultidakadafotopura2'] = $this->SubakModel->get_perahyangan_foto_pura_by_id2($id_subak);
		$data['pawongan'] = $this->SubakModel->get_pawongan_by_id($id_subak);
		$data['pawongannamapenyakap'] = $this->SubakModel->get_pawongan_nama_penyakap_by_id($id_subak);
		$data['pawongannamaperarem'] = $this->SubakModel->get_pawongan_nama_perarem_by_id($id_subak);
		$data['palemahan'] = $this->SubakModel->get_palemahan_by_id($id_subak);
		$data['palemahantanamanpokok'] = $this->SubakModel->get_palemahan_tanaman_pokok_by_id($id_subak);
		$data['palemahanjenistanamanpokok'] = $this->SubakModel->get_palemahan_jenis_tanaman_pokok_by_id($id_subak);
		$data['palemahanhama'] = $this->SubakModel->get_palemahan_hama_by_id($id_subak);
		$data['palemahanbantaunpemerintah'] = $this->SubakModel->get_palemahan_bantuan_pemerintah_by_id($id_subak);
		
        if (empty($data['subak'])) {
            show_404();
        }

        $this->load->view('/dashboard/dashboardverifikasi', $data);
    }

	public function VerifikasiAccept()
	{
		$id_subak = $this->input->post('id_subak');
		$status = $this->input->post('verifikasi');
		if (!empty($id_subak) && !empty($status)) {
			$data = ['verifikasi' => $status];
			$this->SubakModel->update_tb_subak($id_subak, $data);
		}
		redirect(base_url('DashboardSubakTerdata'));
	}

	public function MasukHalaman($id_subak){
        $data['subak'] = $this->SubakModel->get_subak_by_id($id_subak);
		$data['alamat'] = $this->SubakModel->get_alamat_by_id($id_subak);
		$data['prajuru'] = $this->SubakModel->get_prajuru_by_id($id_subak);
		$data['perahyangan'] = $this->SubakModel->get_perahyangan_by_id($id_subak);
		$data['perahyanganpurabedugulada'] = $this->SubakModel->get_perahyanganpurabedugulada_by_id($id_subak);
		$data['perahyanganpurabeduguladaaciaci'] = $this->SubakModel->get_perahyangan_aci_aci_by_id($id_subak);
		$data['perahyanganpurabeduguladainventaris'] = $this->SubakModel->get_perahyangan_inventaris_by_id($id_subak);
		$data['perahyanganpurabeduguladafotopura'] = $this->SubakModel->get_perahyangan_foto_pura_by_id($id_subak);
		$data['perahyanganpurabedugultidakada'] = $this->SubakModel->get_perahyanganpurabedugultidakada_by_id($id_subak);
		$data['perahyanganpurabedugultidakada2'] = $this->SubakModel->get_perahyanganpurabedugultidakada2_by_id($id_subak);
		$data['perahyanganpurabedugultidakada3'] = $this->SubakModel->get_perahyanganpurabedugultidakada3_by_id($id_subak);
		$data['perahyanganpurabedugultidakadafotopura2'] = $this->SubakModel->get_perahyangan_foto_pura_by_id2($id_subak);
		$data['pawongan'] = $this->SubakModel->get_pawongan_by_id($id_subak);
		$data['pawongannamapenyakap'] = $this->SubakModel->get_pawongan_nama_penyakap_by_id($id_subak);
		$data['pawongannamaperarem'] = $this->SubakModel->get_pawongan_nama_perarem_by_id($id_subak);
		$data['palemahan'] = $this->SubakModel->get_palemahan_by_id($id_subak);
		$data['palemahantanamanpokok'] = $this->SubakModel->get_palemahan_tanaman_pokok_by_id($id_subak);
		$data['palemahanjenistanamanpokok'] = $this->SubakModel->get_palemahan_jenis_tanaman_pokok_by_id($id_subak);
		$data['palemahanhama'] = $this->SubakModel->get_palemahan_hama_by_id($id_subak);
		$data['palemahanbantaunpemerintah'] = $this->SubakModel->get_palemahan_bantuan_pemerintah_by_id($id_subak);
		$this->load->view('/dashboard/dashboardupdatedata', $data);	
	}

	public function MultiTable($id_perahyangan){

	}
	
    public function DashboardUpdateDataSubak($id_subak)
    {		
		$id_subak = $this->input->post('id_subak');
		$update_data_subak = [	
			'id_subak' => $id_subak,
			'nama_subak' => $this->input->post('nama_subak'),
			'kriteria_subak' => $this->input->post('kriteria_subak'),
			'nomor_akte_notaris' => $this->input->post('nomor_akte_notaris'),
			'npwp' => $this->input->post('npwp'),
		];
		$this->SubakModel->update_tb_subak($id_subak, $update_data_subak);

		$update_tb_alamat_subak = [
			'br_lingkungan_subak' => $this->input->post('br_lingkungan_subak'),
			'desa_subak' => $this->input->post('desa_subak'),
			'kecamatan_subak' => $this->input->post('kecamatan_subak'),
			'kabupaten_subak' => $this->input->post('kabupaten_subak'),
			'kode_pos' => $this->input->post('kode_pos'),
		];
		$this->SubakModel->update_tb_alamat_subak($id_subak, $update_tb_alamat_subak);
        
		$update_tb_prajuru = [
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
		$this->SubakModel->update_tb_prajuru($id_subak, $update_tb_prajuru);

		$update_tb_perahyangan = [
            'ketersediaan_pura_bedugul' => $this->input->post('ketersediaan_pura_bedugul'),
		];
		$this->SubakModel->update_tb_perahyangan($id_subak, $update_tb_perahyangan);
                
		$update_tb_perahyangan_pura_bedugul_ada = [
			'nama_pura' => $this->input->post('nama_pura'),
			'pura_bedugul_disungsung' => $this->input->post('pura_bedugul_disungsung'),
			'pura_bedugul_disungsung_lain' => $this->input->post('pura_bedugul_disungsung_lain'),
			'alamat_pura_bedugul' => $this->input->post('alamat_pura_bedugul'),
			'piodalan_wali_pertahun' => $this->input->post('piodalan_wali_pertahun'),
			'hari_piodalan_wali' => $this->input->post('hari_piodalan_wali'),
			'jumlah_pelinggih' => $this->input->post('jumlah_pelinggih'),        
		];
		$this->SubakModel->update_tb_perahyangan_pura_bedugul_ada($id_subak, $update_tb_perahyangan_pura_bedugul_ada);


		$update_tb_pawongan = [
            'jumlah_krama_pemilik_lahan'=> $this->input->post('jumlah_krama_pemilik_lahan'),
            'jumlah_krama_penyakap' => $this->input->post('jumlah_krama_penyakap'),
            'awig_awig' => $this->input->post('awig_awig'),
            'perarem' => $this->input->post('perarem'),
            'perarem_alih_fungsi' => $this->input->post('perarem_alih_fungsi'),
		];
		$this->SubakModel->update_tb_pawongan($id_subak, $update_tb_pawongan);

		$update_tb_palemahan = [
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
		$this->SubakModel->update_tb_palemahan($id_subak, $update_tb_palemahan);


		// CONTROLLER ARRAY UPDATE
		$id_pawongan = $this->input->post('id_pawongan');
		$pawongan_row = $this->SubakModel->get_pawongan_by_id($id_subak);
		$id_pawongan = $pawongan_row ? $pawongan_row->id_pawongan : null;

		$id_palemahan = $this->input->post('id_palemahan');
		$palemahan_row = $this->SubakModel->get_palemahan_by_id($id_subak);
		$id_palemahan = $palemahan_row ? $palemahan_row->id_palemahan : null;

		$id_perahyangan = $this->input->post('id_perahyangan');
		$perahyangan_row = $this->SubakModel->get_perahyangan_by_id($id_subak);
		$id_perahyangan = $perahyangan_row ? $perahyangan_row->id_perahyangan : null;

		$id_perahyangan_pura_bedugul_ada = $this->input->post('id_perahyangan_pura_bedugul_ada');
		$pura = $this->SubakModel->get_perahyanganpurabedugulada_by_id($id_perahyangan_pura_bedugul_ada);
		$id_perahyangan_pura_bedugul_ada = $pura ? $pura->id_perahyangan_pura_bedugul_ada : null;

		// update aci-aci
		$aci_aci_subak = $this->input->post('aci_aci_subak');
		$data_aci_aci_subak = [];
		if (!empty($aci_aci_subak)) {
			foreach ($aci_aci_subak as $aci_aci) {
				if (!empty($aci_aci)) {
					$data_aci_aci_subak[] = [
						'aci_aci_subak' => $aci_aci
					];
				}
			}
		}
		$this->SubakModel->update_aci_aci($id_perahyangan_pura_bedugul_ada, $data_aci_aci_subak);


		// update nama penyakap + pendidikan
		$nama_penyakap = $this->input->post('nama_penyakap');
		$tingkat_pendidikan_penyakap = $this->input->post('tingkat_pendidikan_penyakap');
		$data_nama_penyakap = [];
		if (!empty($nama_penyakap)) {
			foreach ($nama_penyakap as $i => $nama_penyakap) {
				if (!empty($nama_penyakap) || !empty($tingkat_pendidikan_penyakap[$i])) {
					$data_nama_penyakap[] = [
						'nama_penyakap' => $nama_penyakap,
						'tingkat_pendidikan_penyakap' => $tingkat_pendidikan_penyakap[$i],
					];
				}
			}
			$this->SubakModel->update_nama_penyakap($id_pawongan, $data_nama_penyakap);
		}

		// update nama perarem
		$nama_perarem = $this->input->post('nama_perarem');
		$data_nama_perarem = [];
		if (!empty($nama_perarem)) {
			foreach ($nama_perarem as $perarem) {
				if (!empty($perarem)) {
					$data_nama_perarem[] = [
						'nama_perarem' => $perarem
					];
				}
			}
			$this->SubakModel->update_nama_perarem($id_pawongan, $data_nama_perarem);
		}

		// update tanaman pokok
		$tanaman_pokok = $this->input->post('tanaman_pokok');
		$data_tanaman_pokok = [];
		if (!empty($tanaman_pokok)) {
			foreach ($tanaman_pokok as $tanaman) {
				if (!empty($tanaman)) {
					$data_tanaman_pokok[] = [
						'tanaman_pokok' => $tanaman
					];
				}
			}
			$this->SubakModel->update_tanaman_pokok($id_palemahan, $data_tanaman_pokok);
		}

		// update jenis tanaman pokok
		$jenis_tanaman_pokok = $this->input->post('jenis_tanaman_pokok');
		$data_jenis_tanaman = [];
		if (!empty($jenis_tanaman_pokok)) {
			foreach ($jenis_tanaman_pokok as $jenis) {
				if (!empty($jenis)) {
					$data_jenis_tanaman[] = [
						'jenis_tanaman_pokok' => $jenis
					];
				}
			}
			$this->SubakModel->update_jenis_tanaman_pokok($id_palemahan, $data_jenis_tanaman);
		}

		// update hama
		$hama = $this->input->post('nama_hama');
		$data_hama = [];
		if (!empty($hama)) {
			foreach ($hama as $nama_hama) {
				if (!empty($nama_hama)) {
					$data_hama[] = [
						'nama_hama' => $nama_hama
					];
				}
			}
			$this->SubakModel->update_hama($id_palemahan, $data_hama);
		}

		// update bantuan pemerintah
		$nama_bantuan = $this->input->post('nama_bantuan');
		$tahun_bantuan = $this->input->post('tahun_bantuan');
		$nilai_rp_bantuan = $this->input->post('nilai_rp_bantuan');
		$data_bantuan = [];
		if (!empty($nama_bantuan)) {
			foreach ($nama_bantuan as $i => $nama) {
				if (!empty($nama) || !empty($tahun_bantuan[$i]) || !empty($nilai_rp_bantuan[$i])) {
					$data_bantuan[] = [
						'nama_bantuan' => $nama,
						'tahun_bantuan' => $tahun_bantuan[$i],
						'nilai_rp_bantuan' => $nilai_rp_bantuan[$i]
					];
				}
			}
			$this->SubakModel->update_bantuan_pemerintah($id_palemahan, $data_bantuan);
		}



		// JIKA SALAH SATU FIELD KOSONG, PAKAI INI UNTUK ADD DATA LANGSUNG KE DATABASE
		// UPDATE SUBAK EMPTY
		$update_data_subak = [];
		if ($this->input->post('nama_subak') != '') {
			$update_data_subak['nama_subak'] = $this->input->post('nama_subak');
		}
		if ($this->input->post('kriteria_subak') != '') {
			$update_data_subak['kriteria_subak'] = $this->input->post('kriteria_subak');
		}
		if ($this->input->post('nomor_akte_notaris') != '') {
			$update_data_subak['nomor_akte_notaris'] = $this->input->post('nomor_akte_notaris');
		}
		if ($this->input->post('npwp') != '') {
			$update_data_subak['npwp'] = $this->input->post('npwp');
		}
		if ($this->input->post('verifikasi') != '') {
			$update_data_subak['verifikasi'] = $this->input->post('verifikasi');
		}
		if (!empty($update_data_subak)) {
			$this->SubakModel->update_tb_subak($id_subak, $update_data_subak);
		}

		// UPDATE ALAMAT SUBAK EMPTY
		$update_tb_alamat_subak = [];
		if (!empty($this->input->post('br_lingkungan_subak'))) {
			$update_tb_alamat_subak['br_lingkungan_subak'] = $this->input->post('br_lingkungan_subak');
		}
		if (!empty($this->input->post('desa_subak'))) {
			$update_tb_alamat_subak['desa_subak'] = $this->input->post('desa_subak');
		}
		if (!empty($this->input->post('kecamatan_subak'))) {
			$update_tb_alamat_subak['kecamatan_subak'] = $this->input->post('kecamatan_subak');
		}
		if (!empty($this->input->post('kabupaten_subak'))) {
			$update_tb_alamat_subak['kabupaten_subak'] = $this->input->post('kabupaten_subak');
		}
		if (!empty($this->input->post('kode_pos'))) {
			$update_tb_alamat_subak['kode_pos'] = $this->input->post('kode_pos');
		}
		if (!empty($update_tb_alamat_subak)) {
			$this->SubakModel->update_tb_alamat_subak($id_subak, $update_tb_alamat_subak);
		}

		// UPDATE PRAJURU SUBAK EMPTY
		$update_tb_prajuru = [];
		if (!empty($this->input->post('masa_bhakti_ayahan_start'))) {
			$update_tb_prajuru['masa_bhakti_ayahan_start'] = $this->input->post('masa_bhakti_ayahan_start');
		}
		if (!empty($this->input->post('masa_bhakti_ayahan_end'))) {
			$update_tb_prajuru['masa_bhakti_ayahan_end'] = $this->input->post('masa_bhakti_ayahan_end');
		}
		if (!empty($this->input->post('pekaseh_nama'))) {
			$update_tb_prajuru['pekaseh_nama'] = $this->input->post('pekaseh_nama');
		}
		if (!empty($this->input->post('pekaseh_npwp'))) {
			$update_tb_prajuru['pekaseh_npwp'] = $this->input->post('pekaseh_npwp');
		}
		if (!empty($this->input->post('pekaseh_hp_wa'))) {
			$update_tb_prajuru['pekaseh_hp_wa'] = $this->input->post('pekaseh_hp_wa');
		}
		if (!empty($this->input->post('petajuh_nama'))) {
			$update_tb_prajuru['petajuh_nama'] = $this->input->post('petajuh_nama');
		}
		if (!empty($this->input->post('petajuh_npwp'))) {
			$update_tb_prajuru['petajuh_npwp'] = $this->input->post('petajuh_npwp');
		}
		if (!empty($this->input->post('petajuh_hp_wa'))) {
			$update_tb_prajuru['petajuh_hp_wa'] = $this->input->post('petajuh_hp_wa');
		}
		if (!empty($this->input->post('penyarikan_nama'))) {
			$update_tb_prajuru['penyarikan_nama'] = $this->input->post('penyarikan_nama');
		}
		if (!empty($this->input->post('penyarikan_npwp'))) {
			$update_tb_prajuru['penyarikan_npwp'] = $this->input->post('penyarikan_npwp');
		}
		if (!empty($this->input->post('penyarikan_hp_wa'))) {
			$update_tb_prajuru['penyarikan_hp_wa'] = $this->input->post('penyarikan_hp_wa');
		}
		if (!empty($update_tb_prajuru)) {
			$this->SubakModel->update_tb_prajuru($id_subak, $update_tb_prajuru);
		}

		// UPDATE PERAHYANGAN SUBAK EMPTY
		$update_tb_prajuru = [];
		if (!empty($this->input->post('ketersediaan_pura_bedugul'))) {
			$update_tb_prajuru['ketersediaan_pura_bedugul'] = $this->input->post('ketersediaan_pura_bedugul');
		}
		if (!empty($update_tb_perahyangan)) {
			$this->SubakModel->update_tb_perahyangan($id_subak, $update_tb_perahyangan);
		}

		// UPDATE PERAHYANGAN PURA BEDUGUL ADA SUBAK EMPTY
		$update_tb_perahyangan_pura_bedugul_ada = [];
		if (!empty($this->input->post('nama_pura'))) {
			$nama_pura['ketersediaan_pura_bedugul'] = $this->input->post('nama_pura');
		}
		if (!empty($update_tb_perahyangan_pura_bedugul_ada)) {
			$this->SubakModel->update_tb_perahyangan_pura_bedugul_ada($id_perahyangan, $update_tb_perahyangan_pura_bedugul_ada);
		}

















		// UPDATE PAWONNGAN SUBAK EMPTY
		$update_tb_pawongan = [];
		if (!empty($this->input->post('jumlah_krama_pemilik_lahan'))) {
			$update_tb_pawongan['jumlah_krama_pemilik_lahan'] = $this->input->post('jumlah_krama_pemilik_lahan');
		}
		if (!empty($this->input->post('jumlah_krama_penyakap'))) {
			$update_tb_pawongan['jumlah_krama_penyakap'] = $this->input->post('jumlah_krama_penyakap');
		}
		if (!empty($this->input->post('awig_awig'))) {
			$update_tb_pawongan['awig_awig'] = $this->input->post('awig_awig');
		}
		if (!empty($this->input->post('perarem'))) {
			$update_tb_pawongan['perarem'] = $this->input->post('perarem');
		}
		if (!empty($this->input->post('perarem_alih_fungsi'))) {
			$update_tb_pawongan['perarem_alih_fungsi'] = $this->input->post('perarem_alih_fungsi');
		}
		if (!empty($update_tb_pawongan)) {
			$this->SubakModel->update_tb_pawongan($id_subak, $update_tb_pawongan);
		}

		// UPDATE PALEMAHAN SUBAK EMPTY
		$update_tb_palemahan = [];
		if (!empty($this->input->post('luas_lahan_awal_ha'))) {
			$update_tb_palemahan['luas_lahan_awal_ha'] = $this->input->post('luas_lahan_awal_ha');
		}
		if (!empty($this->input->post('luas_lahan_sekarang_ha'))) {
			$update_tb_palemahan['luas_lahan_sekarang_ha'] = $this->input->post('luas_lahan_sekarang_ha');
		}
		if (!empty($this->input->post('panjang_saluran_irigasi_tersier_ml'))) {
			$update_tb_palemahan['panjang_saluran_irigasi_tersier_ml'] = $this->input->post('panjang_saluran_irigasi_tersier_ml');
		}
		if (!empty($this->input->post('panjang_jalan_usaha_tani_ml'))) {
			$update_tb_palemahan['panjang_jalan_usaha_tani_ml'] = $this->input->post('panjang_jalan_usaha_tani_ml');
		}
		if (!empty($this->input->post('bale_timbang'))) {
			$update_tb_palemahan['bale_timbang'] = $this->input->post('bale_timbang');
		}
		if (!empty($this->input->post('batas_wilayah_subak_utara'))) {
			$update_tb_palemahan['batas_wilayah_subak_utara'] = $this->input->post('batas_wilayah_subak_utara');
		}
		if (!empty($this->input->post('batas_wilayah_subak_timur'))) {
			$update_tb_palemahan['batas_wilayah_subak_timur'] = $this->input->post('batas_wilayah_subak_timur');
		}
		if (!empty($this->input->post('batas_wilayah_subak_selatan'))) {
			$update_tb_palemahan['batas_wilayah_subak_selatan'] = $this->input->post('batas_wilayah_subak_selatan');
		}
		if (!empty($this->input->post('batas_wilayah_subak_barat'))) {
			$update_tb_palemahan['batas_wilayah_subak_barat'] = $this->input->post('batas_wilayah_subak_barat');
		}
		if (!empty($this->input->post('sumber_aliran_air_das'))) {
			$update_tb_palemahan['sumber_aliran_air_das'] = $this->input->post('sumber_aliran_air_das');
		}
		if (!empty($this->input->post('jumlah_dam'))) {
			$update_tb_palemahan['jumlah_dam'] = $this->input->post('jumlah_dam');
		}
		if (!empty($this->input->post('lokasi_dam'))) {
			$update_tb_palemahan['lokasi_dam'] = $this->input->post('lokasi_dam');
		}
		if (!empty($this->input->post('jumlah_temukuaya'))) {
			$update_tb_palemahan['jumlah_temukuaya'] = $this->input->post('jumlah_temukuaya');
		}
		if (!empty($this->input->post('lokasi_temukuaya'))) {
			$update_tb_palemahan['lokasi_temukuaya'] = $this->input->post('lokasi_temukuaya');
		}
		if (!empty($this->input->post('masa_musim_tanam_pertahun'))) {
			$update_tb_palemahan['masa_musim_tanam_pertahun'] = $this->input->post('masa_musim_tanam_pertahun');
		}
		if (!empty($this->input->post('tanaman_penyela'))) {
			$update_tb_palemahan['tanaman_penyela'] = $this->input->post('tanaman_penyela');
		}
		if (!empty($update_tb_palemahan)) {
			$this->SubakModel->update_tb_palemahan($id_subak, $update_tb_palemahan);
		}

		redirect(base_url('DashboardSubakTerdata'));
    }
}