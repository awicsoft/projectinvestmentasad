<?php

require_once 'includes/upper.php';
?>
			
			<!-- END STYLE CUSTOMIZER -->
			<!-- BEGIN PAGE HEADER-->
			<h3 class="page-title">
			Users <small>Users</small>
			</h3>
			
			<!-- END PAGE HEADER-->
			<!-- BEGIN DASHBOARD STATS -->
			
			<!-- END DASHBOARD STATS -->
			


			<div class="clearfix">
			</div>
			
			<table id="datatable_ajax"  class="table table-striped table-bordered table-hover dataTable no-footer">
			<thead>
								<tr role="row" class="heading">
									<th colspan="1" rowspan="1" aria-controls="datatable_ajax" tabindex="0" class="sorting" width="5%">
										 Record&nbsp;#
									</th>

									<th colspan="1" rowspan="1" aria-controls="datatable_ajax" tabindex="0" class="sorting" width="15%">
										investmentID
									</th>
									<th colspan="1" rowspan="1" aria-controls="datatable_ajax" tabindex="0" class="sorting" width="15%">
										 Date
									</th>
									<th colspan="1" rowspan="1" aria-controls="datatable_ajax" tabindex="0" class="sorting" width="15%">
										 Ammount
									</th>
									<th colspan="1" rowspan="1" aria-controls="datatable_ajax" tabindex="0" class="sorting" width="15%">
										 Status
									</th>
											
											

									<th colspan="1" rowspan="1" aria-controls="datatable_ajax" tabindex="0" class="sorting" width="10%">
										Actions
									</th>

								</tr>

								<tr>
									<form action="script/addNewInvestWithdraw.php" method="post">
										<td colspan="1" rowspan="1">
										</td>

										<td colspan="1" rowspan="1">
												<input class="form-control form-filter input-sm"  type="text" name=investmentID placeholder="investmentID"  >
										</td>

										<td colspan="1" rowspan="1">
												<input class="form-control form-filter input-sm"  type="text" name=date  placeholder="date"  >
										</td>	

										<td colspan="1" rowspan="1">
												<input class="form-control form-filter input-sm"  type="text" name=ammount   placeholder="ammount"  >
										</td>	

										<td colspan="1" rowspan="1">
												<input class="form-control form-filter input-sm"  type="text" name=status   placeholder="status"  >
										</td>	

											



										
											
										<td colspan="1" rowspan="1">
												<div class="margin-bottom-5">
													<input  type="submit"  class="btn btn-sm yellow filter-submit margin-bottom" value="ADD NEW"> 
												</div>
												
										</td>
									</form>
								</tr>
							<?php
									require_once '../user/script/classes/database.php';
								$connect = new Database();
								$run = $connect->run("SELECT *
FROM `withdraw_history`
ORDER BY `withdraw_history`.`investmentID` DESC ");
								while($row= mysql_fetch_array($run)){
									 
									 ?>
								 			
								<tr role="row" class="filter">
								<form  method="post" action="script/updateInvestWithDrawal.php">
								 <input type="hidden" name=ID value=<?php echo $row['ID'];?> />

								<td colspan="1" rowspan="1"><?php echo $row['ID'];?>
									</td>

									

									<td colspan="1" rowspan="1">
										INVESTMENTID:<?php echo $row['investmentID'];?> <input class="form-control form-filter input-sm" name="investmentID" type="text" value="<?php echo $row['investmentID'];?>" >
									</td>

									<td colspan="1" rowspan="1">
										<input class="form-control form-filter input-sm" name="date" type="text" value="<?php echo $row['date'];?>" >
									</td>


									<td colspan="1" rowspan="1">
										<input class="form-control form-filter input-sm" name="ammount" type="text" value="<?php echo $row['ammount'];?>" >
									</td>
									<td colspan="1" rowspan="1">
										<input class="form-control form-filter input-sm" name="status" type="text" value="<?php echo $row['status'];?>" >
									</td>
									
									<td colspan="1" rowspan="1">
										<div class="margin-bottom-5">
											<input name = "update" type="submit"  class="btn btn-sm yellow filter-submit margin-bottom" value="UPDATE"> 
										</div>
										<input name = "delete" type="submit"   class="btn btn-sm red filter-cancel" value="DELETE" />
									</td>
								</form>
								</tr>
								<?php }?>
								</thead>
			</table>
			 


<?php
require_once 'includes/lower.php';

?>