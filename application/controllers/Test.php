<?php

class Test extends CI_Controller {
	public function __construct() {
        parent::__construct();
        $this->load->model('ViewModel');
        $this->load->model('UserModel');
    }
	
	public function index()
	{
		$data['judul'] = 'Dashboard Admin';
		$data['nama_user'] = $this->session->userdata('nama') ? 
                             $this->session->userdata('nama') : 
                             $this->session->userdata('username'); // Fallback ke username
        $data['username'] = $this->session->userdata('username');
        $data['role'] = $this->session->userdata('role');
		
		$this->load->view('templates/dashboard/headerdashboard', $data);
		$this->load->view('templates/dashboard/sidepaneldashboardadmin');
		$this->load->view('templates/dashboard/test' , $data);
		$this->load->view('templates/dashboard/footerdashboard');

	}
}
