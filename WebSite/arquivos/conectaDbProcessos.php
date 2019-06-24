<?php
	require 'autoload.php';
   // connect to mongodb
   $mongo =  new MongoDB\Client("mongodb://localhost:8888");
   // select a database
   $dataBaseProcess = $mongo->myDbProcess;
   $collectionProcess = $dataBaseProcess->myProcess;
?>