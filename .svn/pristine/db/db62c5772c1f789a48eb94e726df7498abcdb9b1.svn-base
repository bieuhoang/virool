<?php defined('BASEPATH') or exit('No direct script access allowed.');

class Activates extends Public_Controller
{
	public function construct()
	{
		parent::__construct();
	}

	public function index()
	{
		$this->assets->add('jsactivates.css', 'activates');
		$this->assets->add('jsactivates.js', 'activates');
		$id = $this->uri->segment(2);
		$this->set('id', $id);
		$this->build();
	}
}