<?php
	session_start();
	if(!isset($_SESSION['a_id'])){
		echo "<script>window.open('login.php','_self');</script>";
		exit();
		
	}

$ID =$_GET['ID'];



  require_once '../user/script/classes/database.php';
									     $connect = new Database();
									     $connect->run("DELETE FROM `message` WHERE `ID` = '$ID'");

echo "<script>window.open('inbox.php?messge=A message Has Been Sucessfully Deleted','_self')</script>";


?>