<?php

class DashboardAdminTambahOperator extends CI_Controller {

	public function __construct() {
        parent::__construct();
        $this->load->model('AddModel');
        $this->load->model('UserModel');
        $this->load->model('ViewModel');
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
		$this->load->view('dashboard/dashboardadmintambahoperator' , $data);
		$this->load->view('templates/dashboard/footerdashboard');

	}

	public function TambahOperator() {
		$data_user = [
        'username' => $this->input->post('username'),
        'password' => $this->input->post('password'),
        'role' => $this->input->post('role'),
        'no_telp' => $this->input->post('no_telp'),
        'email' => $this->input->post('email'),
	];
	$id_user = $this->AddModel->insert_tb_user($data_user);




	redirect(base_url('DashboardAdmin'));
	}
		
}	
	
