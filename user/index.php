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
			
			
			<div class="row">
				<div class="col-lg-4 col-md-4 col-sm-6 col-xs-12 margin-bottom-10">
					<div class="dashboard-stat blue-madison">
						<div class="visual">
							<i class="fa fa-briefcase fa-icon-medium"></i>
						</div>
						<div class="details">
							<div class="number">
								$<?php echo getActiveInvestedBalnce();?>
							</div>
							<div class="desc">
								Active Investments
							</div>
						</div>
						
					</div>
				</div>
				<div class="col-lg-4 col-md-4 col-sm-6 col-xs-12">
					<div class="dashboard-stat red-intense">
						<div class="visual">
							<i class="fa fa-shopping-cart"></i>
						</div>
						<div class="details">
							<div class="number">
								 $<?php echo getCurrentBalance();?>
							</div>
							<div class="desc">
								 Withdrawable Balance
							</div>
						</div>
						
					</div>
				</div>
				<div class="col-lg-4 col-md-4 col-sm-6 col-xs-12">
					<div class="dashboard-stat green-haze">
						<div class="visual">
							<i class="fa fa-group fa-icon-medium"></i>
						</div>
						<div class="details">
							<div class="number">
							$<?php echo getTotalEarned();?>
							</div>
							<div class="desc">
								Total Earned
							</div>
						</div>
						
					</div>
				</div>
			</div>


			<div class="portlet box blue-steel">
						<div class="portlet-title">
							<div class="caption">
								<i class="fa fa-thumb-tack"></i>Investment Overview
							</div>
							<div class="tools">
								
							</div>
						</div>
						<div class="portlet-body">
							<div class="tabbable-line">
								<ul class="nav nav-tabs">
									<li class="active">
										<a href="#overview_1" data-toggle="tab">
										Active Investments </a>
									</li>
									<li>
										<a href="#overview_2" data-toggle="tab">
										Pending Investments </a>
									</li>
									<li>
										<a href="#overview_3" data-toggle="tab">
										Other Investments</a>
									</li>
									
								</ul>
								<div class="tab-content">
									<div class="tab-pane active" id="overview_1">
										<div class="table-responsive">
											<?php investmentControl("Active");?>
										</div>
									</div>
									
									<div class="tab-pane" id="overview_3">
										<div class="table-responsive">
											<?php investmentControl("other");?>
										</div>
									</div>
									<div class="tab-pane" id="overview_2">
										<div class="table-responsive">
											<?php investmentControl("pending");?>
										</div>
									</div>
									
								</div>
							</div>
						</div>
					</div>
<?php

require_once 'includes/lower.php';

?>