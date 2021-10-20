<?php
require_once('connect.php');
//if (isset($_)) {
$paymentid = $_GET['paymentid'];
$grantedby = $_GET['grantedby'];
$year= $_GET['year'];
$months= $_GET['months'];
$date = $_GET['date'];
$grantfee= $_GET['grantfee'];
$cashiername= $_GET['cashiername'];
$reason= $_GET['reason'];
$branch= $_GET['branch'];
$sql="INSERT into grantfees(PaymentID,GrantedBy,Year,Months,Date,GrantFee,CashierName,Reason,InsBranch)VALUES('$paymentid','$grantedby','$year','$months','$date','$grantfee','$cashiername','$reason','$branch')";
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