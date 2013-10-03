<?php defined('BASEPATH') or exit('No direct script access allowed.');

class Promotedocument extends Public_Controller
{
	public function construct()
	{
		parent::__construct();
	}
	
	public function index()
	{
		/* -- kiem tra xem user login -- */
		if (!$this->user OR ($this->user->group_id!=3 AND $this->user->group_id!=1)) {
			redirect(base_url());
		}

		if ($post = $this->input->post()) {
			
			$Video = new Videos_Model();
			$User = new User_Model();
			$User->where('id', $this->user->id)->get();
			if (!empty($post['id'])){
				$Videos = $Video->where('type', 'Document')->where('id', $post['id'])->get();
				if (!$Videos->user->where('id', $this->user->id)->count()) {
					exit(json(array('status' => false, 'msg' => 'You can not update Document.')));
				}

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
				$Video->ad_placements 		= isset($post['platform_list']) ? $post['platform_list'] : '';
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

			} else {
				if($User->video->where('videoid', $post['ipDocsId'])->where('type','Document')->count()){
					exit(json(array('status' => false, 'msg' => 'Document is exists already.')));
				}
				$Video->videoid 			= isset($post['ipDocsId']) ? $post['ipDocsId'] : '';
				$Video->caption 			= isset($post['textaDescription']) ? $post['textaDescription'] : '';
				$Video->title 				= isset($post['txtTitle']) ? $post['txtTitle'] : '';
				$Video->keywords 			= (!empty($post['selIdkeyword']) ? json_encode($post['selIdkeyword']) : '' );
				$Video->link_url 			= isset($post['txtlinkurl']) ? $post['txtlinkurl'] : '';
				$Video->link_title 			= isset($post['txtLinkTitle']) ? $post['txtLinkTitle'] : '';
				$Video->ad_placements 		= isset($post['platform_list']) ? $post['platform_list'] : '';
				$Video->gender 				= isset($post['gender']) ? $post['gender'] : '';
				$Video->budget 				= isset($post['unformatted_budget']) ? $post['unformatted_budget'] : '';
				$Video->budget_kind 		= isset($post['budget_kind']) ? $post['budget_kind'] : '';
				$Video->max_bid 			= isset($post['unformatted_max_bid']) ? $post['unformatted_max_bid'] : '';
				$Video->ages 				= isset($post['ckb_ages']) ? $post['ckb_ages'] : 0;
				$Video->type 				= 'Document';
				$Video->save();

				//add new Uservideo
				$Uservideo = new Uservideo_Model();
				$Uservideo->user_id = $this->user->id;
				$Uservideo->created_at = strtotime(date("d-m-Y H:i:s"));
				$Uservideo->video_id = $Video->id;
				$Uservideo->save();

				// add Category after add new a video
				if (!empty($post['selCategory'])) {
					foreach ($post['selCategory'] as $key => $value) {
						$Categoryvideo = new Categoryvideo_Model();
						$Categoryvideo->video_id = $Video->id;
						$Categoryvideo->category_id = $value;
						$Categoryvideo->save();
					}
				}
				// add Country after add new a video
				if (!empty($post['selCountries'])) {
					foreach ($post['selCountries'] as $key => $value) {
						$Countryvideo = new Countryvideo_Model();
						$Countryvideo->video_id = $Video->id;
						$Countryvideo->country_id = $value;
						$Countryvideo->save();
					}
				}
			}
			exit(json_encode(array('status'=>true, 'msg'=>'user')));
		}

		$this->assets->add('promotedocument.css', 'promotedocument');
		$this->assets->add('promotedocument.js', 'promotedocument');
		$this->build();
	}

	public function view(){
		if (!$this->user OR ($this->user->group_id!=3 AND $this->user->group_id!=1)) {
			redirect(base_url());
		}
		$Countries = new Country_Model();
		$Categorys = new Categorys_Model();
		$Countriestpl = $Categorystpl = array();
		foreach ($Countries->get() as $key => $value) {
			$Countriestpl[] = array('id'=>$value->id, 'title'=>$value->name);
		}
		foreach ($Categorys->get() as $keyCate => $valueCate) {
			$Categorystpl[] = array('id'=>$valueCate->id, 'title'=>$valueCate->name);
		}
		$this->set('Categorystpl', json_encode($Categorystpl));
		$this->set('Countrietpl', json_encode($Countriestpl));
		$this->assets->add('plugins.css', '_theme_');
		$this->assets->add('forms/jquery.chosen.min.js', '_theme_');
		$this->assets->add('swfobject.js', 'promotedocument');
		$this->assets->add('module.promotedocument.views.css', 'promotedocument');
		$this->assets->add('module.promotedocument.views.js', 'promotedocument');
		$this->build();
	}

	public function edit(){
		if (!$this->user OR ($this->user->group_id!=3 AND $this->user->group_id!=1)) {
			redirect(base_url());
		}
		$this->assets->add('plugins.css', '_theme_');
		$this->assets->add('forms/jquery.chosen.min.js', '_theme_');
		$this->assets->add('swfobject.js', 'promotedocument');
		$this->assets->add('module.promotedocument.edit.js', 'promotedocument');
		$this->assets->add('module.promotedocument.edit.css', 'promotedocument');
		if ($this->user AND ($this->user->group_id==1 OR $this->user->group_id==3 )) {
			$id = $this->uri->segment(3);
			$Countries = new Country_Model();
			$Categorys = new Categorys_Model();
			$Video = new Videos_Model();
			if (!empty($id)) {
				$Video->where('type', 'Document')->where('id', $id)->get();
				$this->set('Documenttpl', $Video);
				$this->set('Countrietpl', $Countries->get());
				$this->set('Categorystpl', $Categorys->get());
				if (!$Video->user->where('id', $this->user->id)->count()) {
					redirect(base_url());
				}
				$this->build();
			} else {
				redirect(base_url());
			}
		} else {
			redirect(base_url());
		}
	}
}