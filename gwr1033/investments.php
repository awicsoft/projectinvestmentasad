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

									<th colspan="1" rowspan="1" aria-controls="datatable_ajax" tabindex="0" class="sorting" width="5%">
										USER ID
									</th>
									<th colspan="1" rowspan="1" aria-controls="datatable_ajax" tabindex="0" class="sorting" width="15%">
										 user marchant ID
									</th>
									<th colspan="1" rowspan="1" aria-controls="datatable_ajax" tabindex="0" class="sorting" width="15%">
										 Earned
									</th>
											

									<th colspan="1" rowspan="1" aria-controls="datatable_ajax" tabindex="0" class="sorting" width="10%">
										WithDraw
									</th>
									<th colspan="1" rowspan="1" aria-controls="datatable_ajax" tabindex="0" class="sorting" width="10%">
										Deposit
									</th>
									<th colspan="1" rowspan="1" aria-controls="datatable_ajax" tabindex="0" class="sorting" width="10%">
										Profits
									</th>
									<th colspan="1" rowspan="1" aria-controls="datatable_ajax" tabindex="0" class="sorting" width="10%">
										Loss
									</th>
									<th colspan="1" rowspan="1" aria-controls="datatable_ajax" tabindex="0" class="sorting" width="10%">
										Start Date
									</th>
									<th colspan="1" rowspan="1" aria-controls="datatable_ajax" tabindex="0" class="sorting" width="10%">
										Status
									</th>
									<th colspan="1" rowspan="1" aria-controls="datatable_ajax" tabindex="0" class="sorting" width="20%">
										
									</th>
									<th colspan="1" rowspan="1" aria-controls="datatable_ajax" tabindex="0" class="sorting" width="20%">
										Actions
									</th>

								</tr>

								<tr>
									<form action="script/addNewInvest.php" method="post">
										<td colspan="1" rowspan="1">
										</td>

										<td colspan="1" rowspan="1">
												<input class="form-control form-filter input-sm"  type="text" name=userID placeholder="userID"  >
										</td>
										<td colspan="1" rowspan="1">
												<input class="form-control form-filter input-sm"  type="text" name=user_marchantID placeholder="user_marchantID"  >
										</td>
										<td colspan="1" rowspan="1">
												<input class="form-control form-filter input-sm"  type="text" name=earned placeholder="earned"  >
										</td>
										<td colspan="1" rowspan="1">
												<input class="form-control form-filter input-sm"  type="text" name=withdraw placeholder="withdraw"  >
										</td>
										<td colspan="1" rowspan="1">
												<input class="form-control form-filter input-sm"  type="text" name=deposit placeholder="deposit"  >
										</td>
										<td colspan="1" rowspan="1">
												<input class="form-control form-filter input-sm"  type="text" name=profits placeholder="profits"  >
										</td>
										<td colspan="1" rowspan="1">
												<input class="form-control form-filter input-sm"  type="text" name=loss placeholder="loss"  >
										</td>

										<td colspan="1" rowspan="1">
												<input class="form-control form-filter input-sm"  type="text" name=start_date  placeholder="start_date"  >
										</td>	

										<td colspan="1" rowspan="1">
												<input class="form-control form-filter input-sm"  type="text" name=status   placeholder="status"  >
										</td>
										<td>
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
								$run = $connect->run("SELECT * FROM `investments` ORDER BY `investments`.`userID` DESC ");
								while($row= mysql_fetch_array($run)){
									 
									 ?>
								 			
								<tr role="row" class="filter">
								<form  method="post" action="script/updateInvestment.php">
								 <input type="hidden" name=ID value="<?php echo $row['ID'];?>">

								<td colspan="1" rowspan="1"><?php echo $row['ID'];?>
									</td>

									

									<td colspan="1" rowspan="1">
										userID:<?php echo $row['userID'];?><input class="form-control form-filter input-sm" name="userID" type="text" value="<?php echo $row['userID'];?>" >
									</td>


									<td colspan="1" rowspan="1">
										<input class="form-control form-filter input-sm" name="user_marchantID" type="text" value="<?php echo $row['user_marchantID'];?>" >
									</td>

									<td colspan="1" rowspan="1">
										<input class="form-control form-filter input-sm" name="earned" type="text" value="<?php echo $row['earned'];?>" >
									</td>
									

									<td colspan="1" rowspan="1">
										<input class="form-control form-filter input-sm" name="withdraw" type="text" value="<?php echo $row['withdraw'];?>" >
									</td>
									

									<td colspan="1" rowspan="1">
										<input class="form-control form-filter input-sm" name="deposit" type="text" value="<?php echo $row['deposit'];?>" >
									</td>
									

									<td colspan="1" rowspan="1">
										<input class="form-control form-filter input-sm" name="profits" type="text" value="<?php echo $row['profits'];?>" >
									</td>
									
									
									<td colspan="1" rowspan="1">
										<input class="form-control form-filter input-sm" name="loss" type="text" value="<?php echo $row['loss'];?>" >
									</td>
									
									<td colspan="1" rowspan="1">
										<input class="form-control form-filter input-sm" name="start_date" type="text" value="<?php echo $row['start_date'];?>" >
									</td>

									<td colspan="1" rowspan="1">
										<input class="form-control form-filter input-sm" name="status" type="text" value="<?php echo $row['status'];?>" >
									</td>
									<td colspan="1" rowspan="1">
										<input class="form-control form-filter input-sm" name="inacount" type="text" value="<?php echo $row['inacount'];?>" >
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