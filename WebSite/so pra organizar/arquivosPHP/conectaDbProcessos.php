<?php
   // connect to mongodb
   $mongo = new MongoClient();
   // select a database
   $dataBaseProcess = $mongo->myDbProcess;
   $collectionProcess = $dataBaseProcess->myProcess;
?>