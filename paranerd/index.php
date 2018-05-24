<?php

/**
 * Copyright (c) 2018, Kevin Schulz <paranerd.development@gmail.com>
 * This file is licensed under the Affero General Public License version 3 or later.
 * See the COPYING-README file.
 */

date_default_timezone_set('Europe/Berlin');
header('Content-Type: text/html; charset=UTF-8');

// Extract endpoint and action
$request = $_REQUEST['request'];
$args = explode('/', rtrim($request, '/'));
$action = array_shift($args);

if (!$action) {
	include 'templates/base.php';
}
else if (file_exists('templates/' . $action . '.html')) {
	include 'templates/base.php';
}
else {
	header('HTTP/1.1 404 Not found');
	$action = "404";
	include 'templates/base.php';
}
