<?php
require_once('connect.php');
//if (isset($_)) {
$paymentid = $_GET['paymentid'];
$memberid = $_GET['memberid'];
$loanid= $_GET['loanid'];
$year= $_GET['year'];
$months= $_GET['months'];
$date = $_GET['date'];
$registrationammount= $_GET['registrationammount'];
$cashiername= $_GET['cashiername'];
$chairmanname= $_GET['chairmanname'];
$duepayment= $_GET['duepayment'];
$modeOofpayment= $_GET['modeOofpayment'];
$branch= $_GET['branch'];
$sql="INSERT into loanprocessingfees(PaymentID,MemberID,Year,Months,Date,RegistrationAmmount,CashierName,Duepayment,InsBranch)VALUES('$paymentid','$memberid','$year','$months','$date','$registrationammount','$cashiername','$duepayment','$branch')";
$result=mysqli_query($link,$sql);
/*
$response = array();
if ($result) 
{
$messages='Correct Info';
 $response['error'] =$messages;
 $response['created_at'] = $timeregistered;
 echo json_encode($response);
}else{
	$messages='Something Un Expected Happened, Try Again Later';
	$response['error'] =$messages;
   echo json_encode($response);
}
*/
//}