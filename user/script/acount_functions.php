<?php require_once 'classes/database.php';

function getAdminPerfectMoneyAccount(){
		$connect = new Database();
	$run = $connect->run("SELECT `adminuser1` FROM `marchant` WHERE `name` = 'perfectmoney' ");
	$row  = mysql_fetch_array($run);
	return $row['adminuser1'];
	}
function processorUserNameFromUserMarchent($processorID){
	$connect = new Database();
	$connect->DBConection();
	$userID = $_SESSION['u_id'];
	$row = 	$connect->giveRow("SELECT  `username1` FROM `user_marchant`  WHERE `userID` = '$userID' AND `marchantID` = '$processorID'");
	
	$connect->closeDBConnection();
	return $row['username1'];
	
	
	}
		function getAdminSkrillAccount(){
		$connect = new Database();
	$run = $connect->run("SELECT `adminuser1` FROM `marchant` WHERE `name` = 'skrill' ");
	$row  = mysql_fetch_array($run);
	return $row['adminuser1'];
	}
	function getAdminWebMoneyAccount(){
		$connect = new Database();
	$run = $connect->run("SELECT `adminuser1` FROM `marchant` WHERE `name` = 'webmoney' ");
	$row  = mysql_fetch_array($run);
	return $row['adminuser1'];
	}

function processorNameToId($name){
	$connect = new Database();
	$connect->DBConection();
	$row = 	$connect->giveRow("SELECT  `ID` FROM `marchant` WHERE `name` = '$name' ");
	
	$connect->closeDBConnection();
	return $row['ID'];
	
	}
function getTotalRefferlEarning(){
	$connect = new Database();
		$total = 0;
	$userID = $_SESSION['u_id'];
	
 	$run = 	$connect->run("SELECT   `ref_commision`.`commision`
FROM `user` , `ref_commision`
WHERE `user`.`parentID` = `ref_commision`.`parentID`
AND `user`.`ID` = `ref_commision`.`userID`
AND `user`.`parentID` = '$userID'");
	while($row = mysql_fetch_array($run)){
		
		$total += $row['commision'];
		}
	return $total;
	}
function userMarchantIdToUsermarchantUsername($userMarchantID){
	$connect = new Database();
	$connect->DBConection();
	$row = $connect->giveRow("SELECT `username1` FROM  `user_marchant`  WHERE `ID` = '$userMarchantID'");
	
	$connect->closeDBConnection();
	return $row['username1'];
	
	}
function userMarchantIdToMarchantName($userMarchantID){
	
	$connect = new Database();
	$connect->DBConection();
	$row = $connect->giveRow("SELECT `marchant`.`name`  FROM `marchant` , `user_marchant` WHERE  `marchant`.`ID` =  `user_marchant`.`marchantID` AND `user_marchant`.`ID` = '$userMarchantID'");
	
	$connect->closeDBConnection();
	return $row['name'];
	
	}	
function toUserID($username){
	if(empty($username ))
		return 0;
		
		$connect = new Database();
		$connect->DBConection();
		
		$query = "SELECT `ID` FROM `user` WHERE `username` = '$username'";
		$run = mysql_query($query);
		$row = mysql_fetch_array($run);
		$connect->closeDBConnection();
		
		if($row > 0)	
			return $row['ID'];
		else return 0;
		
	}
function tellUserMarchantAvialable($marchantID,$userID){
		$connect = new Database();
		$connect->DBConection();
		
		$query = "SELECT *
FROM `user_marchant` WHERE `userID` = '$userID' AND `marchantID` = '$marchantID' ";
		$run = mysql_query($query);
		$row = mysql_fetch_array($run);
	
		
		$connect->closeDBConnection();
		
		if(empty($row['username1'])) 
		 throw new Exception("User Marchant not available Please register");
		
		return $row['ID'];
		
		}
	
function tellAccontStatus(){
	$connect = new Database();
		$connect->DBConection();
$userID = $_SESSION['u_id'];
	$query = "SELECT `status` FROM `user` WHERE `ID` = '$userID' " ;
	$run = mysql_query($query);
	$row = mysql_fetch_array($run);
	if($row['status'] == 1)
		return "<lable style='color:#090;'>Active</label>";
	if($row['status'] == -1)
		return "<lable style='color:#C30;'>Deactive</label>";
		$connect->closeDBConnection();
	}
function updateMArchant($skrill,$pm,$webmoney){
$connect = new Database();
$userID = $_SESSION['u_id'];

	$connect->run("UPDATE `user_marchant` SET `username1` = '$webmoney' WHERE `userID` ='$userID' AND `marchantID` = '4';");
	
	$connect->run("UPDATE `user_marchant` SET `username1` = '$skrill' WHERE `userID` ='$userID' AND `marchantID` = '2';");
	

	$connect->run("UPDATE `user_marchant` SET `username1` = '$pm' WHERE `userID` ='$userID' AND `marchantID` = '3';");
	
	}
function updateName_Email($name,$email,$mobile,$cnic){
	$connect = new Database();

	$userID = $_SESSION['u_id'];
	$connect->run("UPDATE `user` SET `name` = '$name' , `email` = '$email' , `mobile` = '$mobile' , `cnic` = '$cnic' WHERE `ID` ='$userID';");
	
	
	
	}
function getActiveInvestedBalnce(){
		$connect = new Database();

	
	$bal = 0.0;
		 $userID = $_SESSION['u_id'];
		
		$run = $connect->run("SELECT `deposit` FROM `investments` WHERE `userID` = '$userID' AND `status` = 'Active'");
		while($row = mysql_fetch_array($run)){ $bal += $row['deposit'];}
	return $bal;
			
			
	}
function userTop(){


  	$connect = new Database();
	 $connect->DBConection();
	 
	$userID = $_SESSION['u_id'];
	
	$run = $connect->run("select * from user where ID = '$userID'");
	$row = mysql_fetch_array($run);
	
	?>
    <div class="top">
	
		<p class="user"><span><?php echo $row['name'];?></span><br /><br />Registration Date: <?php echo $row['regDate'];?></p>
		
				<!-- start REFERRAL -->
		<div class="referral">
		
			<p class="text">Referral Link</p>
			<p class="link">http://www.camelforex.com/signup.php?ref=<?php echo $row['username'];?></p>
		
		</div>
		<!-- end REFERRAL -->
			
	</div>
	<?php
	 $connect->closeDBConnection();
	}
	function tellUserName($userID){
$connect = new Database();
	 $connect->DBConection();
	 
	$userID = $_SESSION['u_id'];
	
	$run = $connect->run("select * from user where ID = '$userID'");
	$row = mysql_fetch_array($run);
	
return $row['username'];

	}
function startMenu(){
	?>
		<ul id="menu">
		
                        <li><a href="index.php">Account Overview</a></li>
                        
                        <li><a href="deposit.php">Make A Deposit</a></li>
                        <li><a href="withdraw.php">Withdraw Money</a></li>
                       <li><a href="withdraw_history.php">Withdrawal History</a></li>
                        <li><a href="referals.php">Your Referrals</a></li>
                      
					
				
					
						
					
						<li><a href="referallinks.php">Promote Us</a></li>
						<li><a href="edit_account.php">Edit Profile</a></li>
						<li><a href="security.php">changepassword</a></li>
						<li><a href="logout.php">Logout</a></li>
		
		</ul>
	<?php
	}
function startBalance(){

	?>
		 <div class="balance">
			
				<p class="amount">$<?php echo getActiveInvestedBalnce();?></p>
				<p class="text">Active Investments</p>
			
		</div>
        
        <div class="balance" style="float:right;">
			
				<p class="amount">$<?php echo getCurrentBalance();?></p>
				<p class="text">Withdrawable Balance</p>
			
			</div>
          
            <!-- start BALANCES -->
			<ul class="balances">
			
																																																																																																																																																																																																																																																																																																																																							
			</ul>
	<?php
	}
	function getCurrentBalance(){
	
	require_once('classes/investment_lib.php');
	$userID = $_SESSION['u_id'];
	$connect = new Database();
	$twithdrawable = 0.0;
	$run = $connect->run("SELECT `ID` FROM `investments` WHERE `userID` = '$userID' ");
	
	while($row = mysql_fetch_array($run))	
	{
		$investment = new Investment();
		$investment->setID($row['ID']);
		$investment->loadAll();
	$twithdrawable+=	$investment->tellWithdrawable();	
	
	}
		return $twithdrawable;
		
		}

function getTotalEarned(){
	
	  	$connect = new Database();
	 $connect->DBConection();
	 
		$userID = $_SESSION['u_id'];
	$query = "SELECT `earned` FROM `investments` WHERE `userID` = '$userID' ;";
	$run = mysql_query($query);
	$row = mysql_fetch_array($run);
	$earned = $row['earned'];
	
	 $connect->closeDBConnection();	
	return $earned;
	}
function loadInvestments($type){
	require_once('script/classes/investment_lib.php');
	
  	$connect = new Database();
	 $connect->DBConection();

	$userID = $_SESSION['u_id'];
	if($type!="other")
	$query = "SELECT `ID` FROM `investments` WHERE `userID` = '$userID' AND `status` = '$type'";
	else
	$query = "SELECT `ID` FROM `investments` WHERE `userID` = '$userID' AND `status` != 'Active' AND `status` != 'Pending'";	
	$run = mysql_query($query);
	while($row = mysql_fetch_array($run)){
		$investment = new Investment();
		$investment->setID($row['ID']);
		
		$investment->loadAll();
		
		
			
	?>
        <tr>
        			<td><?php echo $row['ID']; ?></td>
					<td><?php echo $investment->getStartDate(); ?></td>
                    <td><?php echo $investment->tellMarchantName(); ?></td>
                    <td><?php echo $investment->getDeposit(); ?></td>
                    <td><?php echo $investment->getProfit(); ?></td> 
                    <td><?php echo $investment->getLoss(); ?></td>
                    <td><?php echo $investment->getEarned(); ?></td>
                    <td><?php echo $investment->tellWithdrawable(); ?></td>
                    <td><?php echo $investment->getStatus(); ?></td>
                
			</tr>
		<?php
	
		
}

	
	// $connect->closeDBConnection();	
	}
	






function loadMessages1($type){
	require_once('script/classes/investment_lib.php');
	
  	$connect = new Database();
	 $connect->DBConection();

	$userID = $_SESSION['u_id'];

	if( $type == "sent")
		$query = "SELECT * FROM `message` WHERE `senderID` = '$userID' ORDER BY `message`.`timestamp` DESC ";
	else
		$query = "SELECT * FROM `message` WHERE `receiverID` = '$userID' AND `flag` = '$type' ORDER BY `message`.`timestamp` DESC ";	
	


	$run = mysql_query($query);
	while($row = mysql_fetch_array($run)){
	
		
		
			
	?>
        <tr>
        			<td><?php echo $row['ID']; ?></td>
					<td><?php echo $row['title']; ?></td>
              
                    <td><?php echo $row['timestamp']; ?></td>
                  <td><a href=<?php echo "readMessage.php?ID=".$row['ID']; ?>>Read</a></td>
                
			</tr>
		<?php
	
		
}

	
	// $connect->closeDBConnection();	
	}
	





	function loadMessages($type){
	?>
    
    <table class="table table-striped table-hover table-bordered">
											<thead>
											<tr>
												<th>
													 #
												</th>
												
												<th>
													Title
												</th>
												<th>
													Date Time
												</th>
												<th>
												Read
												</th>
											</tr>
											</thead>
											<tbody>
											<?php loadMessages1($type);?>
											
											
											</tbody>
											</table>
												<?php
}	

function investmentControl($type){
	?>
    
    <table class="table table-striped table-hover table-bordered">
											<thead>
											<tr>
												<th>
													 #
												</th>
												<th>
													 Start Date
												</th>
												<th>
													 Payment Method
												</th>
												<th>
													Deposit
												</th>
												<th>
													Profit
												</th>
												<th>
													Loss
												</th>
												<th>
													Eaarned
												</th>
												<th>
													Withdrawable
												</th>
												<th>
													Status
												</th>
											</tr>
											</thead>
											<tbody>
											<?php loadInvestments($type);?>
											
											
											</tbody>
											</table>
												<?php
}	

function earningHistory(){
	?>
    <h3>Earning History</h3>
			
			<table cellpadding="0" cellspacing="0" class="noBorder">
				<tr>
					<td>Earned Total:</td>
					<td align="right">$0.00</td>
				</tr>
				<tr>
					<td>Pending Withdrawal:</td>
					<td align="right">$0.00</td>
				</tr>
				<tr>
					<td>Withdrew Total:</td>
					<td align="right">$0.00</td>
				</tr>
				<tr>
					<td>Active Deposit:</td>
					<td align="right">$0.00</td>
				</tr>
			</table>
	<?php
}
	function depositHistory(){
		?>
			<h3>Deposit and Withdrawal History</h3>
			
			<table cellpadding="0" cellspacing="0" class="noBorder">
			</table>
		<?php
		}
	
?>

