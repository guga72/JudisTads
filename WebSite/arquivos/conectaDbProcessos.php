<?php
	require 'vendor/autoload.php';
	// connect to mongodb
	$mongo =  new MongoDB\Driver\Manager();
	// select a database
	$dataBaseProcess = $mongo->myDbProcess;
	$collectionProcess = $dataBaseProcess->myProcess;
	?>