<?php defined('BASEPATH') or exit('No direct script access allowed.');

class Ajax extends Ajax_Controller
{
	public function __construct()
	{
		parent::__construct();
	}

	public function index(){
		$Uservideo = new Uservideo_Model();
		$Uservideo->where('publicshe_id != 0')
					->where('type', 'Publisher')
					->where_join_field('video')->get();
	}
	public function admin_list(){
		$page = $this->input->post('page') ? $this->input->post('page') : 1;
		$limit = $this->input->post('rp') ? $this->input->post('rp') : 20;
		$sortname = $this->input->post('sortname') ? $this->input->post('sortname') : 'title';
		$sortorder = $this->input->post('sortorder') ? $this->input->post('sortorder') : 'desc';
		$query = $this->input->post('query') != '' ? $this->input->post('query') : false;
		$qtype = $this->input->post('qtype') ? $this->input->post('qtype') : false;
		$offset = (($page-1) * $limit);

		$args = array();
		$Uservideo = new Uservideo_Model();
		$Uservideo->where('publicshe_id != 0')
					->where('type', 'Publisher')
					->include_related('video', array('title', 'type', 'images', 'videoid'))
					->include_related('user', array('email'))
					->include_related('publicshe', array('email'));
		//filter by keywords
		/*if( $query )
		{
			$Uservideo->like($qtype, $query);
		}
		*/
		$total = $Uservideo->get_clone(TRUE);
		$total = $total->count();

		$Uservideo->limit($limit, $offset)/*->order_by($sortname, $sortorder)*/;
		$Uservideos = $Uservideo->get();
		
		$output = array('page' => $page, 'total' => $total, 'rows' => array());
		foreach($Uservideos as $Uservideo)
		{
			$img = '';
			if ( $Uservideo->video_type === 'Video' )
			{
				$img = explode(':::', $Uservideo->video_images);
				$img = '<img src="'.$img[0].'" class="imgCls-admin" title="" alt="" />';
			}
			else
			{
				$img = '<img src="http://image.issuu.com/'.$Uservideo->video_videoid.'/jpg/page_1_thumb_large.jpg" class="imgCls-admin" title="" alt="" />';
			}
			$output['rows'][] = array(
				'id' => $Uservideo->id,
				'cell' => array(
					'advertiser' => $Uservideo->user_email,
					'image' => $img,
					'title' => $Uservideo->video_title,
					'action' => ($Uservideo->action == 'Question' ? '<span class="badge badge-important">' : '<span class="badge badge-success">').$Uservideo->action.'</span>',
					'view' => '<span class="badge badge-success">'.$Uservideo->views.'</span>',
					'publisher' => $Uservideo->publicshe_email,
					'percent' => '<span id="change-percent-qtip-'.$Uservideo->id.'" class="badge badge-success qtip-click" data-id="'.$Uservideo->id.'">'.$Uservideo->percent.'</span>',
					'created_at' => date("H:i d-m-Y " , $Uservideo->created_at),
					'actions' => $Uservideo->actions()
				)
			);
		}
		
		exit(json($output));
	}
	public function dele(){
		$post = $this->input->post();
		$this->load->spark('imgthumb');
		if (!empty($post)) {
			$Siteimg = new Siteimg_Model();
			$Siteimg->where('id',$post['item_id'])->get();
			if ($Siteimg->result_count()) {
				$this->imgthumb->DeleteFile($Siteimg->url);
				$this->imgthumb->DeleteFile($Siteimg->urlfull);
				$Siteimg->delete();
				exit(json_encode(array('resp' => TRUE, 'msg'=> 'Delete successfully.', 'theme'=>'jGrowl_Success')));
			}

		}
		exit(json_encode(array('resp'=> false)));
	}

	/**
	*
	*	@param : id
	*	Phuong thuc cap nhat lai % cho user publisher
	*	@return : json
	*
	**/
	public function changepercent(){
		$post = $this->input->post();
		if ( !empty($post) AND !empty($post['item_id']) AND !empty($post['item_val']) )
		{
			$Uservideo = new Uservideo_Model();
			$Uservideo->where('id', $post['item_id'])
						->get();
			if ( $Uservideo->result_count() )
			{
				foreach ($Uservideo as $key => $value) {
					$value->percent = $post['item_val'];
					$value->save();
				}
				exit(json_encode(array('resp'=>true, 'msg'=>'Change percent successfully.', 'theme'=>'jGrowl_Success')));	
			}
		}
		exit(json_encode(array('resp'=>false, 'msg'=>'You can not change', 'theme'=>'jGrowl_Error')));
	}

	public function changeaction() {
		$post = $this->input->post();
		if ( !empty($post) AND !empty($post['item_id']) )
		{
			$Uservideo = new Uservideo_Model();
			$Uservideo->where('id', $post['item_id'])
						->where('publicshe_id != 0')
						->where('action = "Question"')
						->include_related('video', 'type')
						->get();
			if ( $Uservideo->result_count() )
			{
				foreach ($Uservideo as $key => $value) {
					$value->action = 'Action';
					$value->sate = 'Run';
					$value->tokenapi = md5(md5('VIR::'.$value->video_type)).'-'.md5(md5($value->user_id.'::VIR::'.$value->publicshe_id.'::VIR::'.$value->video_id));
					$value->save();
				}
				exit(json_encode(array('resp'=>true, 'msg'=>'Change action successfully.', 'theme'=>'jGrowl_Success')));	
			}
		}
		exit(json_encode(array('resp'=>false, 'msg'=>'You can not change', 'theme'=>'jGrowl_Error')));
	}

	// admin delete mysite
	public function removeaction(){
		$post = $this->input->post();
		if ( !empty($post) AND !empty($post['item_id']) )
		{
			$Uservideo = new Uservideo_Model();
			$Uservideo->where('id', $post['item_id'])
						->get();
			if ( $Uservideo->result_count() )
			{
				$Uservideo->delete();
				exit(json_encode(array('resp'=>true, 'msg'=>'Remove successfully.', 'theme'=>'jGrowl_Success')));	
			}
		}
		exit(json_encode(array('resp'=>false, 'msg'=>'You can not remove', 'theme'=>'jGrowl_Error')));
	}

	/**
	*
	*	Pause video
	*
	*/
	public function actionpause() {
		$post = $this->input->post();
		if ( !empty($post) AND !empty($post['item_id']) )
		{
			$Uservideo = new Uservideo_Model();
			$Uservideo->where('id', $post['item_id'])
						->where('publicshe_id != 0')
						->where_in('action', array("Action", 'Stop'))
						->where('sate = "Run"')
						->include_related('video', 'type')
						->get();
			if ( $Uservideo->result_count() )
			{
				foreach ($Uservideo as $key => $value) {
					$value->action = 'Pause';
					$value->sate = 'Pending';
					$value->save();
				}
				exit(json_encode(array('resp'=>true, 'msg'=>'Change action successfully.', 'theme'=>'jGrowl_Success')));	
			}
		}
		exit(json_encode(array('resp'=>false, 'msg'=>'You can not change', 'theme'=>'jGrowl_Error')));
	}

	/**
	*
	*	Stop video
	*
	*/
	public function actionstop() {
		$post = $this->input->post();
		if ( !empty($post) AND !empty($post['item_id']) )
		{
			$Uservideo = new Uservideo_Model();
			$Uservideo->where('id', $post['item_id'])
						->where('publicshe_id != 0')
						->where_in('action', array("Action", 'Pause'))
						->where('sate = "Run"')
						->include_related('video', 'type')
						->get();
			if ( $Uservideo->result_count() )
			{
				foreach ($Uservideo as $key => $value) {
					$value->action = 'Stop';
					$value->sate = 'Pending';
					$value->save();
				}
				exit(json_encode(array('resp'=>true, 'msg'=>'Change action successfully.', 'theme'=>'jGrowl_Success')));	
			}
		}
		exit(json_encode(array('resp'=>false, 'msg'=>'You can not change', 'theme'=>'jGrowl_Error')));
	}

	/**
	*
	*	Start video
	*
	*/
	public function actionstart() {
		$post = $this->input->post();
		if ( !empty($post) AND !empty($post['item_id']) )
		{
			$Uservideo = new Uservideo_Model();
			$Uservideo->where('id', $post['item_id'])
						->where('publicshe_id != 0')
						->where_in('action', array("Stop", 'Pause'))
						->where('sate = "Pending"')
						->include_related('video', 'type')
						->get();
			if ( $Uservideo->result_count() )
			{
				foreach ($Uservideo as $key => $value) {
					$value->action = 'Action';
					$value->sate = 'Run';
					$value->save();
				}
				exit(json_encode(array('resp'=>true, 'msg'=>'Change action successfully.', 'theme'=>'jGrowl_Success')));	
			}
		}
		exit(json_encode(array('resp'=>false, 'msg'=>'You can not change', 'theme'=>'jGrowl_Error')));
	}
}