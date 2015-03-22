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
										 User ID
									</th>
									<th colspan="1" rowspan="1" aria-controls="datatable_ajax" tabindex="0" class="sorting" width="15%">
										  Processor ID
									</th>
									<th colspan="1" rowspan="1" aria-controls="datatable_ajax" tabindex="0" class="sorting" width="15%">
										 Processor username
									</th>
											

									<th colspan="1" rowspan="1" aria-controls="datatable_ajax" tabindex="0" class="sorting" width="10%">
										Actions
									</th>

								</tr>

								<tr>
									<form action="script/addNewMarchant.php" method="post">
										<td colspan="1" rowspan="1">
										</td>

										<td colspan="1" rowspan="1">
												<input class="form-control form-filter input-sm" name="userID" type="text" placeholder="USER ID"  >
										</td>	

										<td colspan="1" rowspan="1">
												<input class="form-control form-filter input-sm" name="marchantID" type="text" placeholder="processor ID"  >
										</td>	
										
										<td colspan="1" rowspan="1">
												<input class="form-control form-filter input-sm" name="username" type="text" placeholder="processor Username"  >
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
								$run = $connect->run("SELECT * FROM `user_marchant` ORDER BY `user_marchant`.`userID` DESC ");
								
								while($row= mysql_fetch_array($run)){
								 
								 ?>
								 			
								<tr role="row" class="filter">
								<form  method="post" action="script/updateMarchant.php">
								<input type="hidden" name=ID value=<?php echo $row['ID'];?> />
                                     <input type="hidden" name=userID value=<?php echo $row['userID'];?> />
                                      <input type="hidden" name=marchantID value=<?php echo $row['marchantID'];?> />
								<td colspan="1" rowspan="1"><?php echo $row['ID'];?>
									</td>

									

									<td colspan="1" rowspan="1"><?php echo "USERID:".$row['userID'];?>
									</td>
									<td colspan="1" rowspan="1"><?php echo $row['marchantID'];?>
									</td>

									<td colspan="1" rowspan="1">
										<input class="form-control form-filter input-sm" name="username1" type="text" value="<?php echo $row['username1'];?>" >
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
			 <table>
                             <?php
                            $connect = new Database();
							$run = $connect->run("SELECT `ID` , `name` FROM `marchant`");
							while($row= mysql_fetch_array($run)){
							?>
                             *   <tr>
                                <?php echo $row['name'];?>
                                <td>
                                </td>
                                 = <?php echo $row['ID']."<br>";?>
                                </tr>
                                <?php }?>
                                </table>


<?php
require_once 'includes/lower.php';

?>