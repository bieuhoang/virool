<?php defined('BASEPATH') or exit('No direct script access allowed.');

class Log_Model extends DataMapper
{
	public $table = 'logs';
	
	public $has_one = array(
		'user' => array(
			'class' => 'User_Model'
		)
	);

	public function store($message = '')
	{
		$user = ci()->user;
		if($user and $message != '')
		{
			// set items
			$this->user_id = $user->id;
			$this->created_at = date('Y-m-d H:i:s');
			$this->message = $message;
			// save
			$this->save();
		}
	}

	public function user_action()
	{
		$user = ci()->user;
		return $user ? '<a href="javascript:;" class="user-log-action" title="'.$user->fullname().'">'.$user->fullname().'</a>' : 'Unidentify user';
	}

	public function created_at($format = 'Y-m-d h:i A')
	{
		return date($format, strtotime($this->created_at));
	}

	public function updated_at($format = 'Y-m-d h:i A')
	{
		return date($format, strtotime($this->updated_at));
	}
}