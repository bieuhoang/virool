<?php defined('BASEPATH') or exit('No direct script access allowed.');

class Advertiser extends Public_Controller
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
		$this->assets->add('advertiser.css', 'advertiser');
		$this->assets->add('advertiser.js', 'advertiser');
		$this->build();
	}
	public function musician(){
		if ($this->user) {
			redirect(base_url().'user');
			exit;
		}
		$this->assets->add('advertiser.modal.js', 'advertiser');
		$this->assets->add('musican.css', 'advertiser');
		$this->build();
	}
	public function brands(){
		if ($this->user) {
			redirect(base_url().'user');
			exit;
		}
		$this->assets->add('advertiser.modal.js', 'advertiser');
		// $this->assets->add('brands.js', 'advertiser');
		$this->assets->add('brands.css', 'advertiser');
		$this->build();
	}
	public function movies(){
		if ($this->user) {
			redirect(base_url().'user');
			exit;
		}
		$this->assets->add('advertiser.modal.js', 'advertiser');
		$this->assets->add('movies.css', 'advertiser');
		$this->build();
	}
	public function games(){
		if ($this->user) {
			redirect(base_url().'user');
			exit;
		}
		$this->assets->add('advertiser.modal.js', 'advertiser');
		$this->assets->add('games.css', 'advertiser');
		$this->build();
	}
}