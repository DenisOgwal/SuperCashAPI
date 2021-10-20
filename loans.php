<?php
require_once('connect.php');
//if (isset($_)) {
$loansid = $_GET['loansid'];
$memberid = $_GET['memberid'];
$membername= $_GET['membername'];
$loanammount= $_GET['loanammount'];
$sites= $_GET['sites'];
$securities = $_GET['securities'];
$incomes= $_GET['incomes'];
$comment= $_GET['comment'];
$officernames= $_GET['officernames'];
$years= $_GET['years'];
$months= $_GET['months'];
$dates= $_GET['dates'];
$managername= $_GET['managername'];
$reviewcomment= $_GET['reviewcomment'];
$reviewdate= $_GET['reviewdate'];
$chairpersonname= $_GET['chairpersonname'];
$decision= $_GET['decision'];
$decisiondate= $_GET['decisiondate'];
$description= $_GET['description'];
$issue= $_GET['issue'];
$period= $_GET['period'];
$branch= $_GET['branch'];
$sql="INSERT into loans(LoansID,MemberID,LoanAmmount,Site,Securities,Income,Comment,OfficerName,Year,Months,Date,ManagerName,ReviewComment,ReviewDate,ChairpersonName,Decision,DecisionDate,Description,Issue,Period,InsBranch)VALUES('$loansid','$memberid','$loanammount','$sites','$securities','$incomes','$comment','$officernames','$years','$months','$dates','$managername','$reviewcomment','$reviewdate','$chairpersonname','$decision','$decisiondate','$description','$issue','$period','$branch')";
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