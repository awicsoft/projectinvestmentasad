<?php
		session_start();

   require_once 'user/script/classes/database.php';
  	$connect = new Database();
	
    require_once 'include/incryption.php';

	require_once 'user/script/acount_functions.php';
	
	$name =$_POST["fullname"] ;
	$username = $_POST["username"];
	$password =$_POST["password"];
 $password2 = $_POST["password2"];

	$email =  $_POST["email"] ; 
$email1 =  $_POST["email1"] ; 

 if( empty($name) || empty($username) || empty($password) || empty($password2) || empty($email) || empty($email1))
	  {
	  	echo "<script>window.open('signup.php?message=* Fields are Mandotory&name=$name&username=$username&email=$email','_self')</script>";
				exit();
	  }
	
 if( $password != $password2)
	  {
	  	echo "<script>window.open('signup.php?message=Both password Not Matched&name=$name&username=$username&email=$email','_self')</script>";
				exit();
	  }
	if( $email != $email1)
	  {
	  	echo "<script>window.open('signup.php?message=Both password Not Matched&name=$name&username=$username&email=$email','_self')</script>";
				exit();
	  }


 $connect->DBConection();
			
			$run = 	 $connect->run("select * from user where username = '$username'");

			$row  = mysql_fetch_array($run);
			if($row>0)
			{
			
		 	echo "<script>window.open('signup.php?action=Bank%20Wire&message=Username Already Registered','_self')</script>";
				exit();
			}
			$run = 	 $connect->run("select * from user where email = '$email'");

			$row  = mysql_fetch_array($run);
			if($row>0)
			{
			
		 	echo "<script>window.open('signup.php?action=Bank%20Wire&message=Email Already Registered','_self')</script>";
				exit();
			}
	 
			
			
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