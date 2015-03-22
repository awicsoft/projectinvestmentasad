<?php
require_once '../../user/script/classes/database.php'; 
require_once '../../include/incryption.php'; 
//require_once 'checks1.php';
$ID = $_POST['ID'];


$username = $_POST['username'];
//$password =  $_POST['password'];
$users = $_POST['users'];
$withdraw = $_POST['withdraw'];
$setpercantage = $_POST['setpercantage'];
$setpaymentprocessor = $_POST['setpaymentprocessor'];
$message = $_POST['message'];

if(isset($_POST['delete'])){

$connect = new Database();

$connect->run("DELETE FROM `admin` WHERE `admin`.`ID` = $ID");
echo "<script>window.open('../admin.php','_self');</script>";
exit();	

}


$usermarchant = $users;
$refferalsAndCommisions = $users;
$investments =  $users;
$refferalWithdraw = $withdraw;
$investmentWithdraw = $withdraw;
$readMessage = $message;
$admin = $message;
$inbox = $message;
$deleteMessage = $message;
$changePassword = 1;
$index = 1;
$addNewInvest = $users;
$addNewInvestWithdraw = $users;
$addNewMarchant = $users;
$addNewRefComm = $users;
$addNewRefWithdraw = $users;

$updateRefComm = $users; 
$updateInvestWithDrawal = $users;
$updateMarchant = $users;
$updateInvestment =$users;
$updateRefWithDrawal = $users;
$updateUsers=$users;


$updateUsers=$users;

$addNewMarchant = $users;
$updateMarchant = $users;

	$usermarchant=$users;
	$refferalsAndCommisions=$users;
$addNewRefComm = $users;
$updateRefComm = $users; 

	$investments=$users;

	$addNewInvest =$users;
	$updateInvestment=$users;



	$refferalWithdraw =$withdraw ;
$addNewRefWithdraw=$withdraw ;	
$updateRefWithDrawal = $withdraw ;
$investmentWithdraw =$withdraw ;
$updateInvestWithDrawal  =$withdraw ;
$addNewInvestWithdraw = $withdraw ;





	$inbox=$message;
	$readMessage=$message;
	$deleteMessage=$message;





$connect = new Database();

//$row  = $connect->giveRow("SELECT `password` FROM `admin` WHERE `ID` = '$ID'");
//$pass1 = $row['password'];
//if($pass1 != $password)
//	$password = incrypt($password);

$connect->run("UPDATE `admin` SET `users` = '0',
`index` = '1',
`userMarchant` = '$usermarchant',
`refferalsAndCommisions` = '$refferalsAndCommisions',
`investments` = '$investments',
`refferalWithdraw` = '$refferalWithdraw',
`investmentWithdraw` = '$investmentWithdraw',
`setPercantage` = '$setpercantage',
`setPaymentProcessor` = '$setpaymentprocessor',
`readMessage` = '$readMessage',
`inbox` = '$inbox',
`deleteMessage` = '$deleteMessage',
`addNewInvest` = '$addNewInvest',
`addNewInvestWithdraw` = $addNewInvestWithdraw,
`addNewMarchant` = '$addNewMarchant',
`addNewRefComm` = '$addNewRefComm',
`addNewRefWithdraw` = '$addNewRefWithdraw',
`updateInvestment` = '$updateInvestment',
`updateInvestWithDrawal` = '$updateInvestWithDrawal',
`updateMarchant` = '$updateMarchant',
`updateRefComm` = '$updateRefComm',
`updateRefWithDrawal` = '$updateRefWithDrawal',
`user` = '$username',
`updateUsers` = '$updateUsers' WHERE `admin`.`ID` ='$ID';");
echo "<script>window.open('../admin.php','_self');</script>";
?>