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
										 USERNAME
									</th>
									<th colspan="1" rowspan="1" aria-controls="datatable_ajax" tabindex="0" class="sorting" width="15%">
										 NAME
									</th>
									<th colspan="1" rowspan="1" aria-controls="datatable_ajax" tabindex="0" class="sorting" width="15%">
										 EMAIL
									</th>
									<th colspan="1" rowspan="1" aria-controls="datatable_ajax" tabindex="0" class="sorting" width="15%">
										 REG. DATE
									</th>
									<th colspan="1" rowspan="1" aria-controls="datatable_ajax" tabindex="0" class="sorting" width="15%">
										 STATUS
									</th>																											

									<th colspan="1" rowspan="1" aria-controls="datatable_ajax" tabindex="0" class="sorting" width="10%">
										 Actions
									</th></tr>


							<?php
									require_once '../user/script/classes/database.php';
								 $connect = new Database();
								 $run = $connect->run("SELECT * FROM  `user` ");
								 while($row = mysql_fetch_array($run)){
								 ?>
								 			
								<tr role="row" class="filter">
								<form  method="post" action="script/updateUsers.php">
								 <input type="hidden" name=ID value="<?php echo $row['ID'];?>" />
								
									
									<td colspan="1" rowspan="1"><?php echo $row['ID'];?>
									</td>

									<td colspan="1" rowspan="1">
										<input class="form-control form-filter input-sm" name="parentID" type="text" value="<?php echo $row['parentID'];?>" >
									</td>

									<td colspan="1" rowspan="1">
										<input class="form-control form-filter input-sm" name="username" type="text" value="<?php echo $row['username'];?>" >
									</td>

									<td colspan="1" rowspan="1">
										<input class="form-control form-filter input-sm" name="name" type="text" value="<?php echo $row['name'];?>" >
									</td>

									<td colspan="1" rowspan="1">
										<input class="form-control form-filter input-sm" name="email" type="text" value="<?php echo $row['email'];?>" >
									</td>

									<td colspan="1" rowspan="1">
										<input class="form-control form-filter input-sm" name="regDate" type="text" value="<?php echo $row['regDate'];?>" />
									</td>
									<td colspan="1" rowspan="1">
										<input class="form-control form-filter input-sm" name="status" type="text" value="<?php echo $row['status'];?>" >
									</td>

									<td colspan="1" rowspan="1">
										<div class="margin-bottom-5">
											<input name = "update" value="UPDATE" type="submit"  class="btn btn-sm yellow filter-submit margin-bottom"> 
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