<?php
	require 'autoload.php';
	// connect to mongodb
	$m =  new MongoDB\Client;
	// select a database
	$db = $m->mydb;
	$collection = $db->mycol;
?>