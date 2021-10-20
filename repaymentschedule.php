<?php
require_once('connect.php');
//if (isset($_)) {
$loanid = $_GET['loanid'];
$memberid = $_GET['memberid'];
$membername= $_GET['membername'];
$ammountpay= $_GET['ammountpay'];
$interest= $_GET['interest'];
$totalammount = $_GET['totalammount'];
$paymentdate= $_GET['paymentdate'];
$paymentstatus= $_GET['paymentstatus'];
$months= $_GET['months'];
$year= $_GET['year'];
$balanceexist= $_GET['balanceexist'];
$beginningbalance= $_GET['beginningbalance'];
$branch= $_GET['branch'];
$sql="INSERT into repaymentschedule(LoanID,MemberID,AmmountPay,Interest,TotalAmmount,PaymentDate,PaymentStatus,Months,BalanceExist,InsBranch)VALUES('$loanid','$memberid','$ammountpay','$interest','$totalammount','$paymentdate','$paymentstatus','$months','$balanceexist','$branch')";
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