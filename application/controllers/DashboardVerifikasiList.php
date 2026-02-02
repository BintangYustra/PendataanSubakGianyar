<?php

class DashboardVerifikasiList extends CI_Controller {
	public function __construct() {
        parent::__construct();
        $this->load->model('ViewModel');
        $this->load->model('FunctionModel');
        $this->load->model('UpdateModel');
    }

	public function index()
	{
		$data['judul'] = 'Verifikasi List';
		$data['totalsubak'] = $this->FunctionModel-> get_all_subak();
	
		$this->load->view('templates/dashboard/headerdashboard', $data);
		$this->load->view('templates/dashboard/sidepaneldashboardve');
		$this->load->view('dashboard/dashboardverifikasilist');
		$this->load->view('templates/dashboard/footerdashboard');
	}

		
    public function DashboardViewData($id_subak) {
        $data['subak'] = $this->ViewModel->get_subak_by_id($id_subak);
		$data['alamat'] = $this->ViewModel->get_alamat_by_id($id_subak);
		$data['prajuru'] = $this->ViewModel->get_prajuru_by_id($id_subak);
		$data['perahyangan'] = $this->ViewModel->get_perahyangan_by_id($id_subak);
		// $data['perahyanganpurabedugulada'] = $this->ViewModel->get_perahyanganpurabedugulada_by_id($id_subak);
		// $data['perahyanganpurabeduguladaaciaci'] = $this->ViewModel->get_perahyangan_aci_aci_by_id($id_subak);
		// $data['perahyanganpurabeduguladainventaris'] = $this->ViewModel->get_perahyangan_inventaris_by_id($id_subak);
		// $data['perahyanganpurabeduguladafotopura'] = $this->ViewModel->get_perahyangan_foto_pura_by_id($id_subak);
		// $data['perahyanganpurabedugultidakada'] = $this->ViewModel->get_perahyanganpurabedugultidakada_by_id($id_subak);
		// $data['perahyanganpurabedugultidakada2'] = $this->ViewModel->get_perahyanganpurabedugultidakada2_by_id($id_subak);
		// $data['perahyanganpurabedugultidakada3'] = $this->ViewModel->get_perahyanganpurabedugultidakada3_by_id($id_subak);
		// $data['perahyanganpurabedugultidakadafotopura2'] = $this->ViewModel->get_perahyangan_foto_pura_by_id2($id_subak);
		$data['pawongan'] = $this->ViewModel->get_pawongan_by_id($id_subak);
		$data['pawongannamapenyakap'] = $this->ViewModel->get_pawongan_nama_penyakap_by_id($id_subak);
		$data['pawongannamaperarem'] = $this->ViewModel->get_pawongan_nama_perarem_by_id($id_subak);
		$data['palemahan'] = $this->ViewModel->get_palemahan_by_id($id_subak);
		$data['palemahantanamanpokok'] = $this->ViewModel->get_palemahan_tanaman_pokok_by_id($id_subak);
		$data['palemahanjenistanamanpokok'] = $this->ViewModel->get_palemahan_jenis_tanaman_pokok_by_id($id_subak);
		$data['palemahanhama'] = $this->ViewModel->get_palemahan_hama_by_id($id_subak);
		$data['palemahanbantaunpemerintah'] = $this->ViewModel->get_palemahan_bantuan_pemerintah_by_id($id_subak);
		
        if (empty($data['subak'])) {
            show_404();
        }

        $this->load->view('/dashboard/dashboardviewdata', $data);
    }
	
    public function VerifikasiDataSubak($id_subak) {
        $data['subak'] = $this->ViewModel->get_subak_by_id($id_subak);
		$data['alamat'] = $this->ViewModel->get_alamat_by_id($id_subak);
		$data['prajuru'] = $this->ViewModel->get_prajuru_by_id($id_subak);
		$data['perahyangan'] = $this->ViewModel->get_perahyangan_by_id($id_subak);
		// $data['perahyanganpurabedugulada'] = $this->ViewModel->get_perahyanganpurabedugulada_by_id($id_subak);
		// $data['perahyanganpurabeduguladaaciaci'] = $this->ViewModel->get_perahyangan_aci_aci_by_id($id_subak);
		// $data['perahyanganpurabeduguladainventaris'] = $this->ViewModel->get_perahyangan_inventaris_by_id($id_subak);
		// $data['perahyanganpurabeduguladafotopura'] = $this->ViewModel->get_perahyangan_foto_pura_by_id($id_subak);
		// $data['perahyanganpurabedugultidakada'] = $this->ViewModel->get_perahyanganpurabedugultidakada_by_id($id_subak);
		// $data['perahyanganpurabedugultidakada2'] = $this->ViewModel->get_perahyanganpurabedugultidakada2_by_id($id_subak);
		// $data['perahyanganpurabedugultidakada3'] = $this->ViewModel->get_perahyanganpurabedugultidakada3_by_id($id_subak);
		// $data['perahyanganpurabedugultidakadafotopura2'] = $this->ViewModel->get_perahyangan_foto_pura_by_id2($id_subak);
		$data['pawongan'] = $this->ViewModel->get_pawongan_by_id($id_subak);
		$data['pawongannamapenyakap'] = $this->ViewModel->get_pawongan_nama_penyakap_by_id($id_subak);
		$data['pawongannamaperarem'] = $this->ViewModel->get_pawongan_nama_perarem_by_id($id_subak);
		$data['palemahan'] = $this->ViewModel->get_palemahan_by_id($id_subak);
		$data['palemahantanamanpokok'] = $this->ViewModel->get_palemahan_tanaman_pokok_by_id($id_subak);
		$data['palemahanjenistanamanpokok'] = $this->ViewModel->get_palemahan_jenis_tanaman_pokok_by_id($id_subak);
		$data['palemahanhama'] = $this->ViewModel->get_palemahan_hama_by_id($id_subak);
		$data['palemahanbantaunpemerintah'] = $this->ViewModel->get_palemahan_bantuan_pemerintah_by_id($id_subak);
		
        if (empty($data['subak'])) {
            show_404();
        }

        $this->load->view('/dashboard/dashboardverifikasi', $data);
    }

	public function VerifikasiListAccept()
	{
		$id_subak = $this->input->post('id_subak');
		$status = $this->input->post('verifikasi');
		if (!empty($id_subak) && !empty($status)) {
			$data = ['verifikasi' => $status];
			$this->UpdateModel->update_tb_subak($id_subak, $data);
		}
		redirect(base_url('DashboardVerifikasiList'));
	}


}

