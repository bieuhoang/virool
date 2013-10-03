<?php defined('BASEPATH') or exit('No direct script access allowed.');

class Ajax extends Ajax_Controller
{
	public function __construct()
	{
		parent::__construct();
	}

	public function resetpass(){
		if ( $this->input->is_ajax_request() AND $this->input->post() ) {
			$post = $this->input->post();
			$user = new User_Model();
			$user->get();
			foreach ($user as $key => $value) {
				if (md5($value->email) == $post['reset_password_token'] ) {
					$value->password = md5($post['user_password']);
					$value->active = 1;
					$value->save();
					ci()->session->set_userdata('user_id', $value->id);
					exit(json(array('status' => true, 'msg' => 'user')));
				}
			}
			exit(json(array('status' => false, 'msg' => 'You can not reset password.', 'option'=>array('theme'=>'jGrowl_error'))));
		}		
	}
}