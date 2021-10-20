<?php
require_once('connect.php');
//if (isset($_)) {
$expenseid = $_GET['expenseid'];
$cashierid = $_GET['cashierid'];
$year= $_GET['year'];
$months= $_GET['months'];
$date= $_GET['date'];
$expense = $_GET['expense'];
$cost= $_GET['cost'];
$totalpaid= $_GET['totalpaid'];
$duepayment= $_GET['duepayment'];
$description= $_GET['description'];
$payee= $_GET['payee'];
$telephone= $_GET['telephone'];
$email= $_GET['email'];
$address= $_GET['address'];
$managerid= $_GET['managerid'];
$managername= $_GET['managername'];
$comment= $_GET['comment'];
$modeofpayment= $_GET['modeofpayment'];
$paid= $_GET['paid'];
$branch= $_GET['branch'];
$sql="INSERT into expenses(ExpenseID,CashierID,Year,Months,Date,Expense,Cost,TotalPaid,Duepayment,Description,Payee,Telephone,Email,Address,ManagerID,ManagerName,Comment,InsBranch)VALUES('$expenseid','$cashierid','$year','$months','$date','$expense','$cost','$totalpaid','$duepayment','$description','$payee','$telephone','$email','$address','$managerid','$managername','$comment','$branch')";
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