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

        $args = array();
        $item = new  Product_Model();
		//filter by keywords
		if( $query )
		{
			$item->like($qtype, $query);
		}
		$total = $item->get_clone(TRUE);
		$total = $total->count();

		$item->limit($limit, $offset)->order_by($sortname, $sortorder);
		$items = $item->get();
		
		$output = array('page' => $page, 'total' => $total, 'rows' => array());
		foreach($items as $item)
		{
			$output['rows'][] = array(
				'id' => $item->id,
				'cell' => array(
					'checkbox' => '<input type="checkbox" value="'.$item->id.'" id="ids['.$item->id.']" class="uniform" name="ids['.$item->id.']"/>',
					'fullname' => $item->fullname(),
					'telephone' => $item->telephone,
					'dni' => $item->dni,
					'product_name' => $item->product_name,
					'product_weight' => $item->product_weight,
					'product_price' => $item->product_price,
					'product_image' => $item->image(),
					'product_collection' => $item->product_collection,
					'actions' => $item->admin_actions()
				)
			);
		}

		exit(json($output));
	}

	public function admin_franchise()
	{
		
		$page = $this->input->post('page') ? $this->input->post('page') : 1;
        $limit = $this->input->post('rp') ? $this->input->post('rp') : 20;
        $sortname = $this->input->post('sortname') ? $this->input->post('sortname') : 'name';
        $sortorder = $this->input->post('sortorder') ? $this->input->post('sortorder') : 'desc';
        $query = $this->input->post('query') != '' ? $this->input->post('query') : false;
        $qtype = $this->input->post('qtype') ? $this->input->post('qtype') : false;
        $offset = (($page-1) * $limit);

        $args = array();
        $item = new  Product_Model();
		//filter by keywords
		if( $query )
		{
			$item->like($qtype, $query);
		}
		$total = $item->get_clone(TRUE);
		$total = $total->count();

		$item->limit($limit, $offset)->order_by($sortname, $sortorder);
		$items = $item->get();
		
		$output = array('page' => $page, 'total' => $total, 'rows' => array());
		foreach($items as $item)
		{
			$output['rows'][] = array(
				'id' => $item->id,
				'cell' => array(
					'checkbox' => '<input type="checkbox" value="'.$item->id.'" id="ids['.$item->id.']" class="uniform" name="ids['.$item->id.']"/>',
					'fullname' => $item->fullname(),
					'telephone' => $item->telephone,
					'dni' => $item->dni,
					'product_name' => $item->product_name,
					'product_weight' => $item->product_weight,
					'product_price' => $item->product_price,
					'product_image' => $item->image(),
					'product_collection' => $item->product_collection,
					'actions' => $item->admin_actions()
				)
			);
		}

		exit(json($output));
	}
}