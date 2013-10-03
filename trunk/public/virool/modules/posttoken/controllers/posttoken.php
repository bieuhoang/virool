<?php defined('BASEPATH') or exit('No direct script access allowed.');

class Posttoken extends Public_Controller
{
	public function index()
	{
		if ( !empty($_POST['token']) )
		{
			$post = $_POST;
			$pTokenArray = (!strpos($post['token'], '-') ? false : explode('-', $post['token']));
			$session = $this->session->userdata('key');
			if ( $pTokenArray[0]==='86ed8be3c3ebea12a82c67c15de4e7b6' ) // VIR::Video
			{
				switch ($post['action']) {
					case 'set-key':
						if ($session['key'] == $post['key'] AND $session['time'] == 0 )
						{
							$session['time'] = strtotime(date('Y-m-d H:i:s'));
							$session['check'] = true;
							$session['timelimit'] = $session['time'] + $session['timelimit'];
							$this->session->set_userdata('key', $session);
							// exit((json_encode(array('time_start'=>$session['time'], 'time_post' => $session['timelimit']))));
							exit(json_encode(array('time_start'=>$session['time'], 'time_post' => $session['timelimit'])));
						}
						break;
					case 'check-key':
						if ($session['key'] == $post['key'] AND $session['time'] != 0 AND strtotime(date('Y-m-d H:i:s')) >= $session['timelimit'] AND isset($session['check']) AND $session['check'] === true )
						{
							$session['check'] = false;
							$this->session->set_userdata('key', $session);
							// exit(json_encode(array('resp'=>$this->addViews($post['token']))));
							exit( json_encode(array('resp'=>$this->addViews($post['token']))) );
						}
						break;
					case 'set-token':
						$session = $this->getInfomation($post['token']);
						$this->session->set_userdata('key', $session);
						// exit('('.json_encode(array($session)).')');
						exit( json_encode(array($session)) );
						break;
				}
			}
			else if ( $pTokenArray[0]==='3536216fecbf795b6699da93a654aa82' ) // VIR::Document
			{
				switch ($post['action']) {
					case 'check-key':
						if ($session['key'] == $post['key'] AND isset($session['check']) AND $session['check'] === false )
						{
							$session['check'] = true;
							$this->session->set_userdata('key', $session);
							// exit(json_encode(array('resp'=>$this->addViews($post['token']))));
							exit( json_encode(array('resp'=>$this->addViews($post['token']))) );
						}
						break;
					case 'set-token':
						$json = $data = $this->getInfomation($post['token']);
						$data['check'] = true;
						$this->session->set_userdata('key', $data);
						// exit('('.json_encode(array($json)).')');
						exit( json_encode(array($json)) );
						break;
				}
			}
		}
	}

	public function getInfomation($token)
	{
		$this->session->unset_userdata('key');
		$Uservideo = new Uservideo_Model();
		$Uservideo->where('tokenapi', $token)
			->where('type', 'Publisher')
			->include_related('video', array('title', 'images', 'type', 'videoid'))
			->get();
		if ( $Uservideo->result_count() )
		{
			foreach ($Uservideo as $key => $value) {
				if ($value->video_type === 'Video' )
				{
					return array(
							'token' => $token, // token user
							'key' =>md5(rand(0,9)), // xac dinh key cua fien lam viec
							'time'=>0, // xac dinh khi nguoi dung post token yeu cau key
							'timelimit' => 30, // xac dinh thoi gian click lan thu 2 ( time (video|publicsher) / 2 )
							'url' => 'http://www.youtube.com/watch?v='.$value->video_videoid, // xac dinh link cua video/publicsher can quang cao
							'type' => '86ed8be3c3ebea12a82c67c15de4e7b6' // kieu du document duoc quang cao;
							);
				}
				else
				{
					return array(
							'token' => $token, // token user
							'key' =>md5(rand(0,9)), // xac dinh key cua fien lam viec
							'documentId' => $value->video_videoid,
							'time'=>0, // xac dinh khi nguoi dung post token yeu cau key
							'timelimit' => 30, // xac dinh thoi gian click lan thu 2 ( time (video|publicsher) / 2 )
							'type' => '3536216fecbf795b6699da93a654aa82' // kieu du document duoc quang cao;
							);
				}
			}
		}
		return array();
	}

	// add views
	public function addViews($token)
	{
		$User = new User_Model();
		$Uservideo = new Uservideo_Model();
		$Video = new Videos_Model();
		$Uservideo->where('tokenapi', $token)
			->where('type', 'Publisher')
			->where('action', 'Action')
			->where('sate', 'Run')
			->where('lock != "Lock"')
			->include_related('video', 'views')
			->get();

		if ( $Uservideo->result_count() )
		{
			foreach ($Uservideo as $key => $value) {
				$Video->where('id',$value->video_id)->get();
				$User->where('id', $value->user_id)->get();
				$userLock = 0;
				if ( $Video->result_count() AND $User->result_count() )
				{
					if ( $User->totalamount > 0 AND $Video->max_bid > 0 ) // Tổng tiền user lớn hơn không và số tiền cho mỗi click phải lơn hơn không
					{
						$profit = ($Video->max_bid*$value->percent)/100; // Số tiền publisher được cộng khi 1 click
						// Số tiền được cộng của publisher lớn hơn tổng số tiền của Advertiser còn lại
						if ( $User->totalamount <= $profit )
						{
							$profit = $User->totalamount;
							$User->totalamount = 0;
							$userLock = $User->id;
						}
						else
						{
							$User->totalamount = $User->totalamount - $profit;
						}
						$value->funds = $value->funds + $profit;
						$view = intval($value->views);
						$value->views = $view + 1;
						$Video->views = $value->views;

						$User->save();
						// update totalamount publisher
						$User->addTotalPublisher($value->publicshe_id, $profit);

						$value->save();
						$Uservideo->updateLock($userLock, 'Lock');
						$Video->save();
						return true;
					}
					else if ( $User->totalamount <= 0 )
					{
						$Uservideo->updateLock($value->user_id, 'Lock');
						return true;
					}					
				}
			}
		}
		return false;
	}
}