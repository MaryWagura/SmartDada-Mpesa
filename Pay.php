<?php
ini_set('display_errors', 1);
ini_set('display_startup_errors', 1);
error_reporting(E_ALL);
require_once('Lipa-Mpesa.php');

if (isset($_POST['pay'])) {
	$phonenumber=$_POST['phonenumber'];
	$amount=$_POST['amount'];
	$accRef="Smart Dada";
	 $access_token = accessTokenGenerator();
	 mpesaSendMoney($phonenumber, $amount, $accRef, $access_token );
	



 	$push = array('telNum' => $phonenumber,'Amount'=>$amount ,'accRef'=>$accRef);
    print_r($push);
   $arr=json_encode($push);

	

 	$url="https://radiant-castle-32278.herokuapp.com/stkPush.php";
 	$curl = curl_init();
 			curl_setopt($curl, CURLOPT_URL, $url);
 			curl_setopt($curl, CURLOPT_HTTPHEADER, array('Content-Type:application/json'));

 				curl_setopt($curl, CURLOPT_RETURNTRANSFER, true);
 			  curl_setopt($curl, CURLOPT_POST, true);
 			  curl_setopt($curl, CURLOPT_POSTFIELDS, $arr);

 			  $curl_response = curl_exec($curl);

 			  print_r($curl_response);
 			  echo $curl_response;
 }
 


?>

