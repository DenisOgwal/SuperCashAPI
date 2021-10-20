<?php
require_once('connect.php');
//if (isset($_)) {
$paymentid = $_GET['paymentid'];
$memberid = $_GET['memberid'];
$year= $_GET['year'];
$months= $_GET['months'];
$date = $_GET['date'];
$finefee= $_GET['finefee'];
$cashiername= $_GET['cashiername'];
$reason= $_GET['reason'];
$branch= $_GET['branch'];
$sql="INSERT into fines(PaymentID,MemberID,Year,Months,Date,FineFee,CashierName,Reason,InsBranch)VALUES('$paymentid','$memberid','$year','$months','$date','$finefee','$cashiername','$reason','$branch')";
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