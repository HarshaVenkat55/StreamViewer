<?php
	session_start();
	require_once "GoogleAPI/vendor/autoload.php";
	$gClient = new Google_Client();
	$gClient->setClientId("438054707264-8ts4u1t53q4pqicqao46r86q06bgscdj.apps.googleusercontent.com");
	$gClient->setClientSecret("B42rh9w7MTnoWRF-SUyl4JhV");
	$gClient->setApplicationName("StreamViewer");
	$gClient->setRedirectUri("https://streamviewer18.herokuapp.com/g-callback.php");
	$gClient->addScope("https://www.googleapis.com/auth/plus.login");
	$gClient->addScope("https://www.googleapis.com/auth/plus.profile.emails.read");
?>
