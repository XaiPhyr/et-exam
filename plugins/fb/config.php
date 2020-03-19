<?php
session_start();
require_once('Facebook/autoload.php');

$FBObject = new Facebook\Facebook([
	'app_id' => '2546950908880583',
	'app_secret' => '858394ed89aab501bf08f592e2e873c3',
	'default_graph_version' => 'v2.10'
]);

$handler = $FBObject -> getRedirectLoginHelper();
?>