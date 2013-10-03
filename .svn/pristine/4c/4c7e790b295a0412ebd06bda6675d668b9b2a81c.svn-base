<?php defined('BASEPATH') or exit('No direct script allow access allowed.');

class Admin extends Admin_Controller
{
	public function __construct()
	{
		parent::__construct();
	}

	public function index()
	{

		$this->assets->add('admin.promotedocument.index.css');
		$this->assets->add('admin.promotedocument.index.js');
		$this->title('Promote Documents', 'Admin Control Panel')
			->build();
	}

	public function edit() {
		// get id edit
		$id = $this->uri->segment(4);

		// get class
		$Countries = new Country_Model();
		$Categorys = new Categorys_Model();
		$Video = new Videos_Model();
		
		if (!empty($id) AND $Video->where('id', $id)->get()->result_count()) {
			$this->set('Videotpl', $Video);
		}
		// set data
		$this->set('Countrietpl', $Countries->get());
		$this->set('Categorystpl', $Categorys->get());

		// set assets
		$this->assets->add('plugins.css', '_theme_');
		$this->assets->add('forms/jquery.chosen.min.js', '_theme_');
		$this->assets->add('swfobject.js', 'promotedocument');
		$this->assets->add('admin.promotedocument.edit.css', 'promotedocument');
		$this->assets->add('admin.promotedocument.edit.js', 'promotedocument');
		$this->build();
	}
}