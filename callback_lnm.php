<?php
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "smartdada-mpesa";
// Create connection
$conn = mysqli_connect($servername, $username, $password, $db);
//check connection
if (!$conn) {
  die("Connection failed: " . mysqli_connect_error());
}
echo "Connected successfully";
echo "123";
} 

// require('../classes/config.php');
// header("Content-Type: application/json");

// $response= '
// {
// 	"ResultCode":0,
// 	"ResultDesc": "Confirmation received successfully"

// }';
// //MPESA DATA
// $mpesaResponse = file_get_contents('php://input');

// //log the response
//  //$logFile="LNMCallback.txt";
// //$log=fopen($logFile,"a");
//  fwrite($log, $mpesaResponse);
//  fclose($log);

//  echo $response;
// print_r($mpesaResponse);
// $data=json_decode($mpesaResponse);
// print_r($data);


// $MerchantRequestID=$data->Body->stkCallback->MerchantRequestID;
// $CheckoutRequestID=$data->Body->stkCallback->CheckoutRequestID;
// $ResultCode=$data->Body->stkCallback->ResultCode;
// echo $MerchantRequestID;

// if($ResultCode==0)
// {
// 	$Amount=$data->Body->stkCallback->CallbackMetadata->Item[0]->Value;
// 	$MpesaReceiptNumber=$data->Body->stkCallback->CallbackMetadata->Item[1]->Value;
// 	$TransactionDate=$data->Body->stkCallback->CallbackMetadata->Item[3]->Value;
// 	$PhoneNumber=$data->Body->stkCallback->CallbackMetadata->Item[4]->Value;

// 	// INSERT INTO DATABASE
// 	$qryArray=array(
// 		":MerchantRequestID"=>$MerchantRequestID,
// 		":CheckoutRequestID"=>$CheckoutRequestID,
// 		":Amount"=>$Amount,
// 		":MpesaReceiptNumber"=>$MpesaReceiptNumber,
// 		":TransactionDate"=>$TransactionDate,
// 		":PhoneNumber"=>$PhoneNumber
// 	);
// 	}
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "smartdada-mpesa";
// Create connection
$conn = mysqli_connect($servername, $username, $password, $db);
//check connection
if (!$conn) {
  die("Connection failed: " . mysqli_connect_error());
}
echo "Connected successfully";
} 

// $MerchantRequestID=$_POST['MerchantRequestID'];
// $CheckoutRequestID=$_POST ['CheckoutRequestID'];
// $Amount=$_POST ['Amount'];
// $MpesaReceiptNumber=$_POST ['MpesaReceiptNumber'];
// $TransactionDate=$_POST ['TransactionDate'];
// $PhoneNumber=$_POST ['PhoneNumber'];


// 	  $sql = "INSERT INTO donations(merchantrequestID, checkoutrequestID, amount, mpesareceiptNumber, transactionDate, phoneNumber)
//      VALUES ('$MerchantRequestId', '$ChekoutRequestID', '$Amount', '$MpesaReceiptNumber', '$TransactionDate', '$PhoneNumber')";
//        $exec = $conn->query($query);
//  if ($exec) {
   
//     echo "Thank You for your donation!";
//    //header("Refresh:0.1; url=Login.php");
//     header('refresh:0.1; url=Pay.php');
//   } else {
//     echo "Oops! Something went wrong. Please try again.";
    
//   }

// //$insert= $dbname->query("SELECT LicenseNumber, MpesaInvoice FROM paymentdetials");
 ini_set('display_errors', 1);
ini_set('display_startup_errors', 1);
error_reporting(E_ALL);

?>