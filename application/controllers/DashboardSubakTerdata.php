<?php
class DashboardSubakTerdata	 extends CI_Controller {

	public function __construct() {
        parent::__construct();
        $this->load->model('SubakModel');
    }
	
	public function index()
	{
		$data['judul'] = 'Dashboard';
		$this -> load -> model('SubakModel');
		$data['totalsubak'] = $this->SubakModel-> get_all_subak();
	
		$this -> load -> library('pagination');
		$config['base_url'] = 'http://localhost/PendataanSubakGianyar/DashboardSubakTerdata/index';
		$config['per_page'] = 10;
		$data['start'] = $this -> uri -> segment(3);
        $this->pagination->initialize($config);
        $data['totalsubak'] = $this-> SubakModel -> pagination($config['per_page'] ,$data['start']);
		$data['link'] =  $this->pagination->create_links();
		echo $this->pagination->create_links();

		$this->load->view('templates/dashboard/headerdashboard', $data);
		$this->load->view('templates/dashboard/sidepaneldashboard');
		$this->load->view('dashboard/dashboardsubakterdata',$data);
		$this->load->view('templates/dashboard/footerdashboard');
	}

	public function updateData() {
		$id_subak = $this->input->post('id_subak');
		$data = [
			'nama_subak' => $this->input->post('nama_subak'),
			'kriteria_subak' => $this->input->post('kriteria_subak'),
			'verifikasi' => $this->input->post('verifikasi'),
		];
		$this->SubakModel->update($id_subak, $data);
	}
}

