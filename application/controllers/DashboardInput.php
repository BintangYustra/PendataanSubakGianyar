<?php

class DashboardInput extends CI_Controller {
    public function __construct() {
        parent::__construct();
        if ($this->session->userdata('role') !== 'Admin Input') {
            redirect('Auth');
        }
    }

    public function index() {
		$data['judul'] = 'Dashboard';
		$data['jumlahsubak'] = $this->SubakModel->get_total_subak();
		$data['jumlah_belum_verifikasi'] = $this->SubakModel->count_belum_terverifikasi();
		$data['jumlah_verifikasi_ditolak'] = $this->SubakModel->count_verifikasi_ditolak();
		$data['jumlah_verifikasi_sukses'] = $this->SubakModel->count_verifikasi_sukses();

		$this->load->view('templates/dashboard/headerdashboard', $data);
		$this->load->view('templates/dashboard/sidepaneldashboard');
		$this->load->view('dashboard/dashboardhome' , $data);
		$this->load->view('templates/dashboard/footerdashboard');
    }
}
