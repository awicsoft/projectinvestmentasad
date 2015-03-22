<?php

require_once 'includes/upper.php';
?>
			
			<!-- END STYLE CUSTOMIZER -->
			<!-- BEGIN PAGE HEADER-->
			<h3 class="page-title">
			Admin <label style="color:red;">(BUGS ARE PRESET IN the update MODULE) <label><small>Admins</small>
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
										#
									</th>

									<th colspan="1" rowspan="1" aria-controls="datatable_ajax" tabindex="0" class="sorting" width="5%">
										username
									</th>
									<th colspan="1" rowspan="1" aria-controls="datatable_ajax" tabindex="0" class="sorting" width="5%">
										password
									</th>

									<th colspan="1" rowspan="1" aria-controls="datatable_ajax" tabindex="0" class="sorting" width="15%">
										USERS
									</th>
									<th colspan="1" rowspan="1" aria-controls="datatable_ajax" tabindex="0" class="sorting" width="15%">
										Withdrawals
									</th>
									<th colspan="1" rowspan="1" aria-controls="datatable_ajax" tabindex="0" class="sorting" width="15%">
										Set Percantage
									</th>

									<th colspan="1" rowspan="1" aria-controls="datatable_ajax" tabindex="0" class="sorting" width="15%">
										Set Payment Processors
									</th>
									<th colspan="1" rowspan="1" aria-controls="datatable_ajax" tabindex="0" class="sorting" width="15%">
										Messages
									</th>
									

									<th colspan="1" rowspan="1" aria-controls="datatable_ajax" tabindex="0" class="sorting" width="20%">
										Actions
									</th>

								</tr>

								<tr>
									<form action="script/addNewAdmin.php" method="post">
										<td colspan="1" rowspan="1">
										</td>

										<td colspan="1" rowspan="1">
												<input class="form-control form-filter input-sm"  type="text" name=username placeholder="Username"  >
										</td>
										<td colspan="1" rowspan="1">
												<input class="form-control form-filter input-sm"  type="text" name=password placeholder="password"  >
										</td>
										<td colspan="1" rowspan="1">
												<input class="form-control form-filter input-sm" value="1" type="text" name=users placeholder="O or 1"  >
										</td>
										<td colspan="1" rowspan="1">
												<input class="form-control form-filter input-sm" value="1" type="text" name=withdraw placeholder="O or 1"  >
										</td>
										
										<td colspan="1" rowspan="1">
												<input class="form-control form-filter input-sm" value="1" type="text" name=setpercantage placeholder="O or 1"  >
										</td>

										<td colspan="1" rowspan="1">
												<input class="form-control form-filter input-sm" value="1" type="text" name=setpaymentprocessor  placeholder="O or 1"  >
										</td>	

										<td colspan="1" rowspan="1">
												<input class="form-control form-filter input-sm" value="1" type="text" name=message   placeholder="O or 1"  >
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
								$run = $connect->run("SELECT * FROM `admin` ORDER BY `admin`.`ID` DESC ");
								while($row= mysql_fetch_array($run)){
									 
									 ?>
								 			
								<tr role="row" class="filter">
								<form  method="post" action="script/updateAdmin.php">
								 <input type="hidden" name=ID value="<?php echo $row['ID'];?>">

								<td colspan="1" rowspan="1"><?php echo $row['ID'];?>
									</td>

									

									

									<td colspan="1" rowspan="1">
												<input class="form-control form-filter input-sm"  value="<?= $row['user'];?>" type="text" name=username placeholder="Username"  >
										</td>
										<td colspan="1" rowspan="1">
												<input class="form-control form-filter input-sm" value="<?= $row['pass'];?>"   type="text" name=password placeholder="password"  >
										</td>
										<td colspan="1" rowspan="1">
												<input class="form-control form-filter input-sm" value="<?= $row['users'];?>" type="text" name=users placeholder="O or 1"  >
										</td>
										<td colspan="1" rowspan="1">
												<input class="form-control form-filter input-sm" value="<?= $row['refferalWithdraw'];?>" type="text" name=withdraw placeholder="O or 1"  >
										</td>
										
										<td colspan="1" rowspan="1">
												<input class="form-control form-filter input-sm" value="<?= $row['setPercantage'];?>" type="text" name=setpercantage placeholder="O or 1"  >
										</td>

										<td colspan="1" rowspan="1">
												<input class="form-control form-filter input-sm" value="<?= $row['setPaymentProcessor'];?>" type="text" name=setpaymentprocessor  placeholder="O or 1"  >
										</td>	

										<td colspan="1" rowspan="1">
												<input class="form-control form-filter input-sm" value="<?= $row['inbox'];?>" type="text" name=message   placeholder="O or 1"  >
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