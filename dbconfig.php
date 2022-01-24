<?php
 require  __DIR__.'/vendor/autoload.php';

 use Kreait\Firebase\Factory;
 use Kreait\Firebase\ServiceAccount;

$serviceAccount= ServiceAccount::fromJsonFile(__DIR__.'/smartdada-36cf3-firebase-adminsdk-z3bh9-828e575971.json');


 $firebase= (new Factory)

   ->withServiceAccount($serviceAccount)
   ->withDatabaseUrl('https://smartdada-36cf3-default-rtdb.firebaseio.com/')
   ->create();

   $database = $firebase->createDatabase();

?>