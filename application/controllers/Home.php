<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Home extends CI_Controller {

	function __construct() {
		parent::__construct();
	}

	public function index()
	{
		$data['title'] = 'Home'; 
		$this->load->view('common/head', $data);
		$this->load->view('common/navBar');
		$this->load->view('home');
		$this->checkUserSession();
	}

	// Logout
	public function logout() {
		$this->session->sess_destroy();
		redirect(base_url());
	}

	// Check user session
	private function checkUserSession() {
		if(!$this->session->userdata('username')) {
			redirect(base_url());
		}
	}
}
