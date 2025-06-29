<?php

class DashboardVerifikasiUpdate extends CI_Controller {
	public function index()
	{
		$this->load->view('templates/dashboard/headerdashboard');
		$this->load->view('templates/dashboard/sidepaneldashboardve');
		$this->load->view('dashboard/dashboardverifikasi');
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

	public function VerifikasiDataSubak($id_subak) 
	{
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

}
