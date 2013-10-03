<?php defined('BASEPATH') or exit('No direct script access allowed.');

class Home extends Public_Controller
{
	public function construct()
	{
		parent::__construct();
	}

	public function index()
	{
		if ($this->user) {
			redirect('user/index');
		}
		$this->build();
	}

	public function contact()
	{
		$this->build();	
	}

	public function faqs()
	{
		$this->build();	
	}

	public function privacy_policy()
	{
		$this->build();	
	}

	public function about_us()
	{
		$this->build();	
	}
}