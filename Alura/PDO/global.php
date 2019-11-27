<?php

require_once 'classes/Config.php';

spl_autoload_register('autoload');

function autoload($className)
{

	if (file_exists('classes/' . $className . '.php')) {
		require_once 'classes/' . $className . '.php';
	}

}