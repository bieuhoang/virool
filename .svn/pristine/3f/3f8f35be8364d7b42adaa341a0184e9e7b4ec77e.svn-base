<?php defined('BASEPATH') or exit('No direct script access allowed.');

class Option_Model extends DataMapper
{
	public $table = 'options';

	public function get_option($auto_load = true)
	{
		$options = new Option();
		$option = new stdClass;

		if($auto_load)
		{
			$options->where('auto_load', 1);
		}

		foreach($options->get() as $opt)
		{
			$option->{$opt->name} = $opt->value;
		}
		
		return $option;
	}
}