<?php
 require __DIR__.'/vendor/autoload.php';

 use Kreait\Firebase\Factory;
 use Kreait\Firebase\ServiceAccount;

$serviceAccount= ServiceAccount::fromJsonFile(__DIR__.'/smartdada-36cf3-firebase-adminsdk-z3bh9-3a8fc689fa.json');


 $firebase= (new Factory)

   ->withServiceAccount($serviceAccount);
   ->withDatabaseUrl('https://smartdada-36cf3-default-rtdb.firebaseio.com/');
   ->create();

   $database = $factory->createDatabase();

?>