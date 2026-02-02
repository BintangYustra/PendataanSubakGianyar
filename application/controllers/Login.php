<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Login extends CI_Controller {
    
    public function __construct() {
        parent::__construct();
        $this->load->database();
        $this->load->library('session');
        $this->load->helper('url');
    }
    
    public function index() {
        if ($this->session->userdata('id_user')) {
            $this->redirect_by_role();
        }
        $this->load->view('landing/login');
    }
    
    public function login_action() {
        $username = $this->input->post('username');
        $password = $this->input->post('password');
        
        if (empty($username) || empty($password)) {
            $this->session->set_flashdata('error', 'Username dan password harus diisi!');
            redirect('login');
        }
        
        $user = $this->db->get_where('user', [
            'username' => $username,
            'password' => $password
        ])->row();
        
        if ($user) {
              $this->session->set_userdata([
                'id_user' => $user->id_user,
                'username' => $user->username,
                'nama_lengkap' => $user->$nama_lengkap, 
                'role' => $user->role,
                'logged_in' => TRUE
            ]);
            
            $this->redirect_by_role();
            
        } else {
            $this->session->set_flashdata('error', 'Username atau password salah!');
            redirect('login');
        }
    }
    
    private function redirect_by_role() {
        $role = $this->session->userdata('role');
        
        switch ($role) {
            case 'Operator Input Update':
                redirect('DashboardOperatorHome');
                break;
            case 'Operator Verifikasi':
                redirect('DashboardVerifikasiHome');
                break;
            case 'Admin Super':
                redirect('DashboardAdmin');
                break;
            case 'Special Surprise':
                redirect('Welcome');
                break;
            default:
                redirect('login');
                break;
        }
    }
    
    public function logout() {
        $this->session->sess_destroy();
        redirect('login');
    }
}