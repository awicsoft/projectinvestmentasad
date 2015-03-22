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
										Parent ID
									</th>
									<th colspan="1" rowspan="1" aria-controls="datatable_ajax" tabindex="0" class="sorting" width="15%">
										Date
									</th>
									<th colspan="1" rowspan="1" aria-controls="datatable_ajax" tabindex="0" class="sorting" width="15%">
										Ammount
									</th>
											
									<th colspan="1" rowspan="1" aria-controls="datatable_ajax" tabindex="0" class="sorting" width="10%">
										Status
									</th>
									<th colspan="1" rowspan="1" aria-controls="datatable_ajax" tabindex="0" class="sorting" width="10%">
										Payment method
									</th>
									<th colspan="1" rowspan="1" aria-controls="datatable_ajax" tabindex="0" class="sorting" width="10%">
										Account
									</th>
									<th colspan="1" rowspan="1" aria-controls="datatable_ajax" tabindex="0" class="sorting" width="10%">
										Actions
									</th>

								</tr>

								<tr>
									<form action="script/addNewRefWithdraw.php" method="post">
										<td colspan="1" rowspan="1">
										</td>

										<td colspan="1" rowspan="1">
												<input class="form-control form-filter input-sm"  type="text" name=parentID placeholder="Parent ID"  >
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
												<input class="form-control form-filter input-sm"  type="text" name=paymentmethod   placeholder="paymentmethod"  >
										</td>

										<td colspan="1" rowspan="1">
												<input class="form-control form-filter input-sm"  type="text" name=account   placeholder="account"  >
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
FROM `refferal_withdraw`
ORDER BY `refferal_withdraw`.`paerentID` DESC ");
								
								while($row= mysql_fetch_array($run)){
								 
								 ?>
								 			
								<tr role="row" class="filter">
								<form  method="post" action="script/updateRefWithDrawal.php">
								 <input type="hidden" name=ID value=<?php echo $row['ID'];?> />

								<td colspan="1" rowspan="1"><?php echo $row['ID'];?>
									<s/td>

									


									<td colspan="1" rowspan="1">
										PARENTID:<?php echo $row['paerentID'];?> <input class="form-control form-filter input-sm" name="paerentID" type="text" value="<?php echo $row['paerentID'];?>" >
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
									</td>
										<td colspan="1" rowspan="1">
										<input class="form-control form-filter input-sm" name="paymentMethod" type="text" value="<?php echo $row['paymentMethod'];?>" >
									</td>
									</td>
										<td colspan="1" rowspan="1">
										<input class="form-control form-filter input-sm" name="account" type="text" value="<?php echo $row['account'];?>" >
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