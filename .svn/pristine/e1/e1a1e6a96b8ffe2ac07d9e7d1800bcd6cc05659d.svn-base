<?php

class Public_Controller extends MY_Controller
{
	function __construct()
	{
		parent::__construct();
		$this->load->helper('admin', 'text');

		// thiết lập theme cho template
		$this->theme('public');
		$this->load->spark('phpmail');
		$this->load->spark('googleapi');
		$this->partial('header', 'blocks/header')->partial('footer', 'blocks/footer');

		// thiết lập và thêm asset cho template
		$this->assets->initialize(array('theme' => $this->template->theme()));
		$this->assets->add('bootstrap/bootstrap.css', '_theme_');
		$this->assets->add('bootstrap/bootstrap.min.js', '_theme_');
		$this->assets->add('twitter-bootstrap-hover-dropdown.min.js', '_theme_');
		$this->assets->add('static.css', '_theme_');
	}
}