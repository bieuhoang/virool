<?php defined('BASEPATH') or exit('No direct script access allowed.');

class Youtubevideo extends Public_Controller
{
	public function construct()
	{
		parent::__construct();
	}

	public function index()
	{
		if (!$this->session->userdata('user_id')) {
			redirect(base_url());
		}
		$Countries = new Country_Model();
		$Categorys = new Categorys_Model();
		$Countriestpl = array();	$Categorystpl = array();

		foreach ($Countries->get() as $key => $value) {
			$Countriestpl[] = array('id'=>$value->id, 'title'=>$value->name);
		}

		foreach ($Categorys->get() as $kcate => $valcate) {
			$Categorystpl[] = array('id'=>$valcate->id, 'name'=>$valcate->name);
		}
		$this->set('Categorystpl', json_encode($Categorystpl));
		$this->set('Countrietpl', json_encode($Countriestpl));
		$this->assets->add('bootstrap/bootstrap.css', '_theme_');
		$this->assets->add('bootstrap/bootstrap.js', '_theme_');
		$this->assets->add('youtubevideo.css', 'youtubevideo');
		$this->assets->add('youtubevideo.js', 'youtubevideo');
		$this->assets->add('https://apis.google.com/js/client.js?onload=jsLoad');
		$this->build();
	}
}