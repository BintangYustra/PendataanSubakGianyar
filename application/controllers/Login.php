<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Login extends CI_Controller {

    public function index() {
        $this->load->view('landing/login');
    }

	public function login_action()
	{
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
			redirect('DashboardHome');
		} else {
			$this->session->set_flashdata('error', 'Username atau password salah');
			redirect('login');
		}
	}
}