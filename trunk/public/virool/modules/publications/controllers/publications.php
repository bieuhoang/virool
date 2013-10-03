<?php defined('BASEPATH') or exit('No direct script access allowed.');

class Publications extends Public_Controller
{
	public function construct()
	{
		parent::__construct();
	}

	public function index()
	{
		/* -- kiem tra xem user login -- */
		$this->assets->add('bootstrap/bootstrap.min.js', '_theme_');
		$this->assets->add('publications.js', 'publications');
		$this->assets->add('publications.css', 'publications');
		$this->build();
	}
}