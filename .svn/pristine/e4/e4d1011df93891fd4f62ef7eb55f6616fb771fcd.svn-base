<?php defined('BASEPATH') or exit('No direct script access allowed.');

class Ajax extends Ajax_Controller
{
	public function __construct()
	{
		parent::__construct();
	}

	public function admin_index()
	{
		
		$page = $this->input->post('page') ? $this->input->post('page') : 1;
        $limit = $this->input->post('rp') ? $this->input->post('rp') : 20;
        $sortname = $this->input->post('sortname') ? $this->input->post('sortname') : 'name';
        $sortorder = $this->input->post('sortorder') ? $this->input->post('sortorder') : 'desc';
        $query = $this->input->post('query') != '' ? $this->input->post('query') : false;
        $qtype = $this->input->post('qtype') ? $this->input->post('qtype') : false;
        $offset = (($page-1) * $limit);

        $args = array();
        $item = new  Product_Model();
		//filter by keywords
		if( $query )
		{
			$item->like($qtype, $query);
		}
		$total = $item->get_clone(TRUE);
		$total = $total->count();

		$item->limit($limit, $offset)->order_by($sortname, $sortorder);
		$items = $item->get();
		
		$output = array('page' => $page, 'total' => $total, 'rows' => array());
		foreach($items as $item)
		{
			$output['rows'][] = array(
				'id' => $item->id,
				'cell' => array(
					'checkbox' => '<input type="checkbox" value="'.$item->id.'" id="ids['.$item->id.']" class="uniform" name="ids['.$item->id.']"/>',
					'fullname' => $item->fullname(),
					'telephone' => $item->telephone,
					'dni' => $item->dni,
					'product_name' => $item->product_name,
					'product_weight' => $item->product_weight,
					'product_price' => $item->product_price,
					'product_image' => $item->image(),
					'product_collection' => $item->product_collection,
					'actions' => $item->admin_actions()
				)
			);
		}

		exit(json($output));
	}

	public function admin_franchise()
	{
		
		$page = $this->input->post('page') ? $this->input->post('page') : 1;
        $limit = $this->input->post('rp') ? $this->input->post('rp') : 20;
        $sortname = $this->input->post('sortname') ? $this->input->post('sortname') : 'name';
        $sortorder = $this->input->post('sortorder') ? $this->input->post('sortorder') : 'desc';
        $query = $this->input->post('query') != '' ? $this->input->post('query') : false;
        $qtype = $this->input->post('qtype') ? $this->input->post('qtype') : false;
        $offset = (($page-1) * $limit);

        $args = array();
        $item = new  Product_Model();
		//filter by keywords
		if( $query )
		{
			$item->like($qtype, $query);
		}
		$total = $item->get_clone(TRUE);
		$total = $total->count();

		$item->limit($limit, $offset)->order_by($sortname, $sortorder);
		$items = $item->get();
		
		$output = array('page' => $page, 'total' => $total, 'rows' => array());
		foreach($items as $item)
		{
			$output['rows'][] = array(
				'id' => $item->id,
				'cell' => array(
					'checkbox' => '<input type="checkbox" value="'.$item->id.'" id="ids['.$item->id.']" class="uniform" name="ids['.$item->id.']"/>',
					'fullname' => $item->fullname(),
					'telephone' => $item->telephone,
					'dni' => $item->dni,
					'product_name' => $item->product_name,
					'product_weight' => $item->product_weight,
					'product_price' => $item->product_price,
					'product_image' => $item->image(),
					'product_collection' => $item->product_collection,
					'actions' => $item->admin_actions()
				)
			);
		}

		exit(json($output));
	}
	public function register()
	{
		$data = $this->input->post('email');
		$pass_forgot = $pass = substr((md5(rand (0,9))), 0,7);
		$user = new User_Model();
		if($user->where('email', $data)->count())
		{
			exit(json(array('status' => false, 'msg' => 'Email address is exists already.', 'option'=>array('theme'=>'jGrowl_error'))));
		}

		$user = new User_Model();
		if($user->register(array(
			'email' => $data,
			'password' => $pass,
			'forgotten_password_code' => $pass
		), 'Advertiser'))
		{
			
			$content = '
				<div style="background:#00173d;width:800px; padding:0px 10px;margin:0px auto;overflow: hidden">
					<div style="color: #f749bc;padding:50px 0 10px 20px;text-align:left;font-size:12px;font-weight:bold">IMPORTANT! PLEASE CONFIRM YOUR EMAIL ADDRESS ON VIROOL</div>
					<div style="width: 650px; margin:0px auto 20px;border-radius:8px; border: 5px solid #fafafa;padding: 20px 10px; background:#fff">
						<p>Hi,</p>
						<p>
						Thanks for registering on Virool! 
						To confirm your email address and activate your account please set your password here: 
						<a href="'.base_url().'activate/'.md5($data).'" >'.base_url().'activate/'.md5($data).'</a> 
						Sincerely,</p>
						<p>The Virool Team</p>
					</div>
					<div></div>
				</div>';
			$mail=array(
				'email'=>$data,
				'content' => $content
			);
			if ( $user->login($data, $pass, false) ) {
				$send = $this->phpmail->sendMail($mail);
				exit(json(array('status' => true, 'msg' => 'user')));
			}
		}

		exit(json(array('status' => false, 'msg' => 'You can not register at the moment.')));
	}
}