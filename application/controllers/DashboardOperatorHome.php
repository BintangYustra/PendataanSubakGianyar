<?php

class DashboardOperatorHome	 extends CI_Controller {
	public function __construct() {
        parent::__construct();
        $this->load->model('SubakModel');
        $this->load->model('UserModel');
        $this->load->model('FunctionModel');
    }

	public function index()
	{
		$data['judul'] = 'Dashboard Add Update';
		$data['jumlahsubak'] = $this->FunctionModel->get_total_subak();
		$data['jumlah_belum_verifikasi'] = $this->FunctionModel->count_belum_terverifikasi();
		$data['jumlah_verifikasi_ditolak'] = $this->FunctionModel->count_verifikasi_ditolak();
		$data['jumlah_verifikasi_sukses'] = $this->FunctionModel->count_verifikasi_sukses();
		$data['jumlah_data_diperbarui'] = $this->FunctionModel->count_data_diperbarui();
		$data['jumlah__data_tidakvalid'] = $this->FunctionModel->count_data_tidakvalid();
		$data['subak_terbaru'] = $this->FunctionModel->get_latest_subak(5);
		$data['subak_update'] = $this->FunctionModel->get_latest_subak_update(5);
		$data['persen_verifikasi'] = $this->FunctionModel->get_persentase_verifikasi();

		$data['nama_user'] = $this->session->userdata('nama') ? 
                             $this->session->userdata('nama') : 
                             $this->session->userdata('username'); // Fallback ke username
        $data['username'] = $this->session->userdata('username');
        $data['role'] = $this->session->userdata('role');

		if (!empty($foto_profil_db)) {
			$data['foto_profil'] = base_url('images/' . $foto_profil_db);
		} else {
			$data['foto_profil'] = base_url('assets/images/Empty.png');
		}

		$this->load->view('templates/dashboard/headerdashboard', $data);
		$this->load->view('templates/dashboard/sidepaneldashboard');
		$this->load->view('dashboard/dashboardoperatorhome' , $data);
		$this->load->view('templates/dashboard/footerdashboard');
	}


}
