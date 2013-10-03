<?php defined('BASEPATH') or exit('No direct script access allowed.');

class Promotevideo extends Public_Controller
{
	public function construct()
	{
		parent::__construct();
	}

	public function index()
	{
		/* -- kiem tra xem user login -- */
		$this->assets->add('promotevideo.css', 'promotevideo');
		$this->assets->add('promotevideo.js', 'promotevideo');
		$this->assets->add('https://apis.google.com/js/client.js?onload=jsLoad');
		$this->build();
	}
}