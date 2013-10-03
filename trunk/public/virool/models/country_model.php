<?php defined('BASEPATH') or exit('No direct script access allowed.');

class Country_Model extends DataMapper
{
	public $table = 'country';

	public $has_many = array(
		'video' => array(
			'class' => 'Videos_Model',
			'other_field' => 'country',
			'join_self_as' => 'country',
			'join_other_as' => 'video',
			'join_table' => 'country_video'
		)
	);
}