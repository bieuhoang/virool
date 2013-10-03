<?php defined('BASEPATH') or exit('No direct script access allowed.');

class Mysite_Model extends DataMapper
{
	public $table = 'mysites';
	
	public $has_one = array(
		'user' => array(
			'class' => 'User_Model',
			'other_field' => 'sites',
			'join_self_as' => 'user'
		)
	);
	public $has_many = array(
		'siteimg' => array(
			'class' => 'Siteimg_Model',
			'other_field' => 'site',
			'join_other_as' => 'site'
		)
	);
	public function actions()
	{
		$actions = 
					'<a data-id="'.$this->id.'" class="update action-admin" href="'.base_url().'admin/mysites/edit/'.$this->id.'" title="Edit">'.
						'<span class="ico-edit"></span>'.
					'</a>'.
					'<a data-id="'.$this->id.'" class="delete tip action-admin" href="javascript:;" title="Delete">'.
						'<span class="ico-trash"></span>'.
					'</a>'.
					'<a href="javascript:;" data-id="'.$this->id.'" title="View Images" class="action-admin slide-show-img">'.
						'<span class="ico-picture"></span>'.
					'</a>';
		
		return $actions;
	}
}