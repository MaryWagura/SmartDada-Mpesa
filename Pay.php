<?php
	echo $telNum;
require_once('index.html');
$telNum=$_POST['phonenumber'];
	echo $telNum;
	$amount=1;
	$accRef=$_POST['SmartDada'];


if (isset($_POST['pay'])) {
	$telNum=$_POST['phonenumber'];
	echo $telNum;
	$amount=1;
	$accRef=$_POST['SmartDada'];
	echo "string";
	 $access_token = accessTokenGenerator();
	 mpesaSendMoney($telNum, $amount, $accRef, $access_token );
	



 	$push = array('telNum' => $telNum,'Amount'=>$amount ,'accRef'=>$licenseNum);
    print_r($push);
   $arr=json_encode($push);

	

 	$url=".../stkPush.php";
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

