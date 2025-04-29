<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Login extends CI_Controller {
	public function index()
	{
		$data['judul'] = 'Login';
		$this->load->view('landing/login', $data);
	}
}
