<?php

class DashboardVerifikasi extends CI_Controller {
	public function index()
	{
		$data['judul'] = 'Dashboard';
		$this -> load -> model('SubakModel');
		// $this -> load -> library('pagination');
		$data['totalsubak'] = $this->SubakModel-> get_all_subak();
		
		$this->load->view('templates/dashboard/headerdashboard', $data);
		$this->load->view('templates/dashboard/sidepaneldashboard');
		$this->load->view('dashboard/dashboardverifikasi');
		$this->load->view('templates/dashboard/footerdashboard');
	}
}
