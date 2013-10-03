<?php defined('BASEPATH') or exit('No direct script access allowed.');

class Videos_Model extends DataMapper
{
	public $table = 'videos';
	
	public $has_many = array(
		'user' => array(
            'class' => 'User_Model',
            'other_field' => 'video',
            'join_self_as' => 'video',
            'join_other_as' => 'user',
            'join_table' => 'user_video'
        ),
		'category' => array(
			'class' => 'Categorys_Model',
			'other_field' => 'video',
            'join_self_as' => 'video',
            'join_other_as' => 'category',
            'join_table' => 'category_video'
		),
		'country' => array(
			'class' => 'Country_Model',
			'other_field' => 'video',
			'join_self_as' => 'video',
			'join_other_as' => 'country',
			'join_table' => 'country_video'
		),
		'videocategory' => array(
			'class' => 'Categoryvideo_Model',
			'other_field' => 'video',
			'join_other_as' => 'video'
		),
		'videocountry' => array(
			'class' => 'Countryvideo_Model',
			'other_field' => 'video',
			'join_other_as' => 'video'
		),
		'uservideo' => array(
			'class' => 'Uservideo_Model',
			'other_field' => 'video',
			'join_other_as' => 'video'
		)
	);
	public function actions() {
		$actions = '';
		if($user = ci()->user and $user and $user->is_admin() and $this->id != 1)
		{
			$actions .=
						'<a data-id="'.$this->id.'" class="action-admin edit-item" href="'.base_url().'admin/'.($this->type=='Video' ? 'promotevideo' : 'promotedocument').'/edit/'.$this->id.'" title="Edit">'.
							'<span class="ico-edit"></span>'.
						'</a>'.
						'<a data-id="'.$this->id.'" class="action-admin delete-item" href="javascript:;" title="Delete">'.
							'<span class="ico-trash"></span>'.
						'</a>';
		}

		return $actions;
	}
}