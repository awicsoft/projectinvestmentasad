<?php

		session_start();
if(isset($_SESSION['u_id'])) {echo "<script>window.open('index.php','_self');</script>"; exit();}
  include 'user/script/classes/database.php';
  	$connect = new Database();
	 $connect->DBConection();
    include 'include/incryption.php';

	
	$username = mysql_real_escape_string( $_POST["username"] );
	$password =  mysql_real_escape_string($_POST["password"] );
 	

 
	  if(  empty($username) || empty($password))
	  {
	  	echo "<script>window.open('login.php?message=* Fields are Mandotory','_self')</script>";
				exit();
	  }
		else{
			
			
			
			$password = incrypt($password);
			$username = bin2hex($username);
			$password = bin2hex($password);
			
				$query = "select  * from user where username = UNHEX('$username') AND password = UNHEX('$password')";
				$run = mysql_query($query);
				$row  = mysql_fetch_array($run);
					if($row>0){
				 	$_SESSION['u_id']=$row['ID'];
					echo "<script>window.open('user/index.php','_self')</script>";
					}
					else {
						
					echo "<script>window.open('login.php?message=Invalid Details ','_self')</script>";
	
						}
			
			}
				
			  
 	


	
?>