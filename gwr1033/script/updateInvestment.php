<?php
	require_once '../../user/script/classes/database.php';
								 $connect = new Database();
 	$ID = $_POST['ID'];

$userID = $_POST['userID'];
$user_marchantID = $_POST['user_marchantID'];
$earned = $_POST['earned'];
$withdraw = $_POST['withdraw'];

$deposit = $_POST['deposit'];
$profits = $_POST['profits'];
$loss = $_POST['loss'];
$start_date = $_POST['start_date'];
$status = $_POST['status'];


if(isset($_POST['update'])){
	$connect->run("UPDATE `investments`  SET `userID` = '$userID',
	`user_marchantID` = '$user_marchantID',
	`earned` = '$earned' ,
	`withdraw` = '$withdraw',
	`deposit` = '$deposit',
	`profits` = '$profits',
	`loss` = '$loss',
	`start_date` = '$start_date',
	`status` = '$status'
 	WHERE 
	 `ID` ='$ID';");
	 echo "<script>window.open('../investments.php','_self')</script>";
	}
	
	if(isset($_POST['delete'])){
	$connect->run("DELETE FROM `investments` WHERE `ID` = '$ID'");
	 echo "<script>window.open('../investments.php','_self')</script>";
	}
?>