<?php defined('BASEPATH') or exit('No direct script access allowed.');

if( ! function_exists('timthumb'))
{
	function timthumb($config = array())
	{
		if(isset($config['src']))
		{
			$width = isset($config['width']) ? '&amp;w='.$config['width'] : '';
			$height = isset($config['height']) ? '&amp;h='.$config['height'] : '';
			$zc = isset($config['zc']) ? '&amp;zc='.$config['zc'] : '';
			$config['src'] = base_url().'timthumb.php?src='.$config['src'].$width.$height.$zc;
		}
		return img($config);
	}
}