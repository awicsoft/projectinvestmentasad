<?php
require_once 'classes/database.php';
function getAdminPerfectMoneyAccount(){
		$connect = new Database();
	$run = $connect->run("SELECT `adminuser1` FROM `marchant` WHERE `name` = 'perfectmoney' ");
	$row  = mysql_fetch_array($run);
	return $row['adminuser1'];
	}
	function tellPerfectMoneyMarchantID(){
		$connect = new Database();
		$run = $connect->run("SELECT `ID` FROM `marchant` WHERE `name` = 'perfectmoney' ");
		$row  = mysql_fetch_array($run);
	return $row['ID'];
		}
	function tellPerfectMoneyUserMarchantID($userID){
		$connect = new Database();
		$marchantID = tellPerfectMoneyMarchantID();
		
		$run = $connect->run("SELECT `ID` FROM `user_marchant` WHERE `marchantID` = '$marchantID' AND `userID` = '$userID'");
		$row  = mysql_fetch_array($run);
	return $row['ID'];
		
		}
	
if (isset($_POST['PAYMENT_ID']) && isset($_POST['PAYEE_ACCOUNT']) &&  isset($_POST['PAYMENT_AMOUNT']) &&  isset($_POST['PAYMENT_UNITS']) &&  isset($_POST['PAYMENT_BATCH_NUM']) &&  isset($_POST['PAYER_ACCOUNT']) &&  isset($_POST['TIMESTAMPGMT']))
{
$passphrase = "G54MGk512TQXVRVDToqRfFROD";

		$hash= $_POST['PAYMENT_ID'].':'.$_POST['PAYEE_ACCOUNT'].':'.$_POST['PAYMENT_AMOUNT'].':'.$_POST['PAYMENT_UNITS'].':'.
      $_POST['PAYMENT_BATCH_NUM'].':'.
      $_POST['PAYER_ACCOUNT'].':'.$passphrase.':'.
      $_POST['TIMESTAMPGMT'];
$hash2=strtoupper(md5($hash));



if($hash2!=$_POST['V2_HASH']){
	  
	  
	//exit();
	}
		
 
}else exit();




$all = "";

foreach ($_POST as $key => $entry)
{
     if (is_array($entry)) {
        foreach($entry as $value) {
          $all .= $key . ": " . $value . "<br>";
        }
     } else {
        $all .= $key . ": " . $entry . "<br>";
     }
}




$PAYEE_ACCOUNT = $_POST['PAYEE_ACCOUNT'];
$PAYMENT_AMOUNT = $_POST['PAYMENT_AMOUNT'];
$PAYMENT_UNITS = $_POST['PAYMENT_UNITS'];
$PAYMENT_BATCH_NUM  = $_POST['PAYMENT_BATCH_NUM'];
$PAYER_ACCOUNT = $_POST['PAYER_ACCOUNT'];
$TIMESTAMPGMT = $_POST['TIMESTAMPGMT'];
$ORDER_NUM = $_POST['ORDER_NUM'];
$CUST_NUM = $_POST['CUST_NUM'];
$PAYMENT_ID = $_POST['PAYMENT_ID'];
$V2_HASH = $_POST['V2_HASH'];




$userID = $_POST['CUST_NUM'];
$packageID = $_POST['ORDER_NUM'];
$packageType = "daily_packages";
$userMarchantID = tellPerfectMoneyUserMarchantID($userID);
$date = date('y-m-d');
$status = "pending";
$inacount = $_POST['PAYER_ACCOUNT'].":BATCH(".$_POST['PAYMENT_BATCH_NUM'].")";
$ammount = $_POST['PAYMENT_AMOUNT'];




	$connect = new Database();




$connect->run("INSERT INTO `perfect_money_records` (
`ID` ,
`all`
)
VALUES (
NULL , '$all'
);");



	$connect->run("INSERT INTO `investments` (
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
NULL , '$packageID', '$packageType', '$userID', '$userMarchantID ', '0', '0', '$ammount', '0', '0', '', '$date', '$status', '$inacount'
);
");



?>