<?php
session_start();
function tellPackageType($packageID){
	if($packageID==1)
	return "daily_packages";
	}
	require_once('acount_functions.php');
	try{
	require_once('classes/investment_lib.php');
	$userID = $_SESSION['u_id'];
	$packageID = $_POST['packageID'];
	$investedamount = $_POST['ammount'];
	$marchantID = $_POST['marchantID'];
	$userMarchantID = tellUserMarchantAvialable($marchantID,$userID);
	$startDate = date("y-m-d");
	
	/////////////////////////////////////////////////////
	$investment = new Investment();
	$investment->setDeposit($investedamount);
	$investment->setUserID($userID);
	$investment->setpackageID($packageID);
	$investment->setStartDate($startDate);
	$investment->setUserMarchantID($userMarchantID);
	$investment->setStatus("Active");
	$investment->setpackageType(tellPackageType($packageID));
	$investment->insert();
	
	///On active refferal commision check
	$investment->giveParentOnActiveComm();
	
	
	$investment->activeUserStatus();
	echo "<script>window.open('../index.php?message=Investment has been Deposited','_self')</script>";
	}catch(Exception $ex){
		$messgae = $ex->getMessage();
		
	echo "<script>window.open('../deposit.php?message=Error has been Occured: $messgae','_self')</script>";
		
		}
	
?>