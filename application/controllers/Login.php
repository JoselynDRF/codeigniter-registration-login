<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Login extends CI_Controller {

	function __construct() {
		parent::__construct();
		$this->load->model('user_model');
		$this->load->library('form_validation');
	}

	public function index() {
		$data['title'] = 'Login Example'; 
		$this->load->view('common/head', $data);
		$this->load->view('login', $data);
		$this->checkUserSession();
	}

	// Get current user
	public function getUser() {
		$this->form_validation->set_rules('username', 'Username', 'trim|required');
		$this->form_validation->set_rules('password', 'Password', 'trim|required');

		if ($this->form_validation->run() == FALSE) {
			$this->session->set_flashdata('errorLogin', 'Incorrect username or password.');
			redirect(base_url());
		} else {
			$dataUser = [
				'username' => $this->input->post('username'),
				'password' => $this->input->post('password')	
			];
			
			$user = $this->user_model->getUser($dataUser);

			if($user) {
				var_dump($user);
				$dataUserSession = [
					'id' => $user->id,
					'username' => $user->username,
					'email' => $user->email,
					'password' => $user->password
				];

				$this->session->set_userdata($dataUserSession);
				redirect(base_url('home'));
			} else {
				$this->session->set_flashdata('errorLogin', 'Incorrect username or password.');
				redirect(base_url());
			}
		}
	}

	// Check user session
	private function checkUserSession() {
		if($this->session->userdata('username')) {
			redirect(base_url('home'));
		}
	}
}