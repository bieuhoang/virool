<?php defined('BASEPATH') or exit('No direct script access allowed.');

class Categoryvideo_Model extends DataMapper
{
	public $table = 'category_video';

	public $has_one = array(
		'video' => array(
			'class' => 'Videos_Model',
			'other_field' => 'videocategory',
			'join_self_as' => 'video'
		)
	);
}