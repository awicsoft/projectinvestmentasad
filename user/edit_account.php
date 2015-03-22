<?php

require_once 'includes/upper.php';

?>
			
			<!-- END STYLE CUSTOMIZER -->
			<!-- BEGIN PAGE HEADER-->
			<h3 class="page-title">
			Your Profile <small>Change & Update Your Profile here</small>
			</h3>
			
			<!-- END PAGE HEADER-->
			<!-- BEGIN DASHBOARD STATS -->
			
			<!-- END DASHBOARD STATS -->
			<div class="clearfix">
			</div>
			
		


<form method=post >
<input type=hidden name=a value=earnings>
<input type=hidden name=page value=1>


<table id="datatable_ajax" class="table table-striped table-bordered table-hover dataTable no-footer">

					
                    
                    <?php 
                   
 					require_once 'script/acount_functions.php';
                    require_once 'script/classes/database.php';
						$connect = new Database();
						$connect->DBConection();
						$userID = $_SESSION['u_id'];
						
						$email ="";
						$fname ="";
						$ego = "";
						$skrill="";
						$webmoney="";

						$pm ="";
						
						$query = "SELECT  `user`.`name` , `user`.`email` ,`user`.`mobile` , `user`.`cnic` FROM  `user` WHERE `user`.`ID` ='$userID'
";
						$run = mysql_query($query);
						
				$row = mysql_fetch_array($run);
							$fname = $row['name'];
								
							$email = $row['email'];	
							$mobile =$row['mobile'];					
							$cnic=$row['cnic'];											
						
						$query = "SELECT `marchant`.`name` , `username1`  
FROM `user_marchant` , `marchant` 
WHERE `user_marchant`.`userID` = '$userID' 
AND `user_marchant`.`marchantID` = `marchant`.`ID`
";
						$run = mysql_query($query);
							
						while($row = mysql_fetch_array($run)){
							
							if($row['name']=="skrill")
								$skrill = $row['username1'];
							if($row['name']=="perfectmoney")
								$pm = $row['username1'];	
							if($row['name']=="webmoney")
								$webmoney = $row['username1'];	
							
							}
							
						
						
						
					?>
                    <tr class="row2">
                      <td width="25%" align="left">Your Status</td>
                      
                      <td><?php echo tellAccontStatus();?></td>
                     
                    </tr>
                    
                    <tr class="row2">
                      <td width="25%" align="left">FULL NAME</td>
                      
                      <td><input  type="text" id="amount" class="form-control" name="fname" value="<?php echo $fname;?>"> </td>
                    </tr>
                    <tr class="row2">
                      <td width="25%" align="left">Email</td>
                      
                      <td><input type="text" id="amount" class="form-control" name="email" value="<?php echo $email;?>"> </td>
                    </tr>
                    <tr class="row2">
                      <td width="25%" align="left">CNIC</td>
                      
                      <td><input  type="text" id="amount" class="form-control" name="cnic" value="<?php echo $cnic;?>"> </td>
                    </tr>
                    <tr class="row2">
                      <td width="25%" align="left">Mobile Number</td>
                      
                      <td><input  type="text" id="amount" class="form-control" name="mobile" value="<?php echo $mobile;?>"> </td>
                    </tr>
                      <tr class="row2">
                      <td width="25%" align="left">Perfect Money</td>
                      
                      <td><input type="text" id="amount" class="form-control" name="pm" value="<?php  echo $pm;?>" </td>
                    </tr>
                      
                      <tr class="row2">
                      <td width="25%" align="left">Skrill</td>
                      
                      <td><input type="text" id="amount" class="form-control" name="skrill" value="<?php  echo $skrill;?>" </td>
                    </tr>
                    <tr class="row2">
                      <td width="25%" align="left">WEBMONEY</td>
                      
                      <td><input type="text" id="amount" class="form-control" name="webmoney" value="<?php  echo $webmoney;?>" </td>
                    </tr>
                     <tr  class="row2">
                    
                      
                      <td colspan="4"><p class=""><input class="form-control" type="submit" name="update" value="UPDATE"></p> </td>
                    </tr>
                    
</table>
</form>
<?php
if(isset($_POST['update'])){
	
		$fname = $_POST['fname'];
		$email = $_POST['email'];
		$pm = $_POST['pm'];
		$skrill = $_POST['skrill'];
		$webmoney = $_POST['webmoney'];
		$mobile = $_POST['mobile'];
		$cnic = $_POST['cnic'];
		
		updateName_Email($fname,$email,$mobile,$cnic);
		updateMArchant($skrill,$pm,$webmoney);

		echo "<script>window.open('edit_account.php','_self');</script>";
		
	}
?>
<?php

require_once 'includes/lower.php';

?>