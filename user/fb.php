<?php
	
	session_start();
	require_once("script/classes/investment_lib.php");
		require_once("script/classes/database.php");
	if(!isset($_POST['username']))
	echo "<script>window.open('index.php','_self')</script>";
	$userID = $_SESSION['u_id'];
	$username=$_POST['username'];

	
					$url =  "http://hilaalbanking.com/signup.php?ref=".$username;


				$url=	urlencode($url);

				$title = urlencode("Variable HYip");
				$details = urlencode("usama");

				$link = "https://www.facebook.com/sharer.php?u=$url&t=$title&d=$details";




$investment = new Investment();
$connect = new Database();

		$query = "SELECT `ID` FROM `investments` WHERE `userID` = '$userID' AND `status` = 'do daily work to continue'";
		
		$run = $connect->run($query);
		
	
		while($row = mysql_fetch_array($run)){
			$investment->setID($row['ID']);

			$investment->setStatus("active");

			$investment->updateStatus();
					
		}


				echo "<script>window.open('$link','_self');</script>";
			

                ?>


                <script>

                </script>