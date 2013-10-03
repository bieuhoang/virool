<?php defined('BASEPATH') or exit('No direct script access allowed.');

class Publisher extends Public_Controller
{
	public function construct()
	{
		parent::__construct();
	}

	public function index()
	{
		if ($this->user) {
			redirect(base_url().'user');
			exit;
		}
		$this->assets->add('jquery.bxslider.css', '_theme_');
		$this->assets->add('jquery.bxslider.min.js', '_theme_');
		$this->assets->add('csPublisher.css', 'publisher');
		$this->assets->add('jsPublisher.js', 'publisher');
		$capcha = substr(md5(rand(0,9)), 0,6);
		$this->set('capcha', $capcha);
		$this->build();
	}
}