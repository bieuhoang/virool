<?php defined('BASEPATH') or exit('No direct script access allowed.');

class Ajax extends Ajax_Controller
{

	public function admin_list()
	{
		$page = $this->input->post('page') ? $this->input->post('page') : 1;
		$limit = $this->input->post('rp') ? $this->input->post('rp') : 20;
		$sortname = $this->input->post('sortname') ? $this->input->post('sortname') : 'name';
		$sortorder = $this->input->post('sortorder') ? $this->input->post('sortorder') : 'desc';
		$query = $this->input->post('query') != '' ? $this->input->post('query') : false;
		$qtype = $this->input->post('qtype') ? $this->input->post('qtype') : false;
		$offset = (($page-1) * $limit);

		$sql_count = "SELECT COUNT(`a`.`id`) AS `total` FROM `videos` AS `a`
				INNER JOIN `user_video` AS `b` ON `b`.`video_id` = `a`.`id`
				INNER JOIN `users` AS `c` ON `c`.`id` = `b`.`user_id`
				INNER JOIN `groups` AS `d` ON `d`.`id` = `c`.`group_id`";
		$sql = "SELECT `a`.*, `b`.*, CONCAT(`c`.`first_name`, ' ', `c`.`last_name`) AS `fullname`, `d`.`name` AS `group_name` FROM `videos` AS `a`
				INNER JOIN `user_video` AS `b` ON `b`.`video_id` = `a`.`id`
				INNER JOIN `users` AS `c` ON `c`.`id` = `b`.`user_id`
				INNER JOIN `groups` AS `d` ON `d`.`id` = `c`.`group_id`";

		$wheres = array();
		$limit = " LIMIT $offset, $limit";
		$order_by = " ORDER BY `a`.`$sortname` $sortorder";
		$group_by = " GROUP BY `b`.`user_id`";


		// $args = array();
		// $Video = new  Videos_Model();
		//filter by keywords
		if( $query )
		{
			if($qtype == 'name')
			{
				// $Video->like('first_name', $query)->or_like('last_name', $query);
			}
			else
			{
				if ( $qtype == 'email' )
				{
					//$Video->where_related_user('email', $query);
					$wheres[] = "`c`.`email` LIKE '%{$query}%'";
				}
				else if ( $qtype == 'group' )
				{
					// $Video->where_related('user/group', 'name', $query);
					$wheres[] = "`d`.`name` LIKE '%{$query}%'";
				}
				else
				{
					// $Video->like($qtype, $query);
					$wheres[] = "`a`.`{$qtype}` LIKE '%{$query}%'";
				}
			}
		}

		if($this->input->post('status') != '') {
			$status = $this->input->post('status');
			switch($status) {
				case 'Complete':
					// $Video->where_related_uservideo('sate', 'Run')
					// 	->where_related_uservideo('lock', '');
					$wheres[] = "`b`.`sate` = 'Run' AND `b`.`lock` = ''";
					break;
				case 'Stop':
					// $Video->where_related_uservideo('lock', 'Lock');
					$wheres[] = "`b`.`lock` = 'Lock'";
					break;
				case 'Run':
					// $Video->where_related_uservideo('sate', 'Run')
					// 	->where_related_uservideo('lock', '');
					$wheres[] = "`b`.`sate` = 'Run' AND `b`.`lock` = ''";
					break;
				case 'Pending':
					// $Video->where_related_uservideo('sate', 'Pending')
					// 	->where_related_uservideo('lock', '');
					$wheres[] = "`b`.`sate` = 'Pending' AND `b`.`lock` = ''";
					break;
			}
		}

		if($this->input->post('type') != '') {
			$wheres[] = "`b`.`user_id` = '".$this->input->post('type')."'";
		}

		// $Video->group_by('user_id');
		$wheres[] = "`a`.`type` = 'Document'";

		// $Video->like('type', 'Document');
		// $total = $Video->get_clone(TRUE);
		// $total = $total->count();

		// $Video->limit($limit, $offset)->order_by($sortname, $sortorder);
		// $items = $Video->get();
		$sql_count .= " WHERE " . implode(' AND ', $wheres) . $group_by;
		$sql .= " WHERE " . implode(' AND ', $wheres) . $group_by . $order_by . $limit;
		$total = $this->db->query($sql_count)->row(0);
		$items = $this->db->query($sql)->result();

		$output = array('page' => $page, 'total' => $total, 'rows' => array());
		foreach($items as $item)
		{
			$actions = '';
			if($user = ci()->user and $user and $user->is_admin())
			{
				$actions .=
							'<a data-id="'.$item->video_id.'" class="action-admin edit-item" href="'.base_url().'admin/'.($item->type=='item' ? 'promotevideo' : 'promotedocument').'/edit/'.$item->video_id.'" title="Edit">'.
								'<span class="ico-edit"></span>'.
							'</a>'.
							'<a data-id="'.$item->video_id.'" class="action-admin delete-item" href="javascript:;" title="Delete">'.
								'<span class="ico-trash"></span>'.
							'</a>';
			}
			$img = '<img src="http://image.issuu.com/'.$item->videoid.'/jpg/page_1_thumb_large.jpg" class="imgCls-admin" title="" alt="" />';
			$output['rows'][] = array(
				'id' => $item->id,
				'cell' => array(
					'checkbox' => '<input type="checkbox" value="'.$item->video_id.'" id="ids['.$item->video_id.']" class="uniform" name="ids['.$item->video_id.']"/>',
					'image' => $img,
					'group_id' => $item->group_name,//$item->user->get()->group->get()->name,
					'title' => $item->title,
					'view' => $item->views,
					'caption' => substr($item->caption, 0, 60).'...',
					'user_name' => $item->fullname,//$item->user->get()->email,
					'actions' => $actions//$item->actions()
				)
			);
		}

		exit(json($output));
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