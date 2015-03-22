<?php

require_once 'includes/upper.php';

?>
			
			<!-- END STYLE CUSTOMIZER -->
			<!-- BEGIN PAGE HEADER-->
			<h3 class="page-title">
			Withdraw History <small>Check Your withdraw statistics from here</small>
			</h3>
			
			<!-- END PAGE HEADER-->
			<!-- BEGIN DASHBOARD STATS -->
			
			<!-- END DASHBOARD STATS -->
			<div class="clearfix">
			</div>
			
			<div class="row">
				<div class="col-md-6">
					<!-- BEGIN SAMPLE TABLE PORTLET-->
					<div class="portlet box red">
						<div class="portlet-title">
							<div class="caption">
								Investments Earning Withdarawal History
							</div>
							<div class="tools">
								
							</div>
						</div>
						<div class="portlet-body">
							<div class="table-scrollable">
								<table class="table table-hover">
								<thead>
								<tr>
										<th>
										 #
									</th>
									<th>
										 Payment Method
									</th>
									<th>
										 Account
									</th>
									<th>
										 Amount
									</th>
									<th>
										 Date
									</th>
									<th>
										 Status
									</th>
								</tr>
								</thead>
								<tbody>
								<?php 
									try{
									require_once('script/classes/withdraw_lib.php');
									require_once('script/classes/database.php');
									require_once('script/classes/investment_lib.php');
										$connection = new Database();
										$connection->DBConection();
										$userID = $_SESSION['u_id'];
									
										
										$query = "SELECT `withdraw_history`.`ID`
									FROM `withdraw_history` , `investments`
									WHERE `withdraw_history`.`investmentID` = `investments`.`ID`
									AND `investments`.`userID` = '$userID'";
										$run = mysql_query($query);
										while($row = mysql_fetch_array($run)){
										$withdraw = new Withdaraw();
										$withdraw->setID($row['ID']);
										$withdraw->loadInvestmentID();
										$withdraw->loadDate();
										$withdraw->loadAmmount();
										$withdraw->loadStatus();
										$investment = new Investment();
										
										$investment->setID($withdraw->getInvestmentID());
										$investment->loadAll();
									?>
									<tr>
										<td>
											 <?php echo $withdraw->getID();?>
										</td>
										<td>
											 <?php echo $investment->tellMarchantName();?>
										</td>
										<td>
											 <?php echo $investment->tellMarchantEmail();?>
										</td>
										<td>
											 <?php echo $withdraw->getAmmount();?>$
										</td>
										<td>
											 <?php echo $withdraw->getDate();?>
										</td>
										<td>
											<span class="label label-sm label-warning">
											<?php echo $withdraw->getStatus();?> </span>
										</td>
									</tr>
									<?php
										}

									} catch(Exception $ex){ echo "Error MEssage:".$ex->getMessage();}
									?>
								</tbody>
								</table>
							</div>
						</div>
					</div>
					<!-- END SAMPLE TABLE PORTLET-->
				</div>
				<div class="col-md-6">
					<!-- BEGIN BORDERED TABLE PORTLET-->
					<div class="portlet box yellow">
						<div class="portlet-title">
							<div class="caption">
								Refferals Earning Withdarawal History
							</div>
							<div class="tools">
								
							</div>
						</div>
						<div class="portlet-body">
							<div class="table-scrollable">
								<table class="table table-hover">
								<thead>
								<tr>
									<th>
										 #
									</th>
									<th>
										 Payment Method
									</th>
									<th>
										 Account
									</th>
									<th>
										 Amount
									</th>
									<th>
										 Date
									</th>
									<th>
										 Status
									</th>
								</tr>
								</thead>
								<tbody>
								
							 <?php 
								$userID = $_SESSION['u_id'];
								
								$connection = new Database();
								$run = $connection->run("SELECT * FROM `refferal_withdraw` WHERE `paerentID` = '$userID'");
								while($row = mysql_fetch_array($run)){	
								?>
								<tr>
									<td>
										 <?php echo $row['ID'];?>
									</td>
									<td>
										 <?php echo $row['paymentMethod'];?>
									</td>
									<td>
										 <?php echo $row['account'];?>	
									</td>
									<td>
										 <?php echo $row['ammount'];?>
									</td>
									<td>
										 <?php echo $row['date'];?>
									</td>
									<td>
										<span class="label label-sm label-danger">
										<?php echo $row['status'];?> </span>
									</td>
								</tr>
								<?php
	
								}
								?>
								</tbody>

								</table>
							</div>
						</div>
					</div>
					<!-- END BORDERED TABLE PORTLET-->
				</div>
			</div>
		
<?php

require_once 'includes/lower.php';

?>