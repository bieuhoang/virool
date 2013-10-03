<?php defined('BASEPATH') or exit('No direct script access allowed.');

class Product_Model extends DataMapper
{
	public $table = 'products';
	public $has_one = array();
	public $has_many = array();

	public function fullname()
	{
		return $this->name . ' ' . $this->surname;
	}

	public function image()
	{
		if($this->product_image != '')
		{
			return '<img src="'.base_url().$this->product_image.'" width="70" alt=""/>';
		}
		return '';
	}

	public function admin_actions()
	{
		return '';
	}
}