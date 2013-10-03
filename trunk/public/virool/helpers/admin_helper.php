<?php defined('BASEPATH') or exit('No direct script access allowed.');

if(! function_exists('item_status'))
{
	function item_status($id, $status = 1)
	{
		return '<a href="javascript:;" title="'.($status?'Actived':'Deactived').'" class="change-status" data-id="'.$id.'"><span class="led-icon led-icon-'.($status?'accept':'cross').'"></span></a>';
	}
}