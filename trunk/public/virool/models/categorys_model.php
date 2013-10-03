<?php defined('BASEPATH') or exit('No direct script access allowed.');

class Categorys_Model extends DataMapper
{
	public $table = 'categorys';

	public $has_many = array(
		'video' => array(
			'class' => 'Videos_Model',
			'other_field' => 'category',
			'join_self_as' => 'category',
            'join_other_as' => 'video',
            'join_table' => 'category_video'
		)
	);
}