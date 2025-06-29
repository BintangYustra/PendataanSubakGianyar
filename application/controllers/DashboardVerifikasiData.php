<?php

class DashboardVerifikasiData extends CI_Controller {
    public function __construct() {
        parent::__construct();
        if ($this->session->userdata('role') !== 'Admin Verifikasi') {
            redirect('Auth');
        }
    }

    public function index() {
        $this->load->view('dashboard_verifikasi');
    }
}
