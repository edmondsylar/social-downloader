<?php

// +------------------------------------------------------------------------+
// | @author_email: game123727@gmail.com   
// +------------------------------------------------------------------------+
// | shareplus - The Ultimate PHP Social Networking Platform
// | Copyright (c) 2018 shareplus. All rights reserved.
// +------------------------------------------------------------------------+
/*
Any doubt or failure in the system takes a capture and sends the creator in support
*/

header("Location:install");

ob_start();
#----> Host name
$dbhost			= '';
#----> Batabase name
$dbdatabase		= ''; 
#----> User of the DB
$dbuser			= '';
#----> Password of the DB
$dbpassword		= ''; 

// URL web
$site_url = '';

?>