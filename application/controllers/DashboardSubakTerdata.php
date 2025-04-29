<?php

class DashboardSubakTerdata	 extends CI_Controller {
	public function index()
	{
		$data['judul'] = 'Dashboard';
		$this->load->view('templates/dashboard/headerdashboard', $data);
		$this->load->view('templates/dashboard/sidepaneldashboard');
		$this->load->view('dashboard/dashboardsubakterdata');
		$this->load->view('templates/dashboard/footerdashboard');
	}
}
