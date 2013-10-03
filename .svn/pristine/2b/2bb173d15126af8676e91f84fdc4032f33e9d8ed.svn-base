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
		$Video = new  Videos_Model();
		//filter by keywords
		if( $query )
		{
			if($qtype == 'name')
			{
				$Video->like('first_name', $query)->or_like('last_name', $query);
			}
			else
			{
				if ( $qtype == 'email' )
				{
					$Video->where_related_user('email', $query);
				}
				else if ( $qtype == 'group_id' )
				{
					$Video->where_related('user/group', 'id', $query);
				}
				else
				{
					$Video->like($qtype, $query);
				}
			}
		}
		$Video->like('type', 'Video');
		
		$total = $Video->get_clone(TRUE);
		$total = $total->count();

		$Video->limit($limit, $offset)->order_by($sortname, $sortorder);
		$Videos = $Video->get();
		
		$output = array('page' => $page, 'total' => $total, 'rows' => array());
		foreach($Videos as $Video)
		{
			$img = '';
			if (!empty($Video->images)) {
				$img = explode(':::', $Video->images);
				$img = '<img src="'.$img[0].'" class="imgCls-admin" title="" alt="" />';
			}
			$output['rows'][] = array(
				'id' => $Video->id,
				'cell' => array(
					'checkbox' => '<input type="checkbox" value="'.$Video->id.'" id="ids['.$Video->id.']" class="uniform" name="ids['.$Video->id.']"/>',
					'image' => $img,
					'group_id' => $Video->user->get()->group->get()->name,
					'title' => $Video->title,
					'view' => $Video->views,
					'user_id' => $Video->user->get()->email,
					'actions' => $Video->actions()
				)
			);
		}
		
		exit(json($output));
	}

	public function publicsheradd(){
		$post = $_POST;
		$Video = new Uservideo_Model();
		$Video->where('video_id', $post['item_id'])
			->where('type', 'Publisher')
			->where('publicshe_id = '.$this->user->id)
			->get();
		// kiem tra video da dc user nhan quang cao chua
		if (!$Video->result_count())
		{
			$Video = new Uservideo_Model();
			$VideoAdvertiser = $Video->where('video_id', $post['item_id'])
			->where('type', 'Advertiser')->get();

			// Users
			$Users = $VideoAdvertiser->user->get();
			// Videos
			$Videos = $VideoAdvertiser->video->get();

			// Số tiền của user adversite bỏ ra cho mỗi views
			$amount_click = $Users->percentage * $Videos->max_bid / 100;

			
			
			// kiem tra video nay dc thue quang cao
			if ( $VideoAdvertiser->result_count() )
			{
				$Video = new Uservideo_Model();
				$Video->user_id = $VideoAdvertiser->user_id;
				$Video->video_id = $VideoAdvertiser->video_id;
				$Video->publicshe_id = $this->user->id;
				$Video->percent = 30;
				$Video->created_at = strtotime(date('Y-m-d h:i:s'));
				$Video->type = 'Publisher';
				$Video->action = 'Question';
				$Video->sate = 'Pending';
				// Kiểm tra User advertiser có tiền thì approve
				if ( $Users->totalamount > $amount_click )
				{
					$Video->action = 'Action';
					$Video->sate = 'Run';
					// Video type + id user advertiser + id user publicsh + video id
					$Video->tokenapi = md5(md5('VIR::'.$Videos->type)).'-'.md5(md5($VideoAdvertiser->user_id.'::VIR::'.$this->user->id.'::VIR::'.$VideoAdvertiser->video_id));
				}
				
				$Video->save();

				exit(json_encode(array('resp'=>true)));
			}				
		}
		exit(json_encode(array('resp'=>false, 'msg'=>'Video này đã được quảng cáo.', 'theme'=>'jGrowl_Error')));
	}

	/**
	*
	*	@param : array
	*	Phuong thuc edit document
	*	@return : json
	*
	**/
	public function saveEdit(){
		$post = $this->input->post();
		$output = array('status' => false, 'msg' => 'You can not update Document.', 'theme'=>'jGrowl_error');
		if ( count($post) )
		{
			$Video = new Videos_Model();
			$Videos = $Video->where('id', $post['id'])->get();
			if ( $Videos->result_count() ) {
				$dataCountry = $Video->country->get();
				$dataCategory = $Video->category->get();				
				$dataDele = array('country'=>array(), 'category'=> array());
				// return array of country delete and add after update
				if (!empty($post['selCountries'])) {
					foreach ($dataCountry as $key => $value) {
						if (in_array($value->id, $post['selCountries'])) {
							unset($post['selCountries'][array_search($value->id, $post['selCountries'])]);
						} else {
							$dataDele['country'][] = $value->id;
						}
					}
				}
				// return array of Category delete and add after update
				if (!empty($post['selCategory'])) {
					foreach ($dataCategory as $keyCate => $valueCate) {
						if (in_array($valueCate->id, $post['selCategory'])) {
							unset($post['selCategory'][array_search($valueCate->id, $post['selCategory'])]);
						} else {
							$dataDele['category'][] = $valueCate->id;
						}
					}
				}
				// echo '<pre>'.$post['id'];print_r($dataDele);exit;
				// update Document
				$Video->caption 			= isset($post['textaDescription']) ? $post['textaDescription'] : '';
				$Video->title 				= isset($post['txtTitle']) ? $post['txtTitle'] : '';
				$Video->keywords 			= (!empty($post['selIdkeyword']) ? json_encode($post['selIdkeyword']) : '' );
				$Video->link_url 			= isset($post['txtlinkurl']) ? $post['txtlinkurl'] : '';
				$Video->link_title 			= isset($post['txtLinkTitle']) ? $post['txtLinkTitle'] : '';
				$Video->ad_placements 		= isset($post['selAdPlacement']) ? implode(',', $post['selAdPlacement']) : '';
				$Video->gender 				= isset($post['gender']) ? $post['gender'] : '';
				$Video->budget 				= isset($post['unformatted_budget']) ? $post['unformatted_budget'] : '';
				$Video->budget_kind 		= isset($post['budget_kind']) ? $post['budget_kind'] : '';
				$Video->max_bid 			= isset($post['unformatted_max_bid']) ? $post['unformatted_max_bid'] : '';
				$Video->ages 				= isset($post['ckb_ages']) ? $post['ckb_ages'] : 0;
				$Video->type 				= 'Document';
				$Video->save();

				// delete category after update
				if (count($dataDele['category'])) {
					foreach ($Video->videocategory->where_in('category_id', $dataDele['category'])->get() as $keyDeleCate => $valueDeleCate) {
						$valueDeleCate->delete();
					}
				}
				// insert category after update
				if (count($post['selCategory'])) {
					foreach ($post['selCategory'] as $keyCateAdd => $valueCateAdd) {
						$Categoryvideo = new Categoryvideo_Model();
						$Categoryvideo->video_id = $post['id'];
						$Categoryvideo->category_id = $valueCateAdd;
						$Categoryvideo->save();
					}
				}

				// delete country after update
				if (count($dataDele['country'])) {
					foreach ($Video->videocountry->where_in('country_id', $dataDele['country'])->get() as $keyDeleCoun => $valueDeleCoun) {
						$valueDeleCoun->delete();
					}
				}
				// insert country after update
				if (count($post['selCountries'])) {
					foreach ($post['selCountries'] as $keyCounAdd => $valueCounAdd) {
						$Countryvideo = new Countryvideo_Model();
						$Countryvideo->video_id = $post['id'];
						$Countryvideo->country_id = $valueCounAdd;
						$Countryvideo->save();
					}
				}
				
				$output = array('status'=>true, 'msg'=>'Update successfully.', 'theme'=>'jGrowl_Success');
			}
		}
		exit(json_encode($output));
	}
}