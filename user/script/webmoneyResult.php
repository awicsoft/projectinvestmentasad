<?php
require_once 'classes/database.php';
$connect = new Database();

	if(!isset($_POST['LMI_PAYEE_PURSE']) || $_POST['LMI_PAYEE_PURSE'] !=  getAdminWebMoneyAccount() )
	{
		
		exit();
		}

if(isset($_POST['LMI_PREREQUEST'])){
$LMI_PREREQUEST = $_POST['LMI_PREREQUEST'];
$LMI_PAYMENT_AMOUNT = $_POST['LMI_PAYMENT_AMOUNT'];
$LMI_PAYMENT_NO = $_POST['LMI_PAYMENT_NO'];
$LMI_PAYEE_PURSE = $_POST['LMI_PAYEE_PURSE'];
$LMI_MODE = $_POST['LMI_MODE'];
$LMI_PAYER_PURSE = @$_POST['LMI_PAYER_PURSE'];
$LMI_PAYER_WM = $_POST['LMI_PAYER_WM'];

$LMI_SECRET_KEY= $_POST['LMI_SECRET_KEY'];

$connect->run("INSERT INTO  `webmoney_records` (
`ID` ,
`LMI_PREREQUEST` ,
` LMI_PAYMENT_AMOUNT` ,
`LMI_PAYMENT_NO` ,
`LMI_PAYEE_PURSE` ,
`LMI_MODE` ,
`LMI_PAYER_PURSE` ,
`LMI_PAYER_WM` 
 
)
VALUES (
NULL ,  '$LMI_PREREQUEST',  '$LMI_PAYMENT_AMOUNT',  '$LMI_PAYMENT_NO',  '$LMI_PAYEE_PURSE',  '$LMI_MODE',  '$LMI_PAYER_PURSE',  '$LMI_PAYER_WM'
);");
	echo "Yes";
	
	}
	
	
if(isset($_POST['LMI_PAYMENT_AMOUNT']) && isset($_POST['LMI_PAYMENT_NO'])&& isset($_POST['LMI_PAYEE_PURSE']) && isset($_POST['LMI_MODE'])&& isset($_POST['LMI_SYS_INVS_NO']) && isset($_POST['LMI_SYS_TRANS_NO']) && isset($_POST['LMI_PAYER_PURSE'])&& isset($_POST['LMI_PAYER_WM'])&& isset($_POST['LMI_SYS_TRANS_DATE'])&& isset($_POST['LMI_HASH']))
{
	$LMI_PAYMENT_AMOUNT = $_POST['LMI_PAYMENT_AMOUNT'];	
	$LMI_PAYMENT_NO = $_POST['LMI_PAYMENT_NO'];	
	$LMI_PAYEE_PURSE = $_POST['LMI_PAYEE_PURSE'];	
	$LMI_MODE = $_POST['LMI_MODE'];	
	$LMI_SYS_INVS_NO = $_POST['LMI_SYS_INVS_NO'];	
	$LMI_SYS_TRANS_NO = $_POST['LMI_SYS_TRANS_NO'];	
	$LMI_PAYER_PURSE = $_POST['LMI_PAYER_PURSE'];	
	$LMI_PAYER_WM = $_POST['LMI_PAYER_WM'];	
	$LMI_SYS_TRANS_DATE = $_POST['LMI_SYS_TRANS_DATE'];	
	$LMI_HASH = $_POST['LMI_HASH'];	
$connect->run("INSERT INTO  `webmoney_records` (
`ID` ,
` LMI_PAYMENT_AMOUNT` ,
`LMI_PAYMENT_NO` ,
`LMI_PAYEE_PURSE` ,
`LMI_MODE` ,
`LMI_PAYER_PURSE` ,
`LMI_PAYER_WM` ,
`LMI_SYS_INVS_NO` ,
`LMI_SYS_TRANS_NO` ,
`LMI_SYS_TRANS_DATE`
 
)
VALUES (
NULL ,  '$LMI_PAYMENT_AMOUNT',  '$LMI_PAYMENT_NO',  '$LMI_PAYEE_PURSE',  '$LMI_MODE',  '$LMI_PAYER_PURSE',  '$LMI_PAYER_WM', '$LMI_SYS_INVS_NO', '$LMI_SYS_TRANS_NO', '$LMI_SYS_TRANS_DATE'
);");
}
$userID = $LMI_PAYMENT_NO;
$userMarchantID = tellWebMoneyUserMarchantID($userID);
$deposit = $LMI_PAYMENT_AMOUNT;
$date = date('y-m-d');
$inacount = $LMI_PAYER_WM." Purse:".$LMI_PAYER_PURSE;
$connect->run("INSERT INTO  `investments` (
`ID` ,
`packageID` ,
`package_type` ,
`userID` ,
`user_marchantID` ,
`earned` ,
`withdraw` ,
`deposit` ,
`profits` ,
`loss` ,
`last_increment_date` ,
`start_date` ,
`status` ,
`inacount`
)
VALUES (
NULL ,  '1',  'daily_packages',  '$userID',  '$userMarchantID',  '0',  '0',  'deposit',  '0',  '0',  '',  '$date',  'pending',  '$inacount'
);");
function getAdminWebMoneyAccount(){
		$connect = new Database();
	$run = $connect->run("SELECT `adminuser1` FROM `marchant` WHERE `name` = 'webmoney' ");
	$row  = mysql_fetch_array($run);
	return $row['adminuser1'];
	}
		function tellWebMoneyMoneyMarchantID(){
		$connect = new Database();
		$run = $connect->run("SELECT `ID` FROM `marchant` WHERE `name` = 'webmoney' ");
		$row  = mysql_fetch_array($run);
	return $row['ID'];
		}
	function tellWebMoneyUserMarchantID($userID){
		$connect = new Database();
		$marchantID = tellWebMoneyMoneyMarchantID();
		
		$run = $connect->run("SELECT `ID` FROM `user_marchant` WHERE `marchantID` = '$marchantID' AND `userID` = '$userID'");
		$row  = mysql_fetch_array($run);
	return $row['ID'];
		
		}
?>