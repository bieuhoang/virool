<?php defined('BASEPATH') or exit('No direct script access allowed.');

class Item_Model extends DataMapper
{
	public $table = 'items';
	public $primary_key = 'id';

	public function before_save()
	{
		$this->created_at = date('Y-m-d H:i:s', time());
		$this->user_id = ci()->user->id;
	}

	public function before_update()
	{
		$this->updated_at = date('Y-m-d H:i:s', time());
	}

	public function actions()
	{
		$actions = '';
		if(ci()->user)
		{
			if(ci()->user->can('edit'))
			{
				$actions .= '<a href="javascript:;" class="change-status-item" title="Change status" data-id="'.$this->id.'">'.
								'<span class="led-icon led-icon-'.($this->active?'accept':'cross').'"></span>'.
							'</a>';
				$actions .= '<a href="javascript:;" class="edit-item" title="Edit" data-id="'.$this->id.'">'.
								'<span class="led-icon led-icon-pencil"></span>'.
							'</a>';
			}

			if(ci()->user->can('delete'))
			{
				$actions .= '<a href="javascript:;" class="delete-item" title="Delete" data-title="'.$this->name.'" data-id="'.$this->id.'">'.
								'<span class="led-icon led-icon-delete"></span>'.
							'</a>';
			}
		}

		return $actions;
	}
}