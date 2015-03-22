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
										 User ID
									</th>
									<th colspan="1" rowspan="1" aria-controls="datatable_ajax" tabindex="0" class="sorting" width="15%">
										 Commission
									</th>
											

									<th colspan="1" rowspan="1" aria-controls="datatable_ajax" tabindex="0" class="sorting" width="10%">
										Actions
									</th>

								</tr>

								
							<?php
									require_once '../user/script/classes/database.php';
								$connect = new Database();
								$run = $connect->run("SELECT * FROM `ref_commision` ORDER BY `ref_commision`.`parentID` DESC ");
								while($row= mysql_fetch_array($run)){
									 
									 ?>
								 			
								<tr role="row" class="filter">
								<form  method="post" action="script/updateRefComm.php">
								 <input type="hidden" name=ID value=<?php echo $row['ID'];?> />

								<td colspan="1" rowspan="1"><?php echo $row['ID'];?>
									</td>

									

									<td colspan="1" rowspan="1">
										PARENTID:<?php echo $row['parentID'];?><input class="form-control form-filter input-sm" name="parentID" type="text" value="<?php echo $row['parentID'];?>" >
									</td>

									<td colspan="1" rowspan="1">
										userID:<?php echo $row['userID'];?><input class="form-control form-filter input-sm" name="userID" type="text" value="<?php echo $row['userID'];?>" >
									</td>


									<td colspan="1" rowspan="1">
										<input class="form-control form-filter input-sm" name="commision" type="text" value="<?php echo $row['commision'];?>" >
									</td>
									
									
									<td colspan="1" rowspan="1">
										<div class="margin-bottom-5">
											<input name = "update" type="submit"  class="btn btn-sm yellow filter-submit margin-bottom" value="UPDATE"> 
										</div>
										
									</td>
								</form>
								</tr>
								<?php }?>
								</thead>
			</table>
			 


<?php
require_once 'includes/lower.php';

?>