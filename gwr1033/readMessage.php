

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



  require_once '../user/script/classes/database.php';
									     $connect = new Database();
									     $userID =  $recieverID  =0;
									     $connect->run("UPDATE `message` SET `flag` = '1' WHERE  `senderID` != '0' AND `ID` = '$ID'");
									 
									     $run = $connect->run("SELECT * FROM `message` WHERE `ID` = '$ID'  ");
										$row = mysql_fetch_array($run);


									$senderID = $row['senderID'];
									$recieverID = $row['receiverID'];
									if($userID == $senderID || $userID == $recieverID)
									{
										;
									}
									else{
										exit();

									}

									$title1=	$title = $row['title'];
									$message1=	$message = $row['details'];


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
									<h3>FROM:<?php if($senderID!=0) echo $senderID; else echo "ADMIN"?></h3>
									<h3>TO:<?php echo $recieverID;?></h3>
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
			

			





<?php  ?>




<div class="tab-pane active" id="tab_5">
								<div class="portlet box blue ">
									<div class="portlet-title">
										<div class="caption">
											<i class="fa fa-gift"></i>Reply
										</div>
										<div class="tools">
											
										</div>
									</div>
									<div class="portlet-body form">
										<!-- BEGIN FORM-->
										<form action="" method="post" class="form-horizontal form-bordered">
											<div class="form-body">
												
												

												<div class="form-group">
													<label class="control-label col-md-3">Message Body</label>
													<div class="col-md-9">
													
														<textarea id="console" rows="8" style="width: 70%" name="message" class="form-control"></textarea>
													</div>
												</div>

											</div>
											<div class="form-actions">
												<div class="row">
													<div class="col-md-offset-3 col-md-9">
														<button type="submit" name="send" class="btn green"><i class="fa fa-check"></i> SEND REPLY</button>
													
													</div>
												</div>
											</div>
										</form>
										<?php
											if(isset($_POST['send'])){

												$title = "It is reply of message ID(".$ID.") TITLE(".$title1.")";
												$parentID = $ID;

												$details = $_POST['message'];
  											require_once '../user/script/classes/database.php';
									     $connect = new Database();
									     $sender  = 0;
									     $reciever = $senderID;
									     	$connect->run("INSERT INTO `message` (`ID`, `senderID`, `receiverID`, `title`, `details`, `parentID`, `timestamp`) VALUES (NULL, '$sender', '$reciever', '$title', '$details', '$parentID', CURRENT_TIMESTAMP);");
											
											}
										?>
										<!-- END FORM-->
									</div>
								</div>
							</div>










<?php

require_once 'includes/lower.php';

?>