<?php

require_once 'includes/upper.php';

?>
			
			<!-- END STYLE CUSTOMIZER -->
			<!-- BEGIN PAGE HEADER-->
			<h3 class="page-title">
			Your Refferals <small>Get a perfect Recod of Your Refferal Earnings</small>
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
											
											<th colspan="1" rowspan="1" aria-controls="datatable_ajax" tabindex="0" class="sorting" width="15%">
												Refferal ID
											</th>
											<th colspan="1" rowspan="1" aria-controls="datatable_ajax" tabindex="0" class="sorting" width="15%">
												Status
											</th>
											<th colspan="1" rowspan="1" aria-controls="datatable_ajax" tabindex="0" class="sorting" width="10%">
												Commission
											</th>
													
											
											

										</tr>
										 <?php 
										 	require_once 'script/classes/database.php';
											require_once 'script/classes/refferal_lib.php';
												$connect = new Database();
												$connect->DBConection();
												$comm = new RefCommision();
												$userID = $_SESSION['u_id'];
												$total = 0;
												
												$run = $connect->run("SELECT `user`.`ID` , `user`.`status` , `ref_commision`.`commision`
											FROM `user` , `ref_commision`
											WHERE `user`.`parentID` = `ref_commision`.`parentID`
											AND `user`.`ID` = `ref_commision`.`userID`
											AND `user`.`parentID` = '$userID'");
												while($row = mysql_fetch_array($run)){
													
										?>

										<tr>
										  <td class=item><?php echo $row['ID']?></td>
										  <td class=item><?php if($row['status'] == "1") {?><lable style="color:#090;">Active</label>
										  				<?php } else { ?><lable style="color:#C30;">Deactive</label><?php }?>
										  </td>
										  <td  class=item>$<?php echo $row['commision'];?></td>
										</tr>
										<?php 	$total += $row['commision']; }?>
										<tr>
										<td></td>		
										  <td class=item>Total referral commission: </td>
										  
										  <td class=item>$<?php echo $total;?></td>
										</tr>

<?php 
	
	?>
																	 			
										
									</thead>
					</table>
					</div>
				</div>
	</div>
<?php

require_once 'includes/lower.php';

?>