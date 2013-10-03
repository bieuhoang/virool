<?php defined('BASEPATH') or exit('No direct script access allowed.');

class Ajax extends Ajax_Controller
{
	public function __construct()
	{
		parent::__construct();
	}

	public function admin_index()
	{
		$page = $this->input->post('page') ? $this->input->post('page') : 1;
        $limit = $this->input->post('rp') ? $this->input->post('rp') : 20;
        $sortname = $this->input->post('sortname') ? $this->input->post('sortname') : 'name';
        $sortorder = $this->input->post('sortorder') ? $this->input->post('sortorder') : 'desc';
        $query = $this->input->post('query') != '' ? $this->input->post('query') : false;
        $qtype = $this->input->post('qtype') ? $this->input->post('qtype') : false;
        $offset = (($page-1) * $limit);

        $pages = new Page_Model();

        if($query)
        {
        	$pages->like($qtype, $query);
        }

        $total = $pages->get_clone(TRUE);
        $total = $total->count();

        $pages->limit($limit, $offset)
        	->include_related('user')
        	->order_by($sortname, $sortorder);
		
		$output = array('page' => $page, 'total' => $total, 'rows' => array());

		foreach($pages->get() as $page)
		{
			$output['rows'][] = array(
				'id' => $page->id,
				'cell' => array(
					'checkbox' => '<input type="checkbox" value="'.$page->id.'" id="ids['.$page->id.']" class="uniform" name="ids['.$page->id.']"/>',
					'name' => word_limiter($page->name, 7),
					'author' => $page->user->fullname(),
					'created_at' => $page->created_at(),
					'content' => word_limiter($page->content, 10),
					'actions' => $page->actions()
				)
			);
		}
		
		exit(json($output));
	}

	public function edit()
	{
		if(! $this->user->can('edit'))
		{
			exit(json(array('status' => false, 'msg' => $this->lang->line('permission_can_not_edit'))));
		}

		$id = $this->input->post('id', TRUE);
		$page = new Page_Model();

		if($abum->find($id)->result_count() == 0)
		{
			exit(json(array('status' => false, 'msg' => 'Page is not exists. Please check again.')));
		}

		$page->name = $this->input->post('name', TRUE);
		$page->description = $this->input->post('description', TRUE);

		if($page->save())
		{
			exit(json(array('status' => true, 'msg' => ($id?'Updated':'Added').' page successfully')));
		}

		exit(json(array('status' => false, 'msg' => 'You can not '.($id?'update':'add').' page at the moment. Please try again later.')));
	}

	public function delete()
	{
		if(! $this->user->can('delete'))
		{
			exit(json(array('status' => false, 'msg' => $this->lang->line('permission_can_not_delete'))));
		}

		$id = $this->input->post('id');
		$page = new Page_Model();

		if($id)
		{
			$page->find($id);

			$success = false;
			if(is_array($id))
			{
				$success = $page->delete_all();
			}
			else
			{
				$success = $page->delete();
			}

			if($success)
			{
				exit(json(array('status' => true, 'msg' => 'Deleted page(s) successfully')));
			}
		}
		
		exit(json(array('status' => false, 'msg' => 'You can not delete page(s) at the moment. Please try again later.')));
	}
}