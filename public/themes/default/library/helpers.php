<?php

if (!function_exists('asset')) {
	function asset($file)
	{
		return get_template_directory_uri() . '/dist/' . $file;
	}
}