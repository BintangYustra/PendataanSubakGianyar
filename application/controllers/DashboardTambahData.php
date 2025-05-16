<?php

class DashboardTambahData extends CI_Controller {

	public function __construct()
	{
        parent::__construct();
        $this->load->model('SubakModel');
        $this->load->model('PrajuruModel');
        $this->load->model('PerahyanganModel');
        $this->load->model('PawonganModel');
    }
	
	public function index()
	{
		$data['judul'] = 'Dashboard';

		$this->load->view('templates/dashboard/headerdashboard', $data);
		$this->load->view('templates/dashboard/sidepaneldashboard');
		$this->load->view('dashboard/dashboardtambahdata');
		$this->load->view('templates/dashboard/footerdashboard');
	}
}
