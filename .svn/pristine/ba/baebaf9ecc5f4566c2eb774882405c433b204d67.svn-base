<?php defined('BASEPATH') or exit('No direct script access allowed.');

class User extends Public_Controller
{
	public function __construct()
	{
		parent::__construct();
	}

	public function index()
	{	
		if ($this->user) {
			if ($this->user->group_id AND $this->user->group_id == 2) {
				$Video = new Videos_Model();
				$UserVideo = new Uservideo_Model();
				$Videopublisher = $UserVideo->getVideoPublisher($this->user->id);
				if ( count($Videopublisher) )
				{
					$Video->where_not_in('id', $Videopublisher);
				}
				
				$this->set('Videotpl', $Video->get());
				$this->assets->add('user.publisher.css', 'user');
				$this->template->build('user/publisher');
			} else {
				$this->assets->add('user.index.css', 'user');
				$User = new User_Model();
				$User->where('id', $this->user->id)->get();
				
				$this->assets->add('bootstrap/bootstrap.min.css', '_theme_');
				$this->assets->add('bootstrap/bootstrap.min.js', '_theme_');
				$this->assets->add('makeapayment.css', '_theme_');
				$this->assets->add('makeapayment.js', '_theme_');
				$this->assets->add('campaigns.css', 'user');
				$this->assets->add('campaigns.js', 'user');
				$this->set('Video_Paused_Pending', $User->video->get());
				$this->build();
			}
		} else {
			redirect(base_url());
		}
	}
	public function account(){
		if (!$this->user) {
			redirect('');
			exit;
		}
		$Carmonth = array(
			'1'=>'<option value="1">1 - January</option>',
			'2'=>'<option value="2">2 - February</option>',
			'3'=>'<option value="3">3 - March</option>',
			'4'=>'<option value="4">4 - April</option>',
			'5'=>'<option value="5">5 - May</option>',
			'6'=>'<option value="6">6 - June</option>',
			'7'=>'<option value="7">7 - July</option>',
			'8'=>'<option value="8">8 - August</option>',
			'9'=>'<option value="9">9 - September</option>',
			'10'=>'<option value="10">10 - October</option>',
			'11'=>'<option value="11">11 - November</option>',
			'12'=>'<option value="12">12 - December</option>'
		);
		$this->assets->add('user.account.css', 'user');
		$this->assets->add('user.index.js', 'user');
		$Country = new Country_Model();
		$User = new User_Model();
		$this->set('Carmonthtpl', $Carmonth);
		$this->set('Usertpl', $this->user);
		$this->set('Country', $Country->get());
		$this->build();
	}
	public function personal(){
		$post = $this->input->post();
		if($this->input->is_ajax_request() or $post) {
			if ($this->user->email == $post['user']['email']) {
				$User = new User_Model();
				$User->find($this->user->id);
				if ($User->result_count()) {
					$User->first_name	= $post['user']['first_name'];
					$User->last_name	= $post['user']['last_name'];
					$User->phone	= $post['user']['phone_number'];
					$User->paypal_email= $post['user']['paypal_email'];
					$User->address_1= $post['user']['billing_address_attributes']['address'];
					$User->address_2= $post['user']['billing_address_attributes']['address2'];
					$User->state= $post['user']['billing_address_attributes']['state'];
					$User->country_id= $post['user']['billing_address_attributes']['country'];
					$User->zip_post_code= $post['user']['billing_address_attributes']['zip'];
					$User->updated_at= date('Y-m-d H:i:s');
					$User->save();
					exit(json_encode(array('resp'=>true, 'msg'=>'Update successfully.')));
				}
			}
			exit(json_encode(array('resp'=>false, 'msg'=>'Email not exists.')));
		}
		exit(json_encode(array('resp'=>false, 'msg'=>false)));
	}
	public function changepass(){
		$post = $this->input->post();
		if($this->input->is_ajax_request() or $post) {
			$User = new User_Model();
			$User->where('id', $this->user->id)->where('password', md5($post['current_password']))->get();
			if ($User->result_count()) {
				if ($post['password']==$post['password_confirmation']) {
					$User->password = md5($post['password']);
					$User->save();
					exit(json_encode(array('resp'=>true, 'msg'=>'Update successfully.', 'theme'=>'tplSuccess')));
				}
				exit(json_encode(array('resp'=>false, 'msg'=>'Passwords not the same.', 'theme'=>'tplError')));
			}
			exit(json_encode(array('resp'=>false, 'msg'=>'Password improper.', 'theme'=>'tplError')));
		}
		exit(json_encode(array('resp'=>false, 'msg'=>false)));
	}
	public function changecard(){
		$post = $this->input->post();
		if($this->input->is_ajax_request() or $post) {
			$User = new User_Model();
			$User->where('id', $this->user->id)->get();
			if ($User->result_count()) {
				$User->recurring_billing = (isset($post['user_recurring_billing']) ? $post['user_recurring_billing'] : 0);
				$User->card_holder_name = $post['card_name'];
				$User->card_number = $post['card_number'];
				$User->card_ccv_code = $post['card_code'];
				$User->card_expiration_month = $post['card_month'];
				$User->card_expiration_year = $post['card_year'];
				$User->save();
				exit(json_encode(array('resp'=>true, 'msg'=>'Update successfully.', 'theme'=>'tplSuccess')));
			}
			exit(json_encode(array('resp'=>false, 'msg'=>'Password improper.', 'theme'=>'tplError')));
		}
		exit(json_encode(array('resp'=>false, 'msg'=>false)));
	}
	public function login()
	{
		// if submited
		if($this->input->is_ajax_request() or $this->input->post())
		{
			$username = $this->input->post('user_devise_login', TRUE);
			$password = $this->input->post('user_password', TRUE);
			$remember = $this->input->post('user_remember_me')?TRUE:FALSE;

			$output = json(array('status' => FALSE, 'msg' => 'Username or password is not correct.'));

			$user = new User_Model();
			if($user->login($username, $password, $remember))
			{
				if($this->input->is_ajax_request())
				{
					$output = json(array('status' => TRUE, 'msg'=>'Signed in successfully.'));
				}
				else
				{
					redirect('user');
				}
			}

			exit($output);
		}
		$this->build();
	}

	public function forgot_password()
	{
		$this->build();
	}

	public function signup()
	{
		if($this->user) {
			redirect('user');
		}
		$this->build();
	}

	public function logout()
	{
		$this->session->sess_destroy();
		redirect('login');
	}
}