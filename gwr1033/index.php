<?php

require_once 'includes/upper.php';
?>
			
			<!-- END STYLE CUSTOMIZER -->
			<!-- BEGIN PAGE HEADER-->
			<h3 class="page-title">
			Dashboard <small>dashboard & statistics</small>
			</h3>
			
			<!-- END PAGE HEADER-->
			<!-- BEGIN DASHBOARD STATS -->
			
			<!-- END DASHBOARD STATS -->
			<div class="clearfix">
			</div>
			
			////////////////////////////////////////////////
			<div class="row">
				<div class="col-lg-3 col-md-3 col-sm-6 col-xs-12">
					<div class="dashboard-stat blue-madison">
						<div class="visual">
							<i class="fa fa-comments"></i>
						</div>
						<div class="details">
							<div class="number">
								 <?php
								 $connect = new Database();
								 $run = $connect->run("SELECT `status`
FROM `investments`  WHERE `status` = 'Pending'");
								 $count = 0;
								 while($row = mysql_fetch_array($run)){
								 	$count++;

								 }
								 echo $count;
								 ?>
							</div>
							<div class="desc">
								
							</div>
						</div>
						<a class="more" href="#">
						 Total No. of Pending Investment 
						</a>
					</div>
				</div>
				<div class="col-lg-3 col-md-3 col-sm-6 col-xs-12">
					<div class="dashboard-stat red-intense">
						<div class="visual">
							<i class="fa fa-bar-chart-o"></i>
						</div>
						<div class="details">
							<div class="number">
								  <?php
								 $connect = new Database();
								 $run = $connect->run("SELECT `status`
FROM `investments`  WHERE `status` = 'Active'");
								 $count = 0;
								 while($row = mysql_fetch_array($run)){
								 	$count++;

								 }
								 echo $count;
								 ?>
							</div>
							<div class="desc">
								 
							</div>
						</div>
						<a class="more" href="#">
						 Total No. of Active Investment 
						</a>
					</div>
				</div>
				<div class="col-lg-3 col-md-3 col-sm-6 col-xs-12">
					<div class="dashboard-stat green-haze">
						<div class="visual">
							<i class="fa fa-shopping-cart"></i>
						</div>
						<div class="details">
							<div class="number">
								   <?php
								 $connect = new Database();
								 $run = $connect->run("SELECT `status`
FROM `investments`  WHERE `status` = 'Completed'");
								 $count = 0;
								 while($row = mysql_fetch_array($run)){
								 	$count++;

								 }
								 echo $count;
								 ?>
							</div>
							<div class="desc">
								
							</div>
						</div>
						<a class="more" href="#">
						 Total No. of Compeleted Investment
						</a>
					</div>
				</div>
				<div class="col-lg-3 col-md-3 col-sm-6 col-xs-12">
					<div class="dashboard-stat purple-plum">
						<div class="visual">
							<i class="fa fa-globe"></i>
						</div>
						<div class="details">
							<div class="number">
								  <?php
								 $connect = new Database();
								 $run = $connect->run("SELECT `status`
FROM `investments` ");
								 $count = 0;
								 while($row = mysql_fetch_array($run)){
								 	$s = $row['status'];
								 	if($s!="Active" && $s!="Pending" && $s != "Compeleted" )
								 	$count++;

								 }
								 echo $count;
								 ?>
							</div>
							<div class="desc">
								 
							</div>
						</div>
						<a class="more" href="#">
						Total No. of Compeleted Investment
						</a>
					</div>
				</div>
			</div>



<div class="row">
				<div class="col-lg-3 col-md-3 col-sm-6 col-xs-12">
					<div class="dashboard-stat blue-madison">
						<div class="visual">
							<i class="fa fa-comments"></i>
						</div>
						<div class="details">
							<div class="number">
								 <?php
								 $connect = new Database();
								 $run = $connect->run("SELECT `status`
FROM `withdraw_history`  WHERE `status` ='Pending'");
								 $count = 0;
								 while($row = mysql_fetch_array($run)){
								 	$s = $row['status'];
								 
								 	$count++;

								 }
								 echo $count;
								 ?>
							</div>
							<div class="desc">
								
							</div>
						</div>
						<a class="more" href="#">
						Total No. of Pending Investment Withdraw Request
						</a>
					</div>
				</div>
				<div class="col-lg-3 col-md-3 col-sm-6 col-xs-12">
					<div class="dashboard-stat red-intense">
						<div class="visual">
							<i class="fa fa-bar-chart-o"></i>
						</div>
						<div class="details">
							<div class="number">
								  <?php
								 $connect = new Database();
								 $run = $connect->run("SELECT `status`
FROM `refferal_withdraw`  WHERE `status` ='Pending'");
								 $count = 0;
								 while($row = mysql_fetch_array($run)){
								 	$s = $row['status'];
								 	
								 	$count++;

								 }
								 echo $count;
								 ?>
							</div>
							<div class="desc">
								
							</div>
						</div>
						<a class="more" href="#">
						Total No. of Pending Refferal Withdraw Request
						</a>
					</div>
				</div>
				<div class="col-lg-3 col-md-3 col-sm-6 col-xs-12">
					<div class="dashboard-stat green-haze">
						<div class="visual">
							<i class="fa fa-shopping-cart"></i>
						</div>
						<div class="details">
							<div class="number">
								  <?php
								 $connect = new Database();
								 $run = $connect->run("SELECT `status`
FROM `user`  WHERE `status` ='Active'");
								 $count = 0;
								 while($row = mysql_fetch_array($run)){
								 	$s = $row['status'];
								 	
								 	$count++;

								 }
								 echo $count;
								 ?>
							</div>
							<div class="desc">
								
							</div>
						</div>
						<a class="more" href="#">
						Total Active Users
					</div>
				</div>
				
			</div>


<?php
require_once 'includes/lower.php';

?>