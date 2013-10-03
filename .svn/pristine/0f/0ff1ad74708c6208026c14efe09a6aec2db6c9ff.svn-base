<?php defined('BASEPATH') or exit('No direct script access allowed.');

class Admin extends Admin_Controller
{
	public function __construct()
	{
		parent::__construct();

		// check permission
		if(! $this->user->is_admin())
		{
			$this->redirect('permission/can_not_access');
		}
	}

	public function index()
	{
		$this->build();
	}

	public function edit($id = 0)
	{
		if(! $this->user->can('edit'))
		{
			$this->with('message_error', $this->lang->line('permission_can_not_edit'))
				->redirect('admin/page');
		}

		if($id)
		{
			$page = new Page_Model();
			$page->find($id);
			if($page->result_count() == 0)
			{
				$this->with('message_error', 'Page is not exists')
					->redirect('admin/page');
			}
			// set template
			$this->set('page', $page);
		}

		// render
		$this->build();
	}
}