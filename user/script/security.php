<?php
require_once '../../include/incryption.php';
 require_once 'classes/database.php';
 session_start();
function isCorrectPassword($password){
	
	$connect = new Database();
	$userID =$_SESSION['u_id'];
	$run = $connect->run("SELECT `password` FROM `user` WHERE `ID` = '$userID' ");
	$row = mysql_fetch_array($run);
	
	
	if($password == $row['password'])
		return true;
	return false;
	
	
	
}
function updatePassword($password){
	$connect = new Database();
	$userID = $_SESSION['u_id'];
	$connect->run("UPDATE `user` SET `password` = '$password' WHERE `user`.`ID` ='$userID';");
	
	}
	
	$ppassword  = $_POST['ppassword'];
	$npassword1 = $_POST['npassword1'];
	$npassword2 = $_POST['npassword2'];
  $ppassword = incrypt($ppassword);
  $npassword1 = incrypt($npassword1);
  $npassword2 = incrypt($npassword2);
	if($npassword1 != $npassword2)
  	{	echo "<script>window.open('../security.php?message=Both Password Not Matched','_self')</script>";
		exit();
	}else
	if(!isCorrectPassword($ppassword))
	{	echo "<script>window.open('../security.php?message=Currenet Password Not Coreect','_self')</script>";
	
		exit();
	}else
	 updatePassword($npassword1);
echo "<script>window.open('../security.php?message=Password Changed Sucessfully','_self');</script>";
?>