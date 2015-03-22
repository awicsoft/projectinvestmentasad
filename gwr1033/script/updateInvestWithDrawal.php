<?php
	require_once '../../user/script/classes/database.php';
								 $connect = new Database();
 	$ID = $_POST['ID'];

$investmentID = $_POST['investmentID'];
$date = $_POST['date'];
$ammount = $_POST['ammount'];
$status = $_POST['status'];



if(isset($_POST['update'])){
	$connect->run("UPDATE `withdraw_history`  SET `investmentID` = '$investmentID',
	`date` = '$date',
	`ammount` = '$ammount' ,
	`status` = '$status'
	
	 WHERE 
	 `ID` ='$ID';");
	 echo "<script>window.open('../investmentWithdraw.php','_self')</script>";
	}
	
	if(isset($_POST['delete'])){
	$connect->run("DELETE FROM `withdraw_history` WHERE `ID` = '$ID'");
	 echo "<script>window.open('../investmentWithdraw.php','_self')</script>";
	}
?>