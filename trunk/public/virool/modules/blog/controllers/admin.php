<?php defined('BASEPATH') or exit('No direct script access allowed.');

class Admin extends Admin_Controller
{
	public function __construct()
	{
		parent::__construct();

		// check permission
		if(! $this->user)
		{
			$this->redirect('permission/can_not_access');
		}
	}

	public function index()
	{
		$this->build();
	}

	public function franchise()
	{
		$this->build();
	}
}