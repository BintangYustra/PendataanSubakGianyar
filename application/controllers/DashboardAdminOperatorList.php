<?php

class DashboardAdminOperatorList extends CI_Controller {
    public function __construct() {
        parent::__construct();
        $this->load->model('ViewModel');
        $this->load->model('UserModel');
    }

    public function index()
    {
		$data['judul'] = 'Dashboard Admin List Operator';
		$data['nama_user'] = $this->session->userdata('nama') ? 
                             $this->session->userdata('nama') : 
                             $this->session->userdata('username'); // Fallback ke username
        $data['username'] = $this->session->userdata('username');
        $data['role'] = $this->session->userdata('role');

        $data['totaloperator'] = $this->UserModel->get_all_user();
	
		$this -> load -> library('pagination');
		$config['base_url'] = 'http://localhost/PendataanSubakGianyar/DashboardSubakTerdata/index';
		$config['per_page'] = 50;
		$data['start'] = $this -> uri -> segment(3);
        $this->pagination->initialize($config);
        $data['totaloperator'] = $this-> UserModel -> pagination($config['per_page'] ,$data['start']);
		$data['link'] =  $this->pagination->create_links();
		echo $this->pagination->create_links();
		
		$this->load->view('templates/dashboard/headerdashboard', $data);
		$this->load->view('templates/dashboard/sidepaneldashboardadmin');
		$this->load->view('dashboard/dashboardadminlistoperator' , $data);
		$this->load->view('templates/dashboard/footerdashboard');
    }
    
    public function DashboardViewData($id_subak) {
        $data['user'] = $this->UserModel->get_user_by_username($id_user);
		
        if (empty($data['user'])) {
            show_404();
        }

        $this->load->view('/dashboard/dashboardadminlistoperator', $data);
    }
	
}
