<?php

require_once 'includes/upper.php';

?>
			
			<!-- END STYLE CUSTOMIZER -->
			<!-- BEGIN PAGE HEADER-->
			<h3 class="page-title">
			MESSAGE SYSTEM <small>dashboard & statistics</small>
			</h3>
			
			<!-- END PAGE HEADER-->
			<!-- BEGIN DASHBOARD STATS -->
			
			<!-- END DASHBOARD STATS -->
			<div class="clearfix">
			</div>
			
<div class="tab-pane active" id="tab_5">
								<div class="portlet box blue ">
									<div class="portlet-title">
										<div class="caption">
											<i class="fa fa-gift"></i>Compose
										</div>
										<div class="tools">
											
										</div>
									</div>
									<div class="portlet-body form">
										<!-- BEGIN FORM-->
										<form action="" method="post" class="form-horizontal form-bordered">
											<div class="form-body">
												
												<div class="form-group">
													<label class="control-label col-md-3">Message Title</label>
													<div class="col-md-9">
														<input placeholder="title" name="title" class="form-control" type="text">
														
													</div>
												</div>

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
														<button type="submit" name="send" class="btn green"><i class="fa fa-check"></i> SEND MESSAGE TO ADMIN</button>
													
													</div>
												</div>
											</div>
										</form>



										<?php
											if(isset($_POST['send'])){
												$title = $_POST['title'];
												$details = $_POST['message'];
  											require_once 'script/classes/database.php';
									     $connect = new Database();
									     $sender  = $_SESSION['u_id'];

									     	$connect->run("INSERT INTO `message` (`ID`, `senderID`, `receiverID`, `title`, `details`, `parentID`, `timestamp`) VALUES (NULL, '$sender', '0', '$title', '$details', '0', CURRENT_TIMESTAMP);");
											
											}
										?>
										<!-- END FORM-->
									</div>
								</div>
							</div>
























		<div class="portlet box blue-steel">
						<div class="portlet-title">
							<div class="caption">
								<i class="fa fa-thumb-tack"></i>Mesaages
							</div>
							<div class="tools">
								
							</div>
						</div>
						<div class="portlet-body">
							<div class="tabbable-line">
								<ul class="nav nav-tabs">
									<li class="active">
										<a href="#overview_1" data-toggle="tab">
										Unread Messages </a>
									</li>
									<li>
										<a href="#overview_2" data-toggle="tab">
										Readed Message </a>
									</li>
									<li>
										<a href="#overview_3" data-toggle="tab">
										Sent Messages</a>
									</li>
									
								</ul>
								<div class="tab-content">
									<div class="tab-pane active" id="overview_1">
										<div class="table-responsive">
											<?php loadMessages("0");?>
										</div>
									</div>
									<div class="tab-pane" id="overview_2">
										<div class="table-responsive">
											<?php loadMessages("1");?>
										</div>
									</div>
									<div class="tab-pane" id="overview_3">
										<div class="table-responsive">
											<?php loadMessages("sent");?>
										</div>
									</div>
									
									
								</div>
							</div>
						</div>
					</div>



















							<?php

require_once 'includes/lower.php';

?>