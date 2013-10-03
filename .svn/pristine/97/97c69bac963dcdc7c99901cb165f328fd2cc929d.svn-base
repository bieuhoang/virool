<?php defined('BASEPATH') or exit('No direct script access allowed.');

class Ajax extends Ajax_Controller
{
	public function __construct()
	{
		parent::__construct();
	}

	public function update()
	{
		foreach($_POST as $field => $value)
		{
			$option = new Option();
			$option->get_by_name($field);
			if($option->count())
			{
				$option->value = $value;
				$option->save();
			}
		}

		echo json(array('status' => true, 'msg' => 'Updated successfully')); return;
	}
}