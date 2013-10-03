<?php defined('BASEPATH') or exit('No direct script access allowed.');

class Admin extends Admin_Controller
{
	public function __construct()
	{
		parent::__construct();
	}

	public function index()
	{
		$this->build();
	}

	public function problem()
	{
		$this->build();
	}

	public function width()
	{
		$this->build();
	}

	public function length()
	{
		$this->build();
	}

	public function location()
	{
		$this->build();
	}

	public function country()
	{
		$this->build();
	}

	public function status()
	{
		$this->title('Status management', 'Admin Control Panel')->build();
	}

	public function edit_status($id = 0)
	{
		$this->title('Add new status', 'Admin Control Panel');
		if($id)
		{
			$status = new Item_Status_Model();
			$status->find($id);

			// check if exists?
			if($status->result_count() == 0)
			{
				show_error('Item is not exists');
			}

			$this->title('Edit status: #'.$id, 'Admin Control Panel')->set('status', $status);
		}

		$this->build();
	}

	public function checklist()
	{
		$this->build();
	}
}