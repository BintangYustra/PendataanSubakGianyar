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

	public function MasukHalaman($id_subak){
		$data['subak'] = $this->SubakModel->get_subak_by_id($id_subak);
		$data['alamat_subak'] = $this->SubakModel->get_alamat_by_id($id_subak);
		$this->load->view('/dashboard/dashboardupdatedata', $data);	
	}
	
    public function DashboardUpdateDataSubak($id_subak)
    {		
		// SUBAK UPDATE
		$id_subak = $this->input->post('id_subak');
		$update_data_subak = [
			'id_subak' => $id_subak,
			'nama_subak' => $this->input->post('nama_subak'),
			'kriteria_subak' => $this->input->post('kriteria_subak'),
			'nomor_akte_notaris' => $this->input->post('nomor_akte_notaris'),
			'npwp' => $this->input->post('npwp'),
			'verifikasi' => $this->input->post('verifikasi'),
		];
		$this->SubakModel->update_tb_subak($id_subak, $update_data_subak);
		// JIKA FIELD SUBAK KOSONG, PAKAI INI UNTUK ADD DATA LANGSUNG KE DATABASE
		$data = [];
		if (!empty($this->input->post('nama_subak'))) {
			$data['nama_subak'] = $this->input->post('nama_subak');
		}
		$data = [];
		if (!empty($this->input->post('kriteria_subak'))) {
			$data['kriteria_subak'] = $this->input->post('kriteria_subak');
		}
		$data = [];
		if (!empty($this->input->post('nomor_akte_notaris'))) {
			$data['nomor_akte_notaris'] = $this->input->post('nomor_akte_notaris');
		}
		$data = [];
		if (!empty($this->input->post('npwp'))) {
			$data['npwp'] = $this->input->post('npwp');
		}

		$update_tb_alamat_subak = [
			'br_lingkungan_subak' => $this->input->post('br_lingkungan_subak'),
			'desa_subak' => $this->input->post('desa_subak'),
			'kecamatan_subak' => $this->input->post('kecamatan_subak'),
			'kabupaten_subak' => $this->input->post('kabupaten_subak'),
			'kode_pos' => $this->input->post('kode_pos'),
		];
		$this->SubakModel->update_tb_alamat_subak($id_subak, $update_tb_alamat_subak);

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
        


		redirect(base_url('DashboardSubakTerdata'));
    }
}