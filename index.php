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

if ($action == 'version') {
	$version = json_decode(file_get_contents('demo/config/version.json'), true);
	exit(json_encode(array('build' => $version['build'], 'version' => $version['version'])));
}
else if ($action == 'download') {
	$type = array_shift($args);

	file_put_contents('log', date("o-m-d-H:i:s") . " | " . $type . " downloaded\n", FILE_APPEND);

	if ($type == "zip") {
		header('Location: https://github.com/paranerd/simpledrive/zipball/master');
	}
	exit();
}
else if ($action == 'plugins') {
	$name = array_shift($args);

	file_put_contents('log', date("o-m-d-H:i:s") . " | " . $name . "-plugin downloaded\n", FILE_APPEND);

	if ($name === 'phpmailer') {
		header('Location: http://simpledrive.org/public/plugins/phpmailer.zip');
	}
	else if ($name === 'sabredav') {
		header('Location: http://simpledrive.org/public/plugins/sabredav.zip');
	}
	else if ($name === 'webodf') {
		header('Location: http://simpledrive.org/public/plugins/webodf.zip');
	}

	exit();
}
else if (!$action) {
	$action = "landing";
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