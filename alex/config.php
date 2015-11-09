
<?php

	session_start();


	$dbname = "facebook_timeline";
	$host	= "localhost";
	$user	= "root";
	$pass	= "root";
	$port	= 8889;

	$db = new PDO('mysql:host='.$host.';port='.$port.';dbname='.$dbname, $user, $pass, array(PDO::MYSQL_ATTR_INIT_COMMAND => 'SET NAMES utf8'));




?>