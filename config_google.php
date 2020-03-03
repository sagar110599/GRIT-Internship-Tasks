<?php

//config.php

//Include Google Client Library for PHP autoload file
require_once 'vendor/autoload.php';

//Make object of Google API Client for call Google API
$google_client = new Google_Client();

//Set the OAuth 2.0 Client ID
$google_client->setClientId('733054498458-eimcc0gf9nnueedro5uni0cg2pr1neos.apps.googleusercontent.com');

//Set the OAuth 2.0 Client Secret key
$google_client->setClientSecret('hBpU1xhOH5Sy_76QDzFm2M3E');

//Set the OAuth 2.0 Redirect URI
$google_client->setRedirectUri('http://localhost/CAS/CAS-master/validate.php');

//
$google_client->addScope('email');

$google_client->addScope('profile');

//start session on web page


?>
