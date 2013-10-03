<?php defined('BASEPATH') or exit('No direct script access allowed.');

class Campaigns extends Public_Controller
{
	public function construct()
	{
		parent::__construct();
	}

	public function index()
	{
		if (!$this->user) {
			redirect(base_url());
			exit;
		}
		$post = $this->input->post();
		$Video = new Videos_Model();
		if (!empty($post)) {
			if (!empty($post['id'])) {
				$Video->find($post['id'])->get();
				$dataCountry = $Video->country->get();
				$dataCategory = $Video->category->get();
				$dataDele = array('country'=>array(), 'category'=> array());
				// return array of country delete and add after update
				if (!empty($post['target_list'])) {
					foreach ($dataCountry as $key => $value) {
						if (in_array($value->id, $post['target_list'])) {
							unset($post['target_list'][array_search($value->id, $post['target_list'])]);
						} else {
							$dataDele['country'][] = $value->id;
						}
					}
				}
				// return array of Category delete and add after update
				if (!empty($post['categorys_list'])) {
					foreach ($dataCategory as $keyCate => $valueCate) {
						if (in_array($valueCate->id, $post['categorys_list'])) {
							unset($post['categorys_list'][array_search($valueCate->id, $post['categorys_list'])]);
						} else {
							$dataDele['category'][] = $valueCate->id;
						}
					}
				}
				// update Video
				$Video->title = $post['name'];
				$Video->caption = $post['body'];
				$Video->link_url = $post['url'];
				$Video->link_title = $post['url_caption'];
				$Video->ad_placements = $post['platform_list'];
				$Video->keywords = (isset($post['Keywords_list']) ? json_encode($post['Keywords_list']) : '');
				$Video->gender = isset($post['gender']) ? $post['gender'] : '';
				$Video->ages = isset($post['ages']) ? $post['ages'] : '';
				$Video->budget = $post['unformatted_budget'];
				$Video->budget_kind = $post['budget_kind'];
				$Video->max_bid = $post['unformatted_max_bid'];
				$Video->save();

				// delete category after update
				if (count($dataDele['category'])) {
					$Categoryvideo = new Categoryvideo_Model();
					$Categoryvideo->where('video_id', $post['id'])
								->where_in('category_id', $dataDele['category'])
								->get()
								->delete();
				}
				// insert category after update
				if (count($post['categorys_list'])) {
					foreach ($post['categorys_list'] as $keyCateAdd => $valueCateAdd) {
						$Categoryvideo = new Categoryvideo_Model();
						$Categoryvideo->video_id = $post['id'];
						$Categoryvideo->category_id = $valueCateAdd;
						$Categoryvideo->save();
					}
				}

				// delete country after update
				if (count($dataDele['country'])) {
					$Countryvideo = new Countryvideo_Model();
					$Countryvideo->where('video_id', $post['id'])
								->where_in('country_id', $dataDele['country'])
								->get()
								->delete();
				}
				// insert country after update
				if (count($post['target_list'])) {
					foreach ($post['target_list'] as $keyCounAdd => $valueCounAdd) {
						$Countryvideo = new Countryvideo_Model();
						$Countryvideo->video_id = $post['id'];
						$Countryvideo->country_id = $valueCounAdd;
						$Countryvideo->save();
					}
				}
			} else {
				$Uservideo = new Uservideo_Model();
				$Uservideo->user_id = $this->user->id;
				$Uservideo->created_at = strtotime(date("d-m-Y H:i:s"));


				$Video->videoid = $post['videoid'];
				$Video->images= $post['img'];
				$Video->title = $post['name'];
				$Video->caption = $post['body'];
				$Video->link_url = $post['url'];
				$Video->link_title = $post['url_caption'];
				$Video->ad_placements = $post['platform_list'];
				$Video->keywords = (isset($post['Keywords_list']) ? json_encode($post['Keywords_list']) : '');
				$Video->gender = isset($post['gender']) ? $post['gender'] : '';
				$Video->ages = isset($post['ages']) ? $post['ages'] : '';
				$Video->budget = $post['unformatted_budget'];
				$Video->budget_kind = $post['budget_kind'];
				$Video->max_bid = $post['unformatted_max_bid'];

				$Video->save();
				$Uservideo->video_id = $Video->id;
				$Uservideo->save();
				// add Category after add new a video
				if (!empty($post['categorys_list'])) {
					foreach ($post['categorys_list'] as $key => $value) {
						$Categoryvideo = new Categoryvideo_Model();
						$Categoryvideo->video_id = $Video->id;
						$Categoryvideo->category_id = $value;
						$Categoryvideo->save();
					}
				}
				// add Country after add new a video
				if (!empty($post['target_list'])) {
					foreach ($post['target_list'] as $key => $value) {
						$Countryvideo = new Countryvideo_Model();
						$Countryvideo->video_id = $Video->id;
						$Countryvideo->country_id = $value;
						$Countryvideo->save();
					}
				}

			}
		}
		$User = new User_Model();
		$User->where('id', $this->user->id)->get();
		$this->assets->add('bootstrap/bootstrap.min.css', '_theme_');
		$this->assets->add('bootstrap/bootstrap.min.js', '_theme_');
		$this->assets->add('makeapayment.css', '_theme_');
		$this->assets->add('makeapayment.js', '_theme_');
		$this->assets->add('campaigns.css', 'campaigns');
		$this->assets->add('campaigns.js', 'campaigns');
		$this->set('Video_Paused_Pending', $User->video->get());
		$this->build();
	}
	public function edit(){
		if (!$this->user) {
			redirect(base_url());
			exit;
		}
		$Countries = new Country_Model();
		$Categorys = new Categorys_Model();
		$id = $this->uri->segment(3);
		if (!empty($id)) {
			$Video = new Videos_Model();
			$Video->where('id', $id);
			$this->set('Videotpl', $Video->get());
			$this->set('Optiontpl', $Countries->get());
			$this->assets->add('forms/jquery.chosen.min.js', '_theme_');
			$this->assets->add('campaigns.edit.js', '_campaigns');
			$this->assets->add('plugins.css', '_theme_');
			$this->assets->add('campaigns.edit.css', 'campaigns');
			$this->set('Categorystpl', $Categorys->get());
			$this->build('campaigns/index');
		} else {
			redirect(base_url().'user');
		}
	}
	public function change(){
		if (!$this->user) {
			redirect(base_url());
			exit;
		}
		$post = $this->input->post();
		if (isset($post['item_id']) AND isset($post['item_val'])) {
			$Video = new Videos_Model();
			$Video->where('id', $post['item_id'])->get();
			if ($post['action']=='change-kind') {
				$Video->budget=$post['item_val'];
			} else if($post['action']=='change-state') {
				$Video->state = $post['item_val'];
			} else {
				$Video->max_bid=$post['item_val'];
			}
			$Video->save();
			exit(json_encode(array('resp'=>false, 'msg'=>$post['item_val'])));	
		}
		exit(json_encode(array('resp'=>false, 'msg'=>'exists not.')));
	}
}