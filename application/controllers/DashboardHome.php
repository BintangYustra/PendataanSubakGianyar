<?php

class DashboardHome	 extends CI_Controller {
	public function index()
	{
		$data['judul'] = 'Dashboard Add Update';
		$data['jumlahsubak'] = $this->SubakModel->get_total_subak();
		$data['jumlah_belum_verifikasi'] = $this->SubakModel->count_belum_terverifikasi();
		$data['jumlah_verifikasi_ditolak'] = $this->SubakModel->count_verifikasi_ditolak();
		$data['jumlah_verifikasi_sukses'] = $this->SubakModel->count_verifikasi_sukses();

		$data['nama_user'] = $this->session->userdata('nama') ? 
                             $this->session->userdata('nama') : 
                             $this->session->userdata('username'); // Fallback ke username
        $data['username'] = $this->session->userdata('username');
        $data['role'] = $this->session->userdata('role');

		$this->load->view('templates/dashboard/headerdashboard', $data);
		$this->load->view('templates/dashboard/sidepaneldashboard');
		$this->load->view('dashboard/dashboardhome' , $data);
		$this->load->view('templates/dashboard/footerdashboard');
	}
}
