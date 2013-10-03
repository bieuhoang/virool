<?php defined('BASEPATH') or exit('No direct script access allowed.');

class Page_Model extends DataMapper
{
	public $table = 'pages';

	public $has_one = array(
		'user' => array(
			'class' => 'User_Model'
		)
	);

	public function post_model_init()
	{
		ci()->assets->add('page.js', '_theme_');
	}

	public function created_at($format = 'Y-m-d h:i A')
	{
		return date($format, strtotime($this->created_at));
	}

	public function updated_at($format = 'Y-m-d h:i A')
	{
		return date($format, strtotime($this->updated_at));
	}

	public function get_page($name = '', $type = 'home')
	{
		$page = $this->where('type', $type)->limit(1)->get();
		if($page->result_count() == 0)
		{
			$page->type = $type;
			$page->name = '';
			$page->content = '';
			$page->save();
		}

		return $page;
	}

	public function stored($name, $content, $type = 'home')
	{
		$page = $this->where('type', $name)->limit(1)->get();

		if($page->result_count() == 0)
		{
			$page->type = $type;
			$page->name = $name;
		}
		
		$page->content = htmlspecialchars($content, ENT_QUOTES);
		$page->save();
	}

	public function content()
	{
		return htmlspecialchars_decode($this->content);
	}

	public function edit_link()
	{
		if(ci()->user and ci()->user->is_admin())
		{
			return '<a href="#" title="edit-page" class="edit-page" data-id="'.$this->id.'">Edit</a>';
		}
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