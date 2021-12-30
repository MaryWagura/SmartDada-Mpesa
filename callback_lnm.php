<?php
require('../classes/config.php');
header("Content-Type: application/json");

$response= '
{
	"ResultCode":0,
	"ResultDesc": "Confirmation received successfully"

}';
//MPESA DATA
$mpesaResponse = file_get_contents('php://input');

//log the response
 $logFile="LNMCallback.txt";
$log=fopen($logFile,"a");
 fwrite($log, $mpesaResponse);
 fclose($log);

 echo $response;
print_r($mpesaResponse);
$data=json_decode($mpesaResponse);
print_r($data);


$MerchantRequestID=$data->Body->stkCallback->MerchantRequestID;
$CheckoutRequestID=$data->Body->stkCallback->CheckoutRequestID;
$ResultCode=$data->Body->stkCallback->ResultCode;
echo $MerchantRequestID;

if($ResultCode==0)
{
	$Amount=$data->Body->stkCallback->CallbackMetadata->Item[0]->Value;
	$MpesaReceiptNumber=$data->Body->stkCallback->CallbackMetadata->Item[1]->Value;
	$TransactionDate=$data->Body->stkCallback->CallbackMetadata->Item[3]->Value;
	$PhoneNumber=$data->Body->stkCallback->CallbackMetadata->Item[4]->Value;

	// INSERT INTO DATABASE
	$qryArray=array(
		":MerchantRequestID"=>$MerchantRequestID,
		":CheckoutRequestID"=>$CheckoutRequestID,
		":Amount"=>$Amount,
		":MpesaReceiptNumber"=>$MpesaReceiptNumber,
		":TransactionDate"=>$TransactionDate,
		":PhoneNumber"=>$PhoneNumber
	);
	}
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "smartdada-mpesa";
// Create connection
$dbname= new mysqli($servername, $username, $password,$dbname);
// Check connection
if ($dbname->connect_error) {
    die("Connection failed: " . $dbname->connect_error);
} 
$MerchantRequestID=$_POST['MerchantRequestID'];
$CheckoutRequestID=$_POST ['CheckoutRequestID'];
$Amount=$_POST ['Amount'];
$MpesaReceiptNumber=$_POST ['MpesaReceiptNumber'];
$TransactionDate=$_POST ['TransactionDate'];
$PhoneNumber=$_POST ['PhoneNumber'];


	  $sql = "INSERT INTO donations(merchantrequestID, checkoutrequestID, amount, mpesareceiptNumber, transactionDate, phoneNumber)
     VALUES ('$MerchantRequestId', '$ChekoutRequestID', '$Amount', '$MpesaReceiptNumber', '$TransactionDate', '$PhoneNumber')";

        if ($dbname->query($sql) === TRUE) {
    echo "Thank You for your donation!";
 header('Location:Pay.php');
} else {
    echo "Error: " . $sql . "<br>" . $dbname->error;
}
//$insert= $dbname->query("SELECT LicenseNumber, MpesaInvoice FROM paymentdetials");

?>