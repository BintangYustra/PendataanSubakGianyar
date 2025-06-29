<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Login extends CI_Controller {

    public function index() {
        $this->load->view('landing/login'); // Form login
    }

    public function login_action() {
        $username = $this->input->post('username');
        $password = $this->input->post('password');

        $user = $this->db->get_where('user', [
            'username' => $username,
            'password' => $password
        ])->row();

        if ($user) {
            $this->session->set_userdata([
                'id_user' => $user->id_user,
                'username' => $user->username,
                'role' => $user->role
            ]);

            // Arahkan berdasarkan role
            if ($user->role == 'Admin Input') {
                redirect('DashboardHome');
            } elseif ($user->role == 'Admin Verifikasi') {
                redirect('DashboardVerifikasiHome');
            } else {
                redirect('login');
            }
        } else {
            $this->session->set_flashdata('error', 'Username atau password salah!');
            redirect('login');
        }
    }

    public function logout() {
        $this->session->sess_destroy();
        redirect('login');
    }
}
