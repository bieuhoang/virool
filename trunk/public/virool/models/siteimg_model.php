<?php defined('BASEPATH') or exit('No direct script access allowed.');

class Siteimg_Model extends DataMapper
{
	public $table = 'site_images';
	
	public $has_one = array(
		'site' => array(
			'class' => 'Mysite_Model',
			'other_field' => 'siteimg',
			'join_self_as' => 'site'
		)
	);
}