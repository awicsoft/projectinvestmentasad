<?php
session_start();
if(isset($_SESSION['a_id'])){
	echo "<script>window.open('index.php','_self');</script>";
		exit();
		
	}
?>
<!DOCTYPE html>
<!--[if lt IE 7]> <html class="lt-ie9 lt-ie8 lt-ie7" lang="en"> <![endif]-->
<!--[if IE 7]> <html class="lt-ie9 lt-ie8" lang="en"> <![endif]-->
<!--[if IE 8]> <html class="lt-ie9" lang="en"> <![endif]-->
<!--[if gt IE 8]><!--> <html lang="en"> <!--<![endif]-->
<head>
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
  <title>Login Form</title>
  <link rel="stylesheet" href="css/style.css">
  <!--[if lt IE 9]><script src="//html5shim.googlecode.com/svn/trunk/html5.js"></script><![endif]-->
</head>
<body>
  <section class="container">
    <div class="login">
      <h1>Login to ADMIN PANEL</h1>
      <form method="post" action="">
        <p><input type="text" name="login" value="" placeholder="Username or Email"></p>
        <p><input type="password" name="password" value="" placeholder="Password"></p>
        
        <p class="submit"><input type="submit" name="commit" value="Login"></p>
      </form>
    </div>
<?php 
	if(isset($_POST['commit'])){
		require_once '../user/script/classes/database.php';
        require_once '../include/incryption.php';
		$connect = new Database();
		$user = $_POST['login'];
		$pass = incrypt($_POST['password']);
		
		$run = $connect->run("SELECT `ID` FROM `admin` WHERE `user` = '$user' AND `pass` = '$pass'");
		$row = mysql_fetch_array($run);
		
		if($row > 0){
			$_SESSION['a_id'] = $row['ID'];
			
			echo "<script>window.open('index.php','_self');</script>";
			exit();
			}
		else{
			echo "<script>alert('WRONG DETAILS');</script>";
			exit();
		}
		}
?>
  
  </section>

 
</body>
</html>
