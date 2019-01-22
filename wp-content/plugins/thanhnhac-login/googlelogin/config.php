<?php
	
	require_once "GoogleAPI/vendor/autoload.php";
	$gClient = new Google_Client();
	$gClient->setClientId("40511968336-451pjhmt9l99gkocjptthb8t70qav3bn.apps.googleusercontent.com");
	$gClient->setClientSecret("oLXtCO-p0GeEjTyUBrRVqVfp");
	$gClient->setApplicationName("Login API2");
	$gClient->setRedirectUri("http://localhost/thanhnhac/wp-content/plugins/thanhnhac-login/Controller-client/Controller_google.php");
	// $gClient->setAccessType("offline");
	$gClient->addScope("https://www.googleapis.com/auth/plus.login https://www.googleapis.com/auth/userinfo.email https://www.googleapis.com/auth/userinfo.profile");

?>
