<?php
try{
require_once('script/classes/withdraw_lib.php');
require_once('script/classes/investment_lib.php');
require_once('script/acount_functions.php');		
	$InvestmentID = $_GET['ID'];
	$investment = new Investment();
	$investment->setID($InvestmentID);
	$investment->loadAll();
	///user marchent available check here
	if(!$investment->isUserMarchantAvialable())
		throw new Exception("User Marchant Not Set Properly go to setting and add it");

	$withdraw = new Withdaraw();
	$withdraw->setDate(date("y-m-d"));	
	$withdraw->setInvestmentID($InvestmentID);
	$withdraw->setAmmount($investment->tellWithdrawable());
	$withdraw->setStatus("Pending");
	
	$investment->setWithdraw($investment->getWithdraw() + $withdraw->getAmmount());
	$investment->upadateWithdraw();
	
	
		
		
	$withdraw->insert();

echo "<script> window.open('withdraw_history.php?message=Request has been Send Sucessfully','_self')</script>";
}catch(Exception $ex){
	echo "<script> window.open('withdraw.php?message=Error Message :".$ex->getMessage()."','_self')</script>";
		
	}
	
?>