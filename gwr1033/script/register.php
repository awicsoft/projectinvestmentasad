
<?php
		session_start();

   require_once 'user/script/classes/database.php';
  	$connect = new Database();
	
    require_once 'include/incryption.php';

	require_once 'user/script/acount_functions.php';
	
	$name =$_POST["fullname"] ;
	$username = $_POST["username"];
	$password =$_POST["password"];
 
	$email =  $_POST["email"] ; 		

 $connect->DBConection();
 	$query = "select * from user where username = '$username'";
			
			$run = mysql_query($query);
			$row  = mysql_fetch_array($run);
			if($row>0)
			{
			
		 	echo "<script>window.open('signup.php?action=Bank%20Wire&message=Already Registered','_self')</script>";
				exit();
			}
	  if( empty($name) || empty($username) || empty($password) || empty($email))
	  {
	  	echo "<script>window.open('signup.php?message=* Fields are Mandotory','_self')</script>";
				exit();
	  }
		else{
			
			
			$date = date("d-m-y");
			$password = incrypt($password);
			$parent = @$_SESSION['ref'];
		echo 	$parent = toUserID($parent);
		 $connect->DBConection();
				$query = "INSERT INTO `user` (`ID`, `username`, `password`, `name`, `email`, `regDate`, `status` , `parentID`) VALUES (NULL, '$username', '$password', '$name', '$email', '$date','-1' , '$parent');";
				
				$run = mysql_query($query);
				$query = "select `ID` from `user` where `username` = '$username'";
				$run = mysql_query($query);
				$row = mysql_fetch_array($run);
				$userID = $row['ID'];
				
				  $connect->run("INSERT INTO `ref_commision` (`ID`, `parentID`, `userID`, `commision`, `date`) VALUES (NULL, '$parent', '$userID', '0.0', '$date');");
			
				
				 insertUserMarchants($userID);
				 	echo "<script>window.open('signup.php?action=Bank%20Wire&message=Registered Sucessfully','_self')</script>";
				
			
			}
				
			  
 	
function insertUserMarchants($userID){
		$connect = new Database();
		$connect->DBConection();
		$run = $connect->run("SELECT `ID` FROM `marchant`");
		while($row = mysql_fetch_array($run)){
			$marchantID = $row['ID'];
			$connect->run("INSERT INTO `user_marchant` (`ID`, `userID`, `marchantID`, `username1`, `username2`) VALUES (NULL, '$userID', '$marchantID', '', '');");
			}
		$connect->closeDBConnection();
}

	
?>