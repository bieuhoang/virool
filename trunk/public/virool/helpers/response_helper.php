<?php

if(! function_exists('json'))
{
	function json($data, $object = false)
	{
		if(is_array($data))
		{
			return json_encode($data);
		}
		else
		{
			return json_decode($data, $object);
		}
	}
}