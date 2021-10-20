<?php

	  $host = 'localhost'; $user = 'supercash_admin'; $pass ='jesus@lord1'; $door = 'supercash_bs'; 
	$link=mysqli_connect($host,$user,$pass,$door);
	if($link==false){
		die("Error:can't connect".mysqli_connect_error());
		}else{
			//echo 'Successful Tested';
		}
?>
