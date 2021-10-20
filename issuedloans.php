<?php
require_once('connect.php');
//if (isset($_)) {
$memberid = $_GET['memberid'];
$loansid = $_GET['loansid'];
$year= $_GET['year'];
$months= $_GET['months'];
$date = $_GET['date'];
$cashiernames= $_GET['cashiernames'];
$ammount= $_GET['ammount'];
$modeofpayment= $_GET['modeofpayment'];
$branch= $_GET['branch'];
$sql="INSERT into issuedloans(MemberID,LoansID,Year,Months,Date,CashierName,Ammount,InsBranch)VALUES('$memberid','$loansid','$year','$months','$date','$cashiernames','$ammount','$branch')";
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