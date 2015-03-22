<?php

require_once 'includes/upper.php';

?> 
			
			<!-- END STYLE CUSTOMIZER -->
			<!-- BEGIN PAGE HEADER-->
			<h3 class="page-title">
			Withdraw Money <small>Withdraw Requests & Statistics</small>
			</h3>
			
			<!-- END PAGE HEADER-->
			<!-- BEGIN DASHBOARD STATS -->
			
			<!-- END DASHBOARD STATS -->
			<div class="clearfix">
			</div>
			
			
	<div class="portlet box blue">
							<div class="portlet-title">
								<div class="caption">
									
									Withdraw table
								</div>
								<div class="tools">
									
								
								</div>
							</div>
							<div class="portlet-body">
								<div class="table-scrollable">
								
							

					<table id="datatable_ajax" class="table table-striped table-bordered table-hover dataTable no-footer">
					<thead>
										<tr role="row" class="heading">
											<th colspan="1" rowspan="1" aria-controls="datatable_ajax" tabindex="0" class="sorting" width="5%">
												 Record&nbsp;#
											</th>

											<th colspan="1" rowspan="1" aria-controls="datatable_ajax" tabindex="0" class="sorting" width="15%">
												Start Date
											</th>
											<th colspan="1" rowspan="1" aria-controls="datatable_ajax" tabindex="0" class="sorting" width="15%">
												Payment Method
											</th>
											<th colspan="1" rowspan="1" aria-controls="datatable_ajax" tabindex="0" class="sorting" width="10%">
												Earned
											</th>
													
											<th colspan="1" rowspan="1" aria-controls="datatable_ajax" tabindex="0" class="sorting" width="10%">
												Withdrawn
											</th>
											<th colspan="1" rowspan="1" aria-controls="datatable_ajax" tabindex="0" class="sorting" width="10%">
												Withdrawable
											</th>
											<th colspan="1" rowspan="1" aria-controls="datatable_ajax" tabindex="0" class="sorting" width="15%">
												Request Withdraw
											</th>
											

										</tr>
										   <?php 
													require_once('script/classes/investment_lib.php');
												
													$connect = new Database();
													$connect->DBConection();
												
													$userID = $_SESSION['u_id'];
													//$userID = 12;
													$query = "SELECT `ID` FROM `investments` WHERE `userID` = '$userID'";
													$run = mysql_query($query);
													while($row = mysql_fetch_array($run)){
														$investment = new Investment();
														$investment->setID($row['ID']);
														
														
														$investment->loaduserMarchantID();
														$investment->loadstartDate();
														$investment->loadearned();
														$investment->loadwithdraw();
											?>

										<tr>
											
												<td colspan="1" rowspan="1">
													<?php echo $row['ID'];?>
												</td>
												<td colspan="1" rowspan="1"><?php echo $investment->getStartDate();?>
												</td>
												<td colspan="1" rowspan="1"><?php echo $investment->tellMarchantName();?>
												</td>
												<td colspan="1" rowspan="1"><?php echo $investment->getEarned();?>
												</td>
												<td colspan="1" rowspan="1"><?php echo $investment->getWithdraw();?>
												</td>
												<td colspan="1" rowspan="1"><?php echo $investment->tellWithdrawable();?>
												</td>

												
													
												<td colspan="1" rowspan="1">
														<div class="margin-bottom-5">
															<a href="requestWithdrawn.php?ID=<?php echo $row['ID'];?>" class="btn btn-sm yellow filter-submit margin-bottom">Send Request</a>
														</div>
														
												</td>
											
										</tr>
									<?php }?>
																	 			
										
									</thead>
					</table>
					</div>
				</div>
	</div>
<?php

require_once 'includes/lower.php';

?>