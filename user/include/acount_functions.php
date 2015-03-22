<?php
function getActiveInvestedBalnce(){
	$bal = 0.0;
		//$userID = $_SESSION['u_id'];
		//$query = "SELECT * FROM `user_packages` where `userID` = '$userID' AND `status` = 'Activated' ;";
		//$run = mysql_query($query);
		//while($row = mysql_fetch_array($run)){
			//	$e = $row['invested'];
		//		$bal += $e;	
		//	}
	return $bal;
			
			
	}
function userTop(){
	include '..\include\connect.php';
	$userID = $_SESSION['u_id'];
	$query = "select * from user where ID = '$userID'";
	$run = mysql_query($query);
	$row = mysql_fetch_array($run);
	
	?>
    <div class="top">
	
		<p class="user"><span><?php echo $row['name'];?></span><br /><br />Registration Date: <?php echo $row['regDate'];?></p>
		
				<!-- start REFERRAL -->
		<div class="referral">
		
			<p class="text">Referral Link</p>
			<p class="link">http://hilaalbanking.com/index.php?ref=<?php echo $row['username'];?></p>
		
		</div>
		<!-- end REFERRAL -->
			
	</div>
	<?php
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
				<p class="text">Available Balance</p>
			
			</div>
          
            <!-- start BALANCES -->
			<ul class="balances">
			
																																																																																																																																																																																																																																																																																																																																							
			</ul>
	<?php
	}
	function getCurrentBalance(){
		
	//$userID = $_SESSION['u_id'];
	//$query = "select `current_balance` from acount where `user_id` = '$userID' ;";
	//$run = mysql_query($query);
	//$row = mysql_fetch_array($run);
		//return 	$row['current_balance'];
		return "";
		}
function getTotalEarned(){
		$userID = $_SESSION['u_id'];
	$query = "select `earned` from acount where `user_id` = '$userID' ;";
	$run = mysql_query($query);
	$row = mysql_fetch_array($run);
	$earned = $row['earned'];
	return $earned;
	}
function loadInvestments($type){

if($type == "all"){
	
	
	?>
        <tr>
					<td align="center"><?php // echo $row['id'];?></td>
					<td align="center"><?php //  echo $row['payment_method'];?></td>
                    <td align="center"><?php //echo $row['startDate'];?></td>
                    <td align="center"><?php //echo $row['status'];?></td>
                     <td align="center"><?php //echo $row['invested'];?></td>
                    <td align="center"><a href=<?php //echo "withdraw1.php?id=".$row['id'];?>>WithDraw</a></td>
			</tr>
		<?php
}
else if($type == "withdraw_able"){
	
	?>
        <tr>
					<td align="center"><?php // echo $row['id'];?></td>
					<td align="center"><?php //  echo $row['payment_method'];?></td>
                    <td align="center"><?php //echo $row['startDate'];?></td>
                    <td align="center"><?php //echo $row['status'];?></td>
                     <td align="center"><?php //echo $row['invested'];?></td>
                    <td align="center"><a href=<?php //echo "withdraw1.php?id=".$row['id'];?>>WithDraw</a></td>
			</tr>
		<?php
	
	}
else
if($type == "withdraw_able"){ ;
	}	
	}
function investmentControl($type){
	?>
    <h3 al>INVESTMENT CONTROL</h3>
			
			<table cellpadding="0" cellspacing="0" class="noBorder">
				<tr>
					<th align="center" width="5px">ID</th>
					<th bgcolor="#000000">Payment Method</th>
                    <th>Date</th>
                    <th>Status</th>
                    <th>Amount</th>
                    <th>Details</th>
				</tr>
                <?php loadInvestments($type);?>
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

