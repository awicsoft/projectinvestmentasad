<?php include 'script/acount_functions.php';?>
<?php include '../include/public_functions.php';?>

<?php session_start();
	if(!isset($_SESSION['u_id']))
	echo"<script>window.open('index.php','_self')</sctipt>";
 ?>

<?php

	 
include 'script/classes/database.php';
  	$connect = new Database();
	 $connect->DBConection();	
	 $userID = $_SESSION['u_id'];
	$packageId = mysql_real_escape_string( $_POST["package"] );
	$investement =  mysql_real_escape_string( $_POST["amount"] );
	$paymentMethod = mysql_real_escape_string( $_POST["type"] );
	if(empty($userID) || empty($packageId) || empty($investement) ||empty($paymentMethod))
		{
			echo "<script>window.open('deposit.php?message=Empty form detected','_self')</script>";
	exit();
		}
	$query = "SELECT * FROM `packages` where id = '$packageId' ;";
	$run = mysql_query($query);
	$row = mysql_fetch_array($run);
	$minDeposit = $row['min_deposit'];
	
	$status = $row['status'];
	if($status != "1")
	{
		
			echo "<script>window.open('deposit.php?message=Package is not Active to Buy','_self')</script>";
	exit();
	
	}
	
	if($investement < $minDeposit)
	{
		echo "<script>window.open('deposit.php?message=Amout must be greator then minimuim deposit','_self')</script>";
	exit();
		
	}
	$date = date("y-m-d");
	$query = "INSERT INTO `hyip`.`user_packages` (`id`, `userID`, `packageID`, `invested`, `earned`, `status`, `buyDate`, `startDate`, `payment_method`) VALUES (NULL, '$userID', '$packageId', '$investement', '0', 'Pending', '$date', '0000-00-00', '$paymentMethod');";
	
	$run = mysql_query($query);
	echo "<script>window.open('index.php?message=Sucessfully Deposit','_self')</script>";
	
?>