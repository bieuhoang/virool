<?php defined('BASEPATH') or exit('No direct script access allowed.');

class Ajax extends Ajax_Controller
{
	public function __construct()
	{
		parent::__construct();
	}

	
	public function register()
	{

		$option = $this->input->post('option');
		$data = $this->input->post('user');

		$user = new User_Model();
		if($user->where('email', $data['email'])->count())
		{
			exit(json(array('status' => false, 'msg' => 'Email address is exists already.')));
		}

		$user = new User_Model();
		if($user->register(array(
			'email' => $data['email'],
			'password' => $data['pass']
		), $data['group']))
		{
			$user = new User_Model();
			$user->where('email', $data['email'])->get();
			$Mysite = new Mysite_Model();
			$Mysite->url = $data['url'];
			$Mysite->user_id = $user->id;
			$Mysite->save();
			if ( $user->login($data['email'], $data['pass'], false) ) {
				exit(json(array('status' => true, 'msg' => 'user')));
			}
		}

		exit(json(array('status' => false, 'msg' => 'You can not register at the moment.')));
	}
}