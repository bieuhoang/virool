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

        $groups = new Group_Model();

        if($query)
        {
        	$groups->like($qtype, $query);
        }

        $total = $groups->get_clone(TRUE);
        $total = $total->count();

        $groups->limit($limit, $offset)
        	->order_by($sortname, $sortorder);
		
		$output = array('page' => $page, 'total' => $total, 'rows' => array());

		foreach($groups->get() as $group)
		{
			$output['rows'][] = array(
				'id' => $group->id,
				'cell' => array(
					'checkbox' => '<input type="checkbox" value="'.$group->id.'" id="ids['.$group->id.']" class="uniform" name="ids['.$group->id.']"/>',
					'name' => word_limiter($group->name, 7),
					'description' => word_limiter($group->description, 10),
					'can_view' => $group->permission_status('view'),
					'can_add' => $group->permission_status('add'),
					'can_edit' => $group->permission_status('edit'),
					'can_delete' => $group->permission_status('delete'),
					'actions' => $group->actions()
				)
			);
		}
		
		exit(json($output));
	}

	public function edit()
	{
		if(! $this->user->can('edit'))
		{
			exit(json(array('status' => false, 'uri' => 'admin/group', 'msg' => $this->lang->line('permission_can_not_edit'))));
		}

		$id = $this->input->post('id', TRUE);
		$group = new Group_Model();

		if($id and $group->find($id)->result_count() == 0)
		{
			exit(json(array('status' => false, 'uri' => 'admin/group', 'msg' => 'Group is not exists. Please check again.')));
		}

		$group->name = $this->input->post('groupName', TRUE);
		$group->description = $this->input->post('groupDescription', TRUE);
		$group->can_view = $this->input->post('can_view') ? 1 : 0;
		$group->can_edit = $this->input->post('can_edit') ? 1 : 0;
		$group->can_delete = $this->input->post('can_delete') ? 1 : 0;
		$group->can_add = $this->input->post('can_add') ? 1 : 0;

		if($group->save())
		{
			exit(json(array('status' => true, 'msg' => ($id?'Updated':'Added').' group successfully')));
		}

		exit(json(array('status' => false, 'uri' => 'admin/group', 'msg' => 'You can not '.($id?'update':'add').' group at the moment. Please try again later.')));
	}

	public function delete()
	{
		if(! $this->user->can('delete'))
		{
			exit(json(array('status' => false, 'msg' => $this->lang->line('permission_can_not_delete'))));
		}

		$id = $this->input->post('id');
		$group = new Group_Model();

		if($id)
		{
			if($id == 1)
			{
				exit(json(array('status' => false, 'You can not delete this group')));
			}

			$group->find($id);

			$success = false;
			if(is_array($id))
			{
				$success = $group->delete_all();
			}
			else
			{
				$success = $group->delete();
			}

			if($success)
			{
				exit(json(array('status' => true, 'msg' => 'Deleted group(s) successfully')));
			}
		}
		
		exit(json(array('status' => false, 'msg' => 'You can not delete group(s) at the moment. Please try again later.')));
	}

	public function change_status()
	{
		$id = $this->input->post('id');
		$action = $this->input->post('action');

		if(! in_array($action, array('can_view', 'can_edit', 'can_add', 'can_delete')))
		{
			exit(json(array('status' => false, 'msg' => 'No permission exists.')));
		}

		$group = new Group_Model();
		$success = false;
		if($group->find($id))
		{
			$group->{$action} = $group->{$action} ? 0 : 1;
			$success = $group->save();
		}

		if($success)
		{
			exit(json(array('status' => true, 'msg' => 'Change permission successfully')));
		}

		exit(json(array('status' => false, 'msg' => 'You can not change permission at the moment. Please try again later.')));
	}
}