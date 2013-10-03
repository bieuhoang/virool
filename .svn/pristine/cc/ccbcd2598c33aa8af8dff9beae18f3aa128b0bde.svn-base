<?php defined('BASEPATH') or exit('No direct script access allowed.');

class Myfinances extends Public_Controller
{
	public function construct()
	{
		parent::__construct();
	}

	public function index()
	{
		if (!$this->user) {
			redirect(base_url());
			exit;
		}
		$this->assets->add('bootstrap/bootstrap.min.css', '_theme_');
		$this->assets->add('bootstrap/bootstrap.min.js', '_theme_');
		$this->assets->add('makeapayment.css', '_theme_');
		$this->assets->add('makeapayment.js', '_theme_');
		$this->assets->add('myfinances.css', 'myfinances');
		$this->assets->add('myfinances.js', 'myfinances');
		$this->build();
	}
}