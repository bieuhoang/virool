<?php defined('BASEPATH') or exit('No direct script access allowed.');

class Admin extends Admin_Controller
{
	public function __construct()
	{
		parent::__construct();
	}

	public function index()
	{
		redirect('admin/login');
	}

	public function dashboard()
	{
		/*if (!$this->user->is_admin()) {
			redirect('admin/login');
		}*/
		$this->build();
	}

	public function login()
	{
		// if submited
		if($this->input->is_ajax_request() or $this->input->post())
		{
			$username = $this->input->post('username', TRUE);
			$password = $this->input->post('password', TRUE);
			$remember = $this->input->post('remember')?TRUE:FALSE;

			$output = json(array('status' => FALSE, 'msg' => 'Username or password is not correct.'));

			$user = new User_Model();
			if($user->adminLogin($username, $password, $remember))
			{
				if($this->input->is_ajax_request())
				{
					$output = json(array('status' => TRUE, 'msg' => 'Login successfully. Redirecting to dashboard panel.'));
				}
				else
				{
					redirect('dashboard');
				}
			}

			exit($output);
		}

		// add assets
		$this->assets->add('login.css', '_theme_');
		$this->assets->add('admin.login.js', '_theme_');

		// template parse
		$this->layout('login')->build('admin/login');
	}

	public function logout()
	{
		$this->session->sess_destroy();
		redirect('admin/login', 'refresh');
	}
}