<?php defined('BASEPATH') or exit('No direct script access allowed.');

class Ajax_Controller extends MY_Controller
{
	public function __construct()
	{
		parent::__construct();

		if($this->input->is_ajax_request() == FALSE)
		{
			exit('No direct script access allowed.');
		}

		// language
		$this->lang->load('permission');
		$this->load->spark('phpmail');
		// load helper
		$this->load->helper('admin');
	}

	protected function _check_user_logged_out()
	{
		// check if user logged out
		if($this->user == false)
		{
			exit(json(array('status' => false, 'msg' => 'You are logged out. Please login before do this action', 'is_logged_out' => true)));
		}
	}

	protected function _check_user_can($action)
	{
		// check if user logged out
		$this->_check_user_logged_out();

		// check user can edit?
		if(! $this->user->can($action))
		{
			exit(json(array('status' => false, 'msg' => $this->lang->line('permission_can_not_'.$action))));
		}
	}
}