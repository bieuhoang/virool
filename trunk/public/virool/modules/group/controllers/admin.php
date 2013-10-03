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
				->redirect('admin/group');
		}

		if($id == 1)
		{
			$this->with('message_warning', 'You can not edit this group')->redirect('admin/group');
		}

		if($id)
		{
			$group = new Group_Model();
			$group->find($id);
			if($group->result_count() == 0)
			{
				$this->with('message_error', 'Group is not exists')
					->redirect('admin/group');
			}
			// set template
			$this->set('group', $group);
		}

		// render
		$this->title('User Groups', 'Admin Control Panel')
			->build();
	}
}