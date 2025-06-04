<?php

class DashboardHome	 extends CI_Controller {
	public function index()
	{
		$data['judul'] = 'Dashboard';
		$data['jumlahsubak'] = $this->SubakModel->get_total_subak();

		$this->load->view('templates/dashboard/headerdashboard', $data);
		$this->load->view('templates/dashboard/sidepaneldashboard');
		$this->load->view('dashboard/dashboardhome');
		$this->load->view('templates/dashboard/footerdashboard');
	}
}
