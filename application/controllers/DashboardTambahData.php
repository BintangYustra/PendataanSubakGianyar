<?php

class DashboardTambahData extends CI_Controller {
	public function index()
	{
		$data['judul'] = 'Dashboard';
		$this -> load -> model('SubakModel');

		$this->load->view('templates/dashboard/headerdashboard', $data);
		$this->load->view('templates/dashboard/sidepaneldashboard');
		$this->load->view('dashboard/dashboardtambahdata');
		$this->load->view('templates/dashboard/footerdashboard');
	}
}
