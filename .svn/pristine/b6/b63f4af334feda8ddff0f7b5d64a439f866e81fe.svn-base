<?php defined('BASEPATH') or exit('No direct script access allowed.');

class Group_Model extends DataMapper
{
	public $table = 'groups';

	public $has_many = array(
		'user' => array(
			'class' => 'User_Model',
			'other_field' => 'group',
			'join_other_as' => 'group'
		)
	);

	public function actions()
	{
		$actions = '';
		if($this->id != 1 and ci()->user and ci()->user->is_admin())
		{
			$actions .='<a data-id="'.$this->id.'" class="action-admin edit-item" href="'.base_url().'admin/group/edit/'.$this->id.'" title="Edit">'.
							'<span class="ico-edit"></span>'.
						'</a>'.
						'<a data-id="'.$this->id.'" class="action-admin delete-item" href="javascript:;" title="Delete">'.
							'<span class="ico-trash"></span>'.
						'</a>';
		}

		return $actions;
	}

	public function permission_status($action = 'view')
	{
		if($this->id == 1)
		{
			return '<span class="led-icon led-icon-accept"></span>';
		}
		$action = 'can_'.$action;
		return '<a href="javascript:;" data-action="'.$action.'" title="'.($this->{$action}?'Actived':'Deactived').'" class="change-status" data-id="'.$this->id.'">'.
					'<span class="led-icon led-icon-'.($this->{$action}?'accept':'cross').'"></span>'.
				'</a>';
	}
}