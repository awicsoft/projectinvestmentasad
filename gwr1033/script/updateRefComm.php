<?php
	require_once '../../user/script/classes/database.php';
								 $connect = new Database();
 	$ID = $_POST['ID'];
 	$userID = $_POST['userID'];
 	$parentID = $_POST['parentID'];
 	$commision = $_POST['commision'];
 	

if(isset($_POST['update'])){
	$connect->run("UPDATE `ref_commision` SET `userID` = '$userID',
	`parentID` = '$parentID',
	`commision` = '$commision'
	 WHERE 
	 `ID` ='$ID';");
	 echo "<script>window.open('../refferalsAndCommisions.php','_self')</script>";
	}
	
	if(isset($_POST['delete'])){
	$connect->run("DELETE FROM `ref_commision` WHERE `ID` = '$ID'");
	 echo "<script>window.open('../refferalsAndCommisions.php','_self')</script>";
	}
?>