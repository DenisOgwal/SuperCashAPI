<?php
require_once('connect.php');
//if (isset($_)) {
$repaymentid = $_GET['repaymentid'];
$ammountpaid = $_GET['ammountpaid'];
$totalammount= $_GET['totalammount'];
$balance= $_GET['balance'];
$repaymonths= $_GET['repaymonths'];
$cashierid = $_GET['cashierid'];
$cashiername= $_GET['cashiername'];
$loanid= $_GET['loanid'];
$memberid= $_GET['memberid'];
$membername= $_GET['membername'];
$repaymentdate= $_GET['repaymentdate'];
$year= $_GET['year'];
$months= $_GET['months'];
$interest= $_GET['interest'];
$modeofpayment= $_GET['modeofpayment'];
$branch= $_GET['branch'];
$sql="INSERT into loanrepayment(RepaymentID,AmmountPaid,Balance,RepayMonths,CashierID,CashierName,LoanID,MemberID,Repaymentdate,Year,Months,Interest,InsBranch)VALUES('$repaymentid','$ammountpaid','$balance','$repaymonths','$cashierid','$cashiername','$loanid','$memberid','$repaymentdate','$year','$months','$interest','$branch')";
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