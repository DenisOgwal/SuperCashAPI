<?php
require_once('connect.php');
//if (isset($_)) {
$staffid = $_GET['staffid'];
$basicsalary= $_GET['basicsalary'];
$paymentdate= $_GET['paymentdate'];
$modeofpayment= $_GET['modeofpayment'];
$year = $_GET['year'];
$paymentmodedetails= $_GET['paymentmodedetails'];
$deduction= $_GET['deduction'];
$totalpaid= $_GET['totalpaid'];
$months= $_GET['months'];
$duefees= $_GET['duefees'];
$branch= $_GET['branch'];
$sql="INSERT into employeepayment(StaffID,BasicSalary,PaymentDate,ModeOfPayment,PaymentModeDetails,Deduction,TotalPaid,Months,Year,DueFees,Branch)VALUES('$staffid','$basicsalary','$paymentdate','$modeofpayment','$paymentmodedetails','$deduction','$totalpaid','$months','$year','$duefees','$branch')";
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