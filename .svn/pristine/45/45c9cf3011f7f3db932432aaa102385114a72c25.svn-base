<?php defined('BASEPATH') or exit('No direct script allow access allowed.');

class Admin extends Admin_Controller
{
	public function __construct()
	{
		parent::__construct();
	}

	public function index()
	{
		$Group = new Group_Model();
		
		$this->title('Users Management', 'Admin Control Panel')->set('Group', $Group->get())
			->build();
	}

	public function profile($id = 0)
	{
		$user = new User_Model();
		$id = $id ? $id : $this->user->id;
		$user->find($id);

		// check if not exists
		if($user->result_count() == 0)
		{
			$this->with('message_error', 'User is not exists')->redirect('admin/user');
		}

		$this->title('Viewing profile: #'.$id, 'Admin Control Panel')
			->set('user', $user)
			->build();
	}

	public function edit($id = 0)
	{
		$User = new User_Model();
		$id = $this->uri->segment(4);
		$Group = new Group_Model();
		// check if not exists
		if(!$this->user OR $this->user->group_id!=1)
		{
			$this->with('message_error', 'User is not exists')->redirect('admin/user');
		}
		$this->set('GroupTpl', $Group->get());
		$this->title('Editing user: #'.$User->id, 'Admin Control Panel');
		if (!empty($id)) {
			$this->assets->add('admin.user.edit.css', 'user');
			$this->assets->add('admin.edit.js', 'user');
			$this->set('UserTpl', $User->where('id', $id)->get())->build();
		} else {
			$this->assets->add('admin.add.js', 'user');
			$this->assets->add('admin.user.add.css', 'user');
			$this->template->build('admin/add');
		}
		
	}

	public function login_history()
	{
		$users = new User_Model();

		// render
		$this->title('Login histories', 'Admin Control Panel')
			->set('users', $users->order_by('first_name', 'asc')->get())
			->build();
	}
}