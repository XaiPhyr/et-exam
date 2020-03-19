<?php
session_start();
require_once "GoogleAPI/vendor/autoload.php";
$gClient = new Google_Client();
$gClient->setClientId("786789161942-bqu33abpcios8i30qp6umf09n89j8j7j.apps.googleusercontent.com");
$gClient->setClientSecret("R7j2wpd1-qzGBioX_5nmhGfk");
$gClient->setApplicationName("google login");
$gClient->setRedirectUri("localhost/SI_Exam/?page=products");
$gClient->addScope("https://www.googleapis.com/auth/plus.login https://www.googleapis.com/auth/userinfo.email");
