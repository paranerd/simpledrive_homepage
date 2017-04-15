<?php

/**
 * Copyright (c) 2016, Kevin Schulz <paranerd.development@gmail.com>
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
	include 'views/landing.php';
}
else if ($action == 'version') {
	$version = json_decode(file_get_contents('demo/config/version.json'), true);
	exit(json_encode(array('build' => $version['build'], 'version' => $version['version'])));
}
else if ($action == 'download') {
	$type = array_shift($args);

	file_put_contents('log', date("o-m-d-H:i:s") . " | " . $type . " downloaded\n", FILE_APPEND);

	if($type == "zip") {
		header('Location: https://github.com/paranerd/simpledrive/zipball/master');
	}
	exit();
}
else if ($action == 'plugins') {
	$name = array_shift($args);

	file_put_contents('log', date("o-m-d-H:i:s") . " | " . $name . "-plugin downloaded\n", FILE_APPEND);

	if ($name === 'phpmailer') {
		header('Location: http://simpledrive.org/plugins/phpmailer.zip');
	}
	else if ($name === 'sabredav') {
		header('Location: http://simpledrive.org/plugins/sabredav.zip');
	}
	else if ($name === 'webodf') {
		header('Location: http://simpledrive.org/plugins/webodf.zip');
	}

	exit();
}
/*else if ($action == 'about') {
	$section = array_shift($args);
	header ('HTTP/1.1 301 Moved Permanently');
	header('Location: http://about.simpledrive.org/' . $section);
	header('Connection: close');
	exit();
}*/
else if (file_exists('views/' . $action . '.php')) {
	include 'views/' . $action . '.php';
}
else {
	header('HTTP/1.1 404 Not found');
	include 'views/404.php';
}