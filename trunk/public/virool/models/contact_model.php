<?php defined('BASEPATH') or exit('No direct script access allowed.');

class Contact_Model extends DataMapper
{
	public $table = 'contacts';
	
	public $has_one = array(
		'user' => array(
			'class' => 'User_Model'
		)
	);

	public function created_at($format = 'Y-m-d h:i A')
	{
		return date($format, strtotime($this->created_at));
	}

	public function updated_at($format = 'Y-m-d h:i A')
	{
		return date($format, strtotime($this->updated_at));
	}
}