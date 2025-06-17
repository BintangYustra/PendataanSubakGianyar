<?php
class DashboardViewData extends CI_Controller {

	public function __construct() {
        parent::__construct();
        $this->load->model('SubakModel');
    }
	
	public function index()
	{
		$data['judul'] = 'Dashboard';
		$this->load->view('templates/dashboard/headerdashboard', $data);
		$this->load->view('templates/dashboard/sidepaneldashboard');
		$this->load->view('dashboard/dashboardviewdata');
		$this->load->view('templates/dashboard/footerdashboard');


	}
}