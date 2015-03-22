
<?php require_once 'acount_functions.php';?>
<?php require_once 'classes/database.php';?>
<?php require_once '../../include/public_functions.php';?>
<?php header1(); ?>
<?php 

$processor = $_POST['processor'];

$processorID = processorNameToId($processor);
$processorUserName = processorUserNameFromUserMarchent($processorID);
if(empty($processorUserName)){
	echo "<script>window.open('../withdraw.php?message=First Add This Processor into Your Account','_self')</script>";
	exit();
	}
	
$userID = $_SESSION['u_id'];

$date= date("y-m-d");

$ammount = getTotalRefferlEarning();
$status = "Pending";
$paymentMethod = $processor;
if($ammount > 0 ){

$connect = new Database();

$connect->run("INSERT INTO `refferal_withdraw` (`ID`, `paerentID`, `date`, `ammount`, `status`, `paymentMethod`, `account`) VALUES (NULL, '$userID', '$date', '$ammount', '$status', '$paymentMethod', '$processorUserName');");
$connect->run("UPDATE `ref_commision` SET `commision` = '0' WHERE `ref_commision`.`parentID` ='$userID';");
echo "<script>window.open('../withdraw_history.php?message=Requested Sucessfully','_self')</script>";
}
else {
	echo "<script>window.open('../withdraw.php?message=Insufficent Balance to Withdraw','_self')</script>";
	
	}
?>