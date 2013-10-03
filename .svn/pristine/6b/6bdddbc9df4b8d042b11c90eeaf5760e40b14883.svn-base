<?php defined('BASEPATH') or exit('No direct script access allowed.');

class User_Model extends DataMapper
{
	public $table = 'users';

	public $has_many = array(
		'user_login' => array(
			'class' => 'User_Login_Model',
			'other_field' => 'user'
		),
		'video' => array(			
            'class' => 'Videos_Model',		
            'other_field' => 'user',
            'join_self_as' => 'user',
            'join_other_as' => 'video',
            'join_table' => 'user_video'
        ),
		'sites' => array(
			'class' => 'Mysite_Model',
			'other_field' => 'user',
			'join_other_as' => 'user'
		),
		'uservideo' => array(
			'class' => 'Uservideo_Model',
			'other_field' => 'user',
			'join_other_as' => 'user'
		),
		'uservideouser' => array(
			'class' => 'Uservideo_Model',
			'other_field' => 'publicshe',
			'join_other_as' => 'publicshe'
		)
	);

	public $has_one = array(
		'group' => array(
			'class' => 'Group_Model',
			'other_field' => 'user',
			'join_self_as'=> 'user',
			'join_other_as' => 'group',
			'join_table' => 'users_groups'
		)
	);

	public function login($email, $password, $remember = FALSE)
	{
		$u = new User_Model();
		if($user = $u->where('email', $email)->get())
		{
			if($user->password == $this->hashed_password($password))
			{
				ci()->session->set_userdata('user_id', $user->id);
				if($remember)
				{
					ci()->input->set_cookie(array(
						'name' => 'identity',
						'value' => $user->id,
						'expire' => time()+86500
					));
				}

				// save last login
				$user->last_login = date('Y-m-d h:i:s');
				$user->save();

				// save user log login
				$user_log_login = new User_Login_Model();
				$user_log_login->store($user->id);

				return true;
			}
		}
		
		return false;
	}

	public function adminLogin($email, $password, $remember = FALSE)
	{
		$u = new User_Model();
		if($user = $u->where('email', $email)->where('group_id', 1)->get())
		{
			if($user->password == $this->hashed_password($password))
			{
				ci()->session->set_userdata('user_id', $user->id);
				if($remember)
				{
					ci()->input->set_cookie(array(
						'name' => 'identity',
						'value' => $user->id,
						'expire' => time()+86500
					));
				}

				// save last login
				$user->last_login = date('Y-m-d h:i:s');
				$user->save();

				// save user log login
				$user_log_login = new User_Login_Model();
				$user_log_login->store($user->id);

				return true;
			}
		}
		
		return false;
	}

	public function fullname()
	{
		return $this->first_name .' ' . $this->last_name;
	}

	public function created_at($format = 'Y-m-d h:i A')
	{
		return date($format, strtotime($this->created_at));
	}

	public function is_group($group_name = 'Member')
	{
		if($this->group->get()->name == $group_name)
		{
			return true;
		}

		return false;
	}

	public function is_admin()
	{
		return $this->is_group('Admin');
	}

	public function can($action = '')
	{
		if($action)
		{
			foreach($this->group->get() as $group)
			{
				$action = 'can_'.strtolower($action);
				if($group->{$action})
				{
					return true;
				}
			}
		}
		return false;
	}

	public function data()
	{
		if(!is_null($user_id = ci()->session->userdata('user_id')))
		{
			return new User_Model($user_id);
		}
		return NULL;
	}

	public function hashed_password($password)
	{
		return md5($password);
	}

	public function actions()
	{
		$actions = '';
		if($user = ci()->user and $user and $user->is_admin() and $this->id != 1)
		{
			$actions .= /*'<a href="javascript:;" data-id="'.$this->id.'" title="View Profile" class="profile">'.
							'<span class="led-icon led-icon-vcard"></span>'.
						'</a>'.*/
						'<a data-id="'.$this->id.'" class="action-admin" href="'.base_url().'admin/user/edit/'.$this->id.'" title="Edit">'.
							'<span class="ico-edit"></span>'.
						'</a>'.
						'<a data-id="'.$this->id.'" data-fullname="'.$this->fullname().'" class="action-admin" href="javascript:;" title="Delete">'.
							'<span class="ico-trash"></span>'.
						'</a>';
		}

		return $actions;
	}

	public function register($data = array(), $group_name)
	{
		if(count($data) == 0) return false;

		foreach($data as $field => $value)
		{
			if($field == 'password')
			{
				$value = $this->hashed_password($value);
			}
			$this->{$field} = $value;
		}

		$group = new Group_Model();
		$group->where('name', ucfirst($group_name))->get();
		$this->group_id = $group->id;

		return $this->save();
	}

	public function active($code = '')
	{
		if($code == '') return false;

		if($this->activation_code == $code)
		{
			$this->active = 1;
		}
		$this->activation_code = '';

		return $this->save();
	}

	public function deactive()
	{
		$this->active = 0;
		return $this->save();
	}

	/**
	*
	*	@param : 
	*	Phương thức cộng tiền cho publisher
	*	@return : void
	*
	**/
	public function addTotalPublisher($userid, $profit){
		if ( !empty($userid) )
		{
			$this->where(array('id'=> $userid))->get();
			if ( $this->result_count() )
			{
				$this->totalamount = $this->totalamount + $profit;
				$this->save();
			}
		}
	}
}