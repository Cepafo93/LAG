<?php


$routes = [
	'home' => 'lagController',
	'login_form' => 'lagController',
	'game' => 'lagController',
	'find_coach' => 'lagController',
	'session_summary' => 'lagController'

];

$action = 'home';

if (!empty($_GET['action']))
	$action = $_GET['action'];

if (array_key_exists($action, $routes))
	include('controllers/'.$routes[$action].".php");
else
	die ('route unkown');

include ('views/'.$action.'.php');