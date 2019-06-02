<?php
   // connect to mongodb
   $m = new MongoClient();
   // select a database
   $db = $m->mydb;
   $collection = $db->mycol;
?>