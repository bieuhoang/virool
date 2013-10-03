<?php defined('BASEPATH') or exit('No direct script access allowed.');

class User_Login_Model extends DataMapper
{
	public $table = 'user_logins';

	public $has_one = array(
		'user' => array(
			'class' => 'User_Model',
			'other_field' => 'user_login'
		)
	);

	public function store($user_id = 0)
	{
		$this->user_id = $user_id;
		$this->login_time = date('Y-m-d H:i:s', time());
		$this->user_agent = ci()->agent->agent_string();
		$this->ip_address = ci()->ip_address;

		// save store database
		return $this->save();
	}

	public function login_time($format = 'Y-m-d h:i A')
	{
		return date($format, strtotime($this->login_time));
	}
}