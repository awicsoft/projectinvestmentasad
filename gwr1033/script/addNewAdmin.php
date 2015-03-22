<?php

//require_once 'checks1.php';

$username = $_POST['username'];
$password =  $_POST['password'];
$users = $_POST['users'];
$withdraw = $_POST['withdraw'];
$setpercantage = $_POST['setpercantage'];
$setpaymentprocessor = $_POST['setpaymentprocessor'];
$message = $_POST['message'];

if(empty($username) ||  empty($password)  || ($users!=1 && $users!=0)  || ($withdraw!=1 && $withdraw!=0) || ($setpercantage!=1 && $setpercantage!=0) || ($setpaymentprocessor!=1 && $setpaymentprocessor!=0)  || ($message!=1 && $message!=0) )
{	
echo "<script>window.open('../admin.php?message=Wrong Details','_self');</script>";
exit();

}
$usermarchant = 0;
$refferalsAndCommisions = 0;
$investments = 0;
$refferalWithdraw = 0;
$investmentWithdraw = 0;
$readMessage = 0;
$admin = 0;
$inbox = 0;
$deleteMessage = 0;
$changePassword = 1;
$index = 1;
$addNewInvest = 0;
$addNewInvestWithdraw = 0;
$addNewMarchant = 0;
$addNewRefComm = 0;
$addNewRefWithdraw = 0;

$updateRefComm = 0; 
$updateInvestWithDrawal = 0;
$updateMarchant = 0;
$updateInvestment =0;
$updateRefWithDrawal = 0;
$updateUsers=0;


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




require_once '../../user/script/classes/database.php'; 
require_once '../../include/incryption.php'; 
$connect = new Database();
$password = incrypt($password);
$connect->run("INSERT INTO `admin` (
`ID` ,
`users` ,
`userMarchant` ,
`refferalsAndCommisions` ,
`investments` ,
`refferalWithdraw` ,
`investmentWithdraw` ,
`setPercantage` ,
`setPaymentProcessor` ,
`user` ,
`pass` ,
`readMessage` ,
`admin` ,
`inbox` ,
`deleteMessage` ,
`changePassword` ,
`index` ,
`addNewInvest` ,
`addNewInvestWithdraw` ,
`addNewMarchant` ,
`addNewRefComm` ,
`addNewRefWithdraw` ,
`updateInvestment` ,
`updateInvestWithDrawal` ,
`updateMarchant` ,
`updateRefComm` ,
`updateRefWithDrawal` ,
`updateUsers`
)
VALUES (
NULL , '$users', '$usermarchant', '$refferalsAndCommisions',
 '$investments', '$refferalWithdraw', '$investmentWithdraw', '$setpercantage', '$setpaymentprocessor', '$username', '$password', '$readMessage', '0', '$inbox', '$deleteMessage', '$changePassword', '1', '$addNewInvest', '$addNewInvestWithdraw', '$addNewMarchant', '$addNewRefComm', '$addNewRefWithdraw', '$updateInvestment', '$updateInvestWithDrawal', '$updateMarchant', '$updateRefComm', '$updateRefWithDrawal', '$updateUsers'
);
");

echo "<script>window.open('../admin.php?message=Added','_self');</script>";

?>