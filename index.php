<?php

require 'functions.php';

// Load config or bail out
if (file_exists('config.php')) {
	require 'config.php';
} else {
	error_out('no_config');
}

require 'modules/Request.php';
require 'modules/user.php';
require 'modules/database.php';

if (file_exists('controllers/'.$request->controller.'.php')) {
	$file_extension = '.php';
	require 'controllers/'.$request->controller.$file_extension; // kui olemas, võta kasutusele
	$controller = new $request->controller;
	if (isset($controller->requires_auth)) {
		$_user->require_auth();
	}
	$controller->{$request->action}(); // sulud sest action on index() auth.php-s
} else {
	echo "The page '{$request->controller}' does not exist";
}
