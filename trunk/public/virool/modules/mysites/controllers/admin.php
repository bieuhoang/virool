<?php defined('BASEPATH') or exit('No direct script allow access allowed.');

class Admin extends Admin_Controller
{
	public function __construct()
	{
		parent::__construct();
	}

	public function index()
	{
		$this->assets->add('admin.mysites.js', 'mysites');
		$this->assets->add('admin.mysites.css', 'mysites');
		$this->title('My sites', 'Admin Control Panel')
			->build();
	}

	public function edit(){

		$id = $this->uri->segment(4);
		$Sites = new Mysite_Model();
		$Platforms = new Platforms_Model();
		$Country = new Country_Model();
		$Categorys = new Categorys_Model();
		// check if not exists
		if(!$this->user OR $this->user->group_id!=1)
		{
			$this->with('message_error', 'User is not exists')->redirect('admin/mysites');
		}
		if (!empty($id)) {
			$Sites->where('id', $id)->get();
			$this->set('Mysitestpl', $Sites);
		} else {
			$User = new User_Model();
			$User->where('group_id', 2)->get();
			$this->set('userPulicsher', $User);
		}
		$this->assets->add('forms/jquery.chosen.min.js', '_theme_');
		$this->assets->add('plugins.css', '_theme_');
		$this->assets->add('admin.mysites.edit.js', 'mysites');
		$this->assets->add('admin.mysites.edit.css', 'mysites');
		$this->set('Platformstpl', $Platforms->get());
		$this->set('Countrytpl', $Country->get());
		$this->set('Categorytpl', $Categorys->get());
		$this->build();
	}	
}