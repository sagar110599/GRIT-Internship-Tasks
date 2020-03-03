<?php

//logout.php
session_start();
include('config_google.php');

//Reset OAuth access token
if($google_client->revokeToken()){

//Destroy entire session data.
session_destroy();
}
else
{

//redirect page to index.php
header('LOCATION: index.php');
}
?>