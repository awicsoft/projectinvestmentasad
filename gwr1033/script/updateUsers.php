<?php
	require_once '../../user/script/classes/database.php';
								 $connect = new Database();
 	$ID = $_POST['ID'];
 	$username = $_POST['username'];
 	$parentID = $_POST['parentID'];
 	$name = $_POST['name'];
 	$email = $_POST['email'];
 	$regDate = $_POST['regDate'];
 	$status = $_POST['status'];


if(isset($_POST['update'])){
	$connect->run("UPDATE `user` SET `username` = '$username',
`name` = '$name',
`email` = '$email',
`status` = '$status',
`regDate` = '$regDate',
`parentID` = '$parentID' WHERE 

`user`.`ID` ='$ID';");
	echo "<script>window.open('../users.php','_self')</script>";
	}
	
	if(isset($_POST['delete'])){
	$connect->run("DELETE FROM `user` WHERE `user`.`ID` = '$ID'");
	echo "<script>window.open('../users.php','_self')</script>";
	}
?>