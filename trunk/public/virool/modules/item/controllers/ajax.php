<?php defined('BASEPATH') or exit('No direct script access allowed.');

class Ajax extends Ajax_Controller
{
	public function __construct()
	{
		parent::__construct();
	}

	public function admin_status_index()
	{
		$page = $this->input->post('page') ? $this->input->post('page') : 1;
        $limit = $this->input->post('rp') ? $this->input->post('rp') : 20;
        $sortname = $this->input->post('sortname') ? $this->input->post('sortname') : 'name';
        $sortorder = $this->input->post('sortorder') ? $this->input->post('sortorder') : 'desc';
        $query = $this->input->post('query') != '' ? $this->input->post('query') : false;
        $qtype = $this->input->post('qtype') ? $this->input->post('qtype') : false;
        $offset = (($page-1) * $limit);

        $statuss = new Item_Status_Model();

        if($query)
        {
        	$statuss->like($qtype, $query);
        }

        $total = $statuss->get_clone(TRUE);
        $total = $total->count();

        $statuss->limit($limit, $offset)
        	->order_by($sortname, $sortorder);
		
		$output = array('page' => $page, 'total' => $total, 'rows' => array());

		foreach($statuss->get() as $status)
		{
			$output['rows'][] = array(
				'id' => $status->id,
				'cell' => array(
					'checkbox' => '<input type="checkbox" value="'.$status->id.'" id="ids['.$status->id.']" class="uniform" name="ids['.$status->id.']"/>',
					'name' => word_limiter($status->name, 7),
					'color' => $status->color(),
					'sort' => $status->sort,
					'actions' => $status->actions()
				)
			);
		}
		
		exit(json($output));
	}

	public function edit_status()
	{
		// check if user logged out
		$this->_check_user_logged_out();

		// check if user can edit
		$this->_check_user_can('edit');

		$id = $this->input->post('id', TRUE);
		$status = new Item_Status_Model();
		$status->find($id);

		// if not exists?
		if($status->result_count() == 0)
		{
			exit(json(array('status' => false, 'msg' => 'Status is not exists')));
		}

		$status->name = $this->input->post('name', TRUE);
		$status->value = $this->input->post('value', TRUE);
		$status->sort = $this->input->post('sort', TRUE);

		// edit success?
		if($status->save())
		{
			exit(json(array('status' => true, 'msg' => ($id?'Updated':'Added').' status successfully')));
		}

		exit(json(array('status' => false, 'msg' => 'You can not '.($id?'update':'add').' status at the moment. Please try again later.')));
	}

	public function delete_status()
	{
		// check if user logged out
		$this->_check_user_logged_out();

		// check if user can delete
		$this->_check_user_can('delete');

		$id = $this->input->post('id');
		$status = new Item_Status_Model();
		$status->find($id);

		// check if not exists
		if($status->result_count() == 0)
		{
			exit(json(array('status' => false, 'msg' => 'Status is not exists or deleted')));
		}

		// delete
		$success = is_array($id) ? $status->delete_all() : $status->delete();

		// if success?
		if($success)
		{
			exit(json(array('status' => true, 'msg' => 'Deleted status(s) successfully')));
		}
		
		exit(json(array('status' => false, 'msg' => 'You can not delete status(s) at the moment. Please try again later.')));
	}

	public function change_status_status()
	{
		// check if user logged out
		$this->_check_user_logged_out();

		// check if user can edit
		$this->_check_user_can('edit');

		$id = $this->input->post('id');
		$status = new Item_Status_Model();

		// if not exists?
		if(! $status->find($id))
		{
			exit(json(array('status' => false, 'msg' => 'Status is not exists or deleted')));
		}

		$status->active = $status->active ? 0 : 1;
		// change status success?
		if($status->save())
		{
			exit(json(array('status' => true, 'msg' => 'Changed status successfully')));
		}

		exit(json(array('status' => false, 'msg' => 'You can not change status at the moment. Please try again later.')));
	}

}