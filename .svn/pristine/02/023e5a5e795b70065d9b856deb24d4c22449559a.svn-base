<?php defined('BASEPATH') or exit('No direct script access allowed.');

class Ajax extends Ajax_Controller
{
	public function __construct()
	{
		parent::__construct();
	}

	public function index(){
		$post = $this->input->post();
		if ($post) {
			$Mysite = new Mysite_Model();
			$Mysite->where('id', $post['item_id'])->get();
			$Mysite->delete();
			exit(json_encode(array('resp'=>true)));
		}
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
		$mysite = new  Mysite_Model();
		//filter by keywords
		if( $query )
		{
			$mysite->like($qtype, $query);
		}
		$total = $mysite->get_clone(TRUE);
		$total = $total->count();

		$mysite->limit($limit, $offset)->order_by($sortname, $sortorder);
		$mysites = $mysite->get();
		
		$output = array('page' => $page, 'total' => $total, 'rows' => array());
		foreach($mysites as $mysite)
		{
			$output['rows'][] = array(
				'id' => $mysite->id,
				'cell' => array(
					'checkbox' => '<input type="checkbox" value="'.$mysite->id.'" id="ids['.$mysite->id.']" class="uniform inpCls-ckb" name="ids['.$mysite->id.']"/>',
					'title' => $mysite->title,
					'url' => $mysite->url,
					'user_id' => $mysite->user->get()->email,
					'created_at' => date("H:i d-m-Y " , $mysite->created_at),
					'actions' => $mysite->actions()
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
	public function update() {
		$post = $this->input->post();
		if (!empty($post)) {
			$Mysite = new Mysite_Model();
			if ( $post['id']!=0 ) {
				$Mysite->where('id', $post['id'])->get();
			} else {
				$Mysite->user_id = $post['selUser'];
				$Mysite->created_at = strtotime(date("Y-m-d H:i:s"));
			}
			$Mysite->title = $post['inputTitle'];
			$Mysite->keywords = $post['inputKeyword'];
			$Mysite->url = $post['inputUrl'];
			$Mysite->signature_template	= $post['inputSignatureTemplate'];
			$Mysite->callback_url = $post['inputCallbackUrl'];
			$Mysite->currency = $post['inputCurrency'];
			$Mysite->currency_conversion_rate = $post['inputCurrencyConversionRate'];
			$Mysite->description = $post['inputDescription'];
			$Mysite->encryption_method = $post['rdoEncryptionMethod'];
			$Mysite->categorys_id = (!empty($post['selCategorys']) ? json_encode($post['selCategorys']) : '');
			$Mysite->platforms = (!empty($post['selPlatforms']) ? json_encode($post['selPlatforms']) : '');
			$Mysite->countries = (!empty($post['selCountrys']) ? json_encode($post['selCountrys']) : '');
			$Mysite->save();
			exit(json_encode(array('resp'=>true, 'msg'=>(($post['id']!=0) ? 'Updated' : 'Added new').' site successfully.', 'theme'=>'jGrowl_Success')));
		}
		exit(json_encode(array('resp'=>false, 'msg'=>'You can not '.(($post['id']!=0) ? 'Updated' : 'Added new').' user.', 'theme'=>'jGrowl_Error')));
	}

	// admin delete mysite
	public function mysiteDelete(){
		if ($post = $this->input->post()) {
			$Mysite = new Mysite_Model();
			if (is_array($post['id'])) {
				foreach ($post['id'] as $key => $value) {
					if ($Mysite->where('id', $value)->get()->result_count()) {
						$Mysite->delete();
					}
				}
			} else {
				if ($Mysite->where('id', $post['id'])->get()->result_count()) {
					$Mysite->delete();
				}
			}
			exit(json_encode(array('status'=>true, 'msg'=>'Delete site successfully.', 'theme'=>'jGrowl_Success')));
		}
	}
	// slide show img
	public function slideshow() {
		$Siteimg = new Siteimg_Model();
		$post = $this->input->post();
		if (!empty($post['item_id']) and $Siteimg->where('site_id', $post['item_id'])->get()->result_count()) {
			$paraData = array();
			foreach ($Siteimg as $key => $value) {
				$paraData[] = array('item_id'=>$value->id, 'fullurl' => $value->urlfull);
			}
			exit(json_encode(array('status'=> true, 'data' => $paraData)));
		}
		exit(json_encode(array('status'=>false)));
	}
}