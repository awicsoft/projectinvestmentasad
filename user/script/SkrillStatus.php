<?
require_once 'classes/database.php';
$connect = new Database();
 
  
 
 

   
    
// Validate the Moneybookers signature
	function getAdminSkrillAccount(){
		$connect = new Database();
	$run = $connect->run("SELECT `adminuser1` FROM `marchant` WHERE `name` = 'skrill' ");
	$row  = mysql_fetch_array($run);
	return $row['adminuser1'];
	}
	function tellSkrillMoneyMarchantID(){
		$connect = new Database();
		$run = $connect->run("SELECT `ID` FROM `marchant` WHERE `name` = 'skrill' ");
		$row  = mysql_fetch_array($run);
	return $row['ID'];
		}
	function tellSkrillMoneyUserMarchantID($userID){
		$connect = new Database();
		$marchantID = tellSkrillMoneyMarchantID();
		
		$run = $connect->run("SELECT `ID` FROM `user_marchant` WHERE `marchantID` = '$marchantID' AND `userID` = '$userID'");
		$row  = mysql_fetch_array($run);
	return $row['ID'];
		
		}
$MBEmail =getAdminSkrillAccount();

// Ensure the signature is valid, the status code == 2,
// and that the money is going to you
if ($_POST['status'] == 2
    && $_POST['pay_to_email'] == $MBEmail)
{
	$merchant_id = $_POST['merchant_id'];
	$transaction_id = $_POST['transaction_id'];
	$mb_amount = $_POST['amount'];
	$mb_currency = $_POST['currency'];
	
  $status = "Compeleted";
  
  $userID =$_GET['id'];
  $date = date('y-m-d');
  $inacount = $_POST['pay_from_email'];
  $userMarchantID =  tellSkrillMoneyUserMarchantID($userID);
;
  $connect->run("INSERT INTO `skrillstatus` (`ID`, `merchant_id`, `transaction_id`, `mb_amount`, `mb_currency`, `status`, `Field1`) VALUES (NULL, '$merchant_id', '$transaction_id', '$mb_amount', '$mb_currency', '$status', '$userID');");
  
  $connect->run("INSERT INTO `investments` (`ID`, `packageID`, `package_type`, `userID`, `user_marchantID`, `earned`, `withdraw`, `deposit`, `profits`, `loss`, `last_increment_date`, `start_date`, `status`, `inacount`) VALUES (NULL, '1', 'daily_packages', ' $userID', '$userMarchantID ', '0', '0', '$mb_amount', '0', '0', '', ' $date', 'pending', '$inacount');");
}
else
{
    // Invalid transaction. Bail out
    exit;
}
?>