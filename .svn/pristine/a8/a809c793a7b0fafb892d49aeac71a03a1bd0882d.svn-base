<?php defined('BASEPATH') or exit('No direct script access allowed.');

class Opencamp extends Public_Controller
{
	public function construct()
	{
		parent::__construct();
	}

	public function video()
	{
		if (!$this->user AND $this->user->group_id!=2 ) {
			redirect(base_url().'user');
			exit;
		}
		$idVideo = $this->uri->segment(3);
		$Googleapi = $this->googleapi->youtube;
		$this->set('Googleapi' ,$Googleapi->videos->listVideos($idVideo, 'id,snippet,statistics,contentDetails, player'));
		$this->assets->add('opencamp.css', 'opencamp');
		$this->assets->add('opencamp.js', 'opencamp');
		$this->build();
	}
	public function document()
	{
		if (!$this->user AND $this->user->group_id!=2 ) {
			redirect(base_url().'user');
			exit;
		}
		$idVideo = $this->uri->segment(3);
		if (!empty($idVideo)) {
			$this->assets->add('swfobject.js', 'promotedocument');
			$this->assets->add('opencamp.document.css', 'opencamp');
			$this->assets->add('module.promotedocument.views.css', 'opencamp');
			$this->assets->add('opencamp.document.js', 'opencamp');
			$this->set('documentId', $idVideo);
			$this->build();
		} else {
			redirect('user');
		}
	}
}