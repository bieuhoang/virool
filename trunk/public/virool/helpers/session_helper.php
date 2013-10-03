<?php defined('BASEPATH') or exit('No direct script access allowed.');

if(!function_exists('session'))
{
	function session($name, $value = NULL)
	{
		if(is_null($value)) return ci()->session->userdata($name);

		ci()->session->set_userdata($name, $value);
	}
}