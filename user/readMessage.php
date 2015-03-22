
<?php

require_once 'includes/upper.php';

?>
			
			<!-- END STYLE CUSTOMIZER -->
			<!-- BEGIN PAGE HEADER-->
			<h3 class="page-title">
			Your Message 

			</h3>
			
			<!-- END PAGE HEADER-->
			<!-- BEGIN DASHBOARD STATS -->
			
			<!-- END DASHBOARD STATS -->
			<div class="clearfix">
			</div>
			
<?php
function make_safe($variable) 
{
   $variable = strip_tags((trim($variable)));
   return $variable; 
}
$ID =make_safe($_GET['ID']);



  require_once 'script/classes/database.php';
									     $connect = new Database();
									    $userID= $recieverID  = $_SESSION['u_id'];
     									$connect->run("UPDATE `message` SET `flag` = '1' WHERE `ID` =$ID AND `senderID` != '$recieverID' ");
									    

     									 $run = $connect->run("SELECT * FROM `message` WHERE `ID` = $ID ");
										$row = mysql_fetch_array($run);

										$title = $row['title'];
										$message = $row['details'];
									$senderID = $row['senderID'];
									$recieverID = $row['receiverID'];
									if($userID == $senderID || $userID == $recieverID)
									{
										;
									}
									else{
										exit();

									}

?> 
	<div class="portlet box red">
						<div class="portlet-title">
							<div class="caption">
								<i class="fa fa-cogs"></i>Message
							</div>
							
						</div>
						<div class="portlet-body">
							<div class="table-scrollable">
								<table class="table table-hover">
								<thead>
								<tr>
									  
									
								</tr></thead>
								<tbody>
								 									   
								<tr>
									<td>
									<h1>Title:<?php echo $title;?></h1><br />
									<p>
										Body:<br />
										<?php echo $message;?>
									</p>
									</td>
									
								</tr>
																</tbody>
								</table>
							</div>
						</div>
					</div>		
			

			
<?php

require_once 'includes/lower.php';

?>