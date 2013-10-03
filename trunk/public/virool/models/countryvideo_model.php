<?php defined('BASEPATH') or exit('No direct script access allowed.');

class Countryvideo_Model extends DataMapper
{
	public $table = 'country_video';

	public $has_one = array(
		'video' => array(
			'class' => 'Videos_Model',
			'other_field' => 'countryvideo',
			'join_self_as' => 'video'
		)
	);
}