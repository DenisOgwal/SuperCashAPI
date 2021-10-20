<?php
require_once('connect.php');
//if (isset($_)) {
$memberid = $_GET['memberid'];
$membername = $_GET['membername'];
$admissiondate= $_GET['admissiondate'];
$year= $_GET['year'];
$gender= $_GET['gender'];
$dob = $_GET['dob'];
$address= $_GET['address'];
$category= $_GET['category'];
$religion= $_GET['religion'];
$fathername= $_GET['fathername'];
$mothername= $_GET['mothername'];
$residence= $_GET['residence'];
$occupation= $_GET['occupation'];
$contactno= $_GET['contactno'];
$email= $_GET['email'];
$nationality= $_GET['nationality'];
$namemext= $_GET['namemext'];
$contactnonext= $_GET['contactnonext'];
$addressnext= $_GET['addressnext'];
$relationship= $_GET['relationship'];
$occupationnext= $_GET['occupationnext'];
$chairman= $_GET['chairman'];
$nin= $_GET['nin'];
$branch= $_GET['branch'];
$sql="INSERT into memberregistration(MemberID,MemberName,AdmissionDate,Year,Gender,DOB,Address,Category,Religion,FatherName,MotherName,Residence,Occupation,ContactNo,Email,Nationality,NameNext,ContactNoNext,AddressNext,RelationShip,OccupationNext,Chairman,NIN,InsBranch)VALUES('$memberid','$membername','$admissiondate','$year','$gender','$dob','$address','$category','$religion','$fathername','$mothername','$residence','$occupation','$contactno','$email','$nationality','$namemext','$contactnonext','$addressnext','$relationship','$occupationnext','$chairman','$nin','$branch')";
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