<?php
	require 'vendor/autoload.php';
	// connect	 to mongodb
	$client =  new MongoDB\Driver\Manager();
	// select a database
	$database = $client->mydb;
	$collection = $database->mycol;
?>