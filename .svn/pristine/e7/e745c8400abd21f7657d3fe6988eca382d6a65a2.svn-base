<?php defined('BASEPATH') or exit('No direct script access allowed.');

class Admin extends Admin_Controller
{
	public function __construct()
	{
		parent::__construct();
	}

	public function index()
	{
		$option = new Option_Model();
		$option = $option->get_option();

		$this->title('Settings', 'Admin Control Panel')
			->set('option', $option)
			->build();
	}

	public function message()
	{
		$this->title('Message settings', 'Admin Control Panel')
			->build();
	}
}