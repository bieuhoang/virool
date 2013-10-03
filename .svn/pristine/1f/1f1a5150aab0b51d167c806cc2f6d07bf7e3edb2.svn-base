<?php defined('BASEPATH') or exit('No direct script allow access allowed.');

class Admin extends Admin_Controller
{
	public function __construct()
	{
		parent::__construct();
	}

	public function index()
	{
		$this->assets->add('admin.manage.js', 'mysites');
		$this->assets->add('admin.manage.css', 'mysites');
		$this->title('Manage Document', 'Admin Control Panel')
			->build();
	}
}