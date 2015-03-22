<?php
	require_once '../../user/script/classes/database.php';
								 $connect = new Database();
 	$ID = $_POST['ID'];
 	$userID = $_POST['userID'];
 	$marchantID = $_POST['marchantID'];
 	$username1 = $_POST['username1'];
 	

if(isset($_POST['update'])){
	$connect->run("UPDATE `user_marchant` SET `userID` = '$userID',
	`marchantID` = '$marchantID',
	`username1` = '$username1'
	 WHERE 
	 `ID` ='$ID';");
	 echo "<script>window.open('../userMarchant.php','_self')</script>";
	}
	
	if(isset($_POST['delete'])){
	$connect->run("DELETE FROM `user_marchant` WHERE `ID` = '$ID'");
	 echo "<script>window.open('../userMarchant.php','_self')</script>";
	}
?>