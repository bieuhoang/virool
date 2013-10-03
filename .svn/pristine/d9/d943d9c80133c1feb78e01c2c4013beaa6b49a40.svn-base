<?php defined('BASEPATH') or exit('No direct script access allowed.');

class Api extends Api_Controller
{
	public function construct()
	{
		parent::__construct();
	}

	public function index()
	{
		$param = $this->uri->segment_array();
		if (count($param) AND count($param) >= 2 AND $session = $this->getInfomation($param[2]))
		{
			$width = 400; $height = 300;
			if ( !empty($param[3]) AND strpos($param[3], 'x') )
			{
				$dataWidth = explode('x', $param[3]);
				$width = intval($dataWidth[0])-20;
				$height = intval($dataWidth[1])-10;
			}
			$this->session->set_userdata('key', $session);
			$session['width'] = $width;
			$session['height'] = $height;
			$this->set('Param', $session)
				->set('width', $width)
				->set('height', $height)
				->build();
		}
		else
		{
			$this->set('Param', '')->build();
		}
	}

	// set key
	public function getInfomation($token)
	{
		$this->session->unset_userdata('key');
		$Uservideo = new Uservideo_Model();
		$Uservideo->where('tokenapi', $token)
			->where('type', 'Publisher')
			->where('action', 'Action')
			->where('sate', 'Run')
			->include_related('video', array('title', 'images', 'type', 'videoid'))
			->get();
		$data = false;
		if ( $Uservideo->result_count() )
		{
			foreach ($Uservideo as $key => $value) {
				if ($value->video_type === 'Video' )
				{
					$this->assets->add('jwplayer/jwplayer.js', 'api');
					$this->assets->add('api.video.virool.js', 'api');
					$data = array(
							'token' => $token, // token user
							'key' =>md5(rand(0,9)), // xac dinh key cua fien lam viec
							'time'=>0, // xac dinh khi nguoi dung post token yeu cau key
							'timelimit' => 60, // xac dinh thoi gian click lan thu 2 ( time (video|publicsher) / 2 )
							'url' => 'http://www.youtube.com/watch?v='.$value->video_videoid, // xac dinh link cua video/publicsher can quang cao
							'type' => '86ed8be3c3ebea12a82c67c15de4e7b6' // kieu du document duoc quang cao;
							);
				}
				else
				{
					$this->assets->add('swfobject/swfobject.js', 'api');
					$this->assets->add('api.video.virool.js', 'api');
					$data = array(
							'token' => $token, // token user
							'key' =>md5(rand(0,9)), // xac dinh key cua fien lam viec
							'documentId' => $value->video_videoid,
							'time'=>0, // xac dinh khi nguoi dung post token yeu cau key
							'check' => true,
							'timelimit' => 60, // xac dinh thoi gian click lan thu 2 ( time (video|publicsher) / 2 )
							'type' => '3536216fecbf795b6699da93a654aa82' // kieu du document duoc quang cao;
							);
				}
			}
		}
		return $data;
	}
}