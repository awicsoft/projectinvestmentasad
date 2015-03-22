<?php



	session_start();
	if(!isset($_SESSION['a_id'])){
		echo "<script>window.open('login.php','_self');</script>";
		exit();
		
	}

function isAllow($featureName){
	$adminID = $_SESSION['a_id'];

	require_once '../../user/script/classes/database.php';
	 $connect = new Database();
  $run  = $connect->run("SELECT `$featureName` FROM `admin` WHERE `ID` = '$adminID' ");
  $row = mysql_fetch_array($run);
 // echo $featureName;	
	return $row[$featureName];

}
if(!isAllow(strtok(basename($_SERVER["REQUEST_URI"], ".php"), ".")))
{
//echo "<script>window.open('index.php','_self');</script>";
		exit();

}
?>