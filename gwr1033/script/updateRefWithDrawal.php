<?php
	require_once '../../user/script/classes/database.php';
								 $connect = new Database();
 	$ID = $_POST['ID'];

$parentID = $_POST['parentID'];
$date = $_POST['date'];
$ammount = $_POST['ammount'];
$status = $_POST['status'];
$paymentmethod = $_POST['paymentmethod'];
$account = $_POST['account'];




if(isset($_POST['update'])){
	$connect->run("UPDATE `refferal_withdraw` SET `paerentID` = '$parentID',
	`date` = '$date',
	`ammount` = '$ammount' ,
	`status` = '$status' ,
	`paymentMethod` = '$paymentmethod' ,
	`account` = '$account'
	 WHERE 
	 `ID` ='$ID';");
	 echo "<script>window.open('../refferalWithdraw.php','_self')</script>";
	}
	
	if(isset($_POST['delete'])){
	$connect->run("DELETE FROM `refferal_withdraw` WHERE `ID` = '$ID'");
	 echo "<script>window.open('../refferalWithdraw.php','_self')</script>";
	}
?>