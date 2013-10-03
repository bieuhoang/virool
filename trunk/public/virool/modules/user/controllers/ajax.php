<?php defined('BASEPATH') or exit('No direct script access allowed.');

class Ajax extends Ajax_Controller
{
	public function __construct()
	{
		parent::__construct();
	}

	public function admin_list()
	{
		$page = $this->input->post('page') ? $this->input->post('page') : 1;
		$limit = $this->input->post('rp') ? $this->input->post('rp') : 20;
		$sortname = $this->input->post('sortname') ? $this->input->post('sortname') : 'name';
		$sortorder = $this->input->post('sortorder') ? $this->input->post('sortorder') : 'desc';
		$query = $this->input->post('query') != '' ? $this->input->post('query') : false;
		$qtype = $this->input->post('qtype') ? $this->input->post('qtype') : false;
		$offset = (($page-1) * $limit);

		$args = array();
		$user = new  User_Model();
		//filter by keywords
		if( $query )
		{
			if($qtype == 'name')
			{
				$user->like('first_name', $query)->or_like('last_name', $query);
			}
			else if ( !$qtype == 'group_id' )
			{
				$user->where_related('group', $qtype, $query);
			}
			else
			{
				$user->like($qtype, $query);
			}
		}
		$total = $user->get_clone(TRUE);
		$total = $total->count();

		$user->limit($limit, $offset)->order_by($sortname, $sortorder);
		$users = $user->get();
		
		$output = array('page' => $page, 'total' => $total, 'rows' => array());
		foreach($users as $user)
		{
			
			$output['rows'][] = array(
				'id' => $user->id,
				'cell' => array(
					'checkbox' => '<input type="checkbox" value="'.$user->id.'" id="ids['.$user->id.']" class="uniform inpCls-ckb" name="ids['.$user->id.']"/>',
					'id' => $user->id,
					'group' => $user->group->get()->name,
					'fullname' => $user->fullname(),
					'email' => $user->email,
					'percentage' => '<span class="badge badge-success qtip-click" data-id="'.$user->id.'">'.$user->percentage.'</span>',
					'totalamount' => '<span class="badge badge-success">'.$user->totalamount.'</span>',
					'created_at' => $user->created_at(),
					'actions' => $user->actions()
				)
			);
		}
		
		exit(json($output));
	}

	public function update() {
		$post = $this->input->post();
		if (!empty($post)) {
			$User = new User_Model();
			if ( $User->where('id', $post['id'])->get()->result_count() ) {
				$User->first_name = $post['inputFirstName'];
				$User->last_name = $post['inputLastName'];
				$User->group_id = $post['selIdGroup'];

				$User->phone 		= $post['inputPhone'];
				$User->paypal_email = $post['inputPaypalEmail'];
				$User->card_holder_name = $post['inputCardHolderName'];
				$User->card_ccv_code = $post['inputCardCCVCode'];
				$User->card_number = $post['inputCardNumber'];
				$User->card_expiration_month = $post['inputCardExpirationMoth'];
				$User->card_expiration_year = $post['inputCardExpirationYear'];

				$User->save();
				exit(json_encode(array('resp'=>true, 'msg'=>'Updated user successfully.', 'theme'=>'jGrowl_Success')));
			}
		}
		exit(json_encode(array('resp'=>false, 'msg'=>'You can not update user.', 'theme'=>'jGrowl_Error')));
	}

	public function changepass(){
		$post = $this->input->post();
		if (!empty($post)) {
			$User = new User_Model();
			if ( $User->where('id', $post['id'])->where('password', md5($post['inputPassword']))->get()->result_count() ) {
				$User->password = md5($post['inputNewPassword']);
				$User->save();
				exit(json_encode(array('resp'=>true, 'msg'=>'Change password successfully.', 'theme'=>'jGrowl_Success')));
			}
		}
		exit(json_encode(array('resp'=>false, 'msg'=>'You can not update user.', 'theme'=>'jGrowl_Error')));
	}

	public function add(){
		$post = $this->input->post();
		if (!empty($post)) {
			$User = new User_Model();
			if (!empty($post['id'])) {
				$User->where('id', $post['id'])->get();
			} else {
				if ($User->where('email', $post['inputEmail'])->result_count()) {
					exit(json_encode(array('resp'=>false, 'msg' => 'Email address is exists already.', 'theme'=>'jGrowl_Error')));
				}
			}
			$User->first_name = $post['inputFirstName'];
			$User->last_name = $post['inputLastName'];
			$User->phone = $post['inputPhone'];
			$User->card_holder_name = $post['inputCardHolderName'];
			$User->card_number = $post['inputCardNumber'];
			$User->paypal_email = $post['inputPaypalEmail'];
			$User->card_ccv_code = $post['inputCardCCVCode'];
			$User->card_expiration_month = $post['inputCardExpirationMoth'];
			$User->card_expiration_year = $post['inputCardExpirationYear'];
			$User->email = $post['inputEmail'];
			$User->password = md5($post['inputPassword']);
			$User->group_id = $post['selIdGroup'];
			$User->save();
			exit(json_encode(array('resp'=>true, 'msg' => 'Added user successfully.', 'theme'=>'jGrowl_Success')));
		}
		exit(json_encode(array('resp'=>false, 'theme'=>'jGrowl_Error')));
	}

	public function delete()
	{
		$id = $this->input->post('id');
		$user = new User_Model();
		$output = array('status' => false, 'You can not delete user at the moment. Please try again later.');

		if($id and $user->find($id))
		{
			$success = false;
			if(is_array($id))
			{
				$success = $user->delete_all();
			}
			else
			{
				$success = $user->delete();
			}
			if($success)
			{
				$output = array('status' => true, 'msg' => 'Deleted user(s) successfully');
			}
		}

		exit(json($output));
	}

	public function login_history_index()
	{
		$page = $this->input->post('page') ? $this->input->post('page') : 1;
		$limit = $this->input->post('rp') ? $this->input->post('rp') : 20;
		$sortname = $this->input->post('sortname') ? $this->input->post('sortname') : 'name';
		$sortorder = $this->input->post('sortorder') ? $this->input->post('sortorder') : 'desc';
		$query = $this->input->post('query') != '' ? $this->input->post('query') : false;
		$qtype = $this->input->post('qtype') ? $this->input->post('qtype') : false;
		$offset = (($page-1) * $limit);

		$histories = new  User_Login_Model();        
		$total = $histories->get_clone(TRUE);
		$total = $total->count();

		$histories->limit($limit, $offset)
			->order_by($sortname, $sortorder)
			->include_related('user', array('username', 'first_name', 'last_name'))
			->get();
		
		$output = array('page' => $page, 'total' => $total, 'rows' => array());
		foreach($histories as $history)
		{
			$user = $history->user->get();
			$output['rows'][] = array(
				'id' => $history->user_id,
				'cell' => array(
					'checkbox' => '<input type="checkbox" value="'.$history->user_id.'" id="ids['.$history->user_id.']" class="uniform" name="ids['.$history->user_id.']"/>',
					'id' => $history->user_id,
					'username' => $user->username,
					'fullname' => $user->fullname(),
					'ip_address' => $history->ip_address,
					'user_agent' => $history->user_agent,
					'login_time' => $history->login_time()
				)
			);
		}
		
		exit(json($output));
	}

	public function register()
	{
		$type = $this->input->post('user_kind');
		$data = $this->input->post('user');

		$user = new User_Model();
		if($user->where('email', $data['email'])->count())
		{
			exit(json(array('status' => false, 'msg' => 'Email address is exists already.')));
		}

		$user = new User_Model();
		if($user->register(array(
			'email' => $data['email'],
			'password' => $data['password']
		), $type))
		{
			exit(json(array('status' => true, 'msg' => '')));
		}

		exit(json(array('status' => false, 'msg' => 'You can not register at the moment.')));
	}
	public function signup()
	{
		if($this->user) {
			redirect('user');
		}
		$this->form_validation->set_rules('user[password]', 'Password', 'required');
		$this->form_validation->set_rules('user[email]', 'Email', 'required');
		$this->form_validation->set_rules('user_kind', 'User', 'required');
		if ($this->form_validation->run() AND $post = $this->input->post()) {
			$User = new User_Model();
			if($User->where('email', $post['user']['email'])->count())
			{
				exit(json(array('status' => false, 'msg' => 'Email address is exists already.', 'option'=>array('theme'=>'jGrowl_error'))));
			}
			if ( $User->register(array(
				'email' => $post['user']['email'],
				'password' => $post['user']['password']
			), $post['user_kind']) ) {
				
				$content = '
					<div style="background:#00173d;width:800px; padding:0px 10px;margin:0px auto;overflow: hidden">
						<div style="color: #f749bc;padding:50px 0 10px 20px;text-align:left;font-size:12px;font-weight:bold">IMPORTANT! PLEASE CONFIRM YOUR EMAIL ADDRESS ON VIROOL</div>
						<div style="width: 650px; margin:0px auto 20px;border-radius:8px; border: 5px solid #fafafa;padding: 20px 10px; background:#fff">
							<p>Hi,</p>
							<p>
							Thanks for registering on Virool! 
							To confirm your email address and activate your account please 
							<a href="'.base_url().'login" ><strong>CLick here</strong></a> 
							Sincerely,</p>
							<p>The Virool Team</p>
						</div>
						<div></div>
					</div>';
				$mail=array(
					'email'=>$post['user']['email'],
					'content' => $content
				);
				if ( $User->login($post['user']['email'], $post['user']['password'], false) ) {
					$send = $this->phpmail->sendMail($mail);
					exit(json(array('status' => true, 'msg'=>'Register successfully.', 'url'=>'user', 'theme'=>'tplSuccess')));
				}
			}
		}
		exit(json(array('status' => false, 'msg' => 'You can not register at the moment.')));
	}

	/**
	*
	*	@param : array
	*	Phuong thuc change percentage
	*	@return : json
	*
	**/
	public function changepercent(){
		$post = $this->input->post();
		$output = array('status'=>false);
		if ( count($post) )
		{
			$User = new User_Model();
			$User->where(array('id'=>$post['item_id']))->get();
			if ( $User->result_count() )
			{
				$User->percentage = $post['item_val'];
				$User->save();
				$UserVideo = new Uservideo_Model();
				$UserVideo->where(array('publicshe_id'=>$post['item_id']))->get();
				foreach ($UserVideo as $key => $value) {
					$value->percent = $post['item_val'];
					$value->save();
				}
				$output = array('sataus'=>true, 'msg'=>'Update successfully.', 'theme'=>'tplSuccess');
			}
		}
		exit(json($output));
	}
}