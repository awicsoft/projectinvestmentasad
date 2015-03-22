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
                    <div class="col-lg-12">
                        <h1 class="page-header">
                         Payment Processor Set Here <small></small>
                        </h1>
                    
                    </div>
                </div>
                
<div class="row">
                    <div class="col-lg-12 text-center">
                        <div class="panel panel-default">
                            <div class="panel-body">
                            <?php
						
							
							require_once '../user/script/classes/database.php';
                            $connect = new Database();
									
									
							
							?>
                             <form role="form" action="" method="post">
							<?php
							$run = $connect->run("SELECT `name` ,`adminuser1` FROM `marchant` ");
							
						while($row = mysql_fetch_array($run)){
							?>
                            <div class="form-group">
                                <label>Enter <?php echo $row['name'];?> Account</label>
                    <input name=<?php echo $row['name'];?> value="<?php   echo $row['adminuser1'];?>"  class="form-control">
                    
                               
                            </div>
                           <?php		
							}?>
                          <div class="row">
							<input type="submit" name="update" class="btn btn-default" value="Update">

                       			 </form>
                                 
                                 <?php
                                 if(isset($_POST['update'])){
								 	
									
								
									
								 	$connect = new Database();
									$run = $connect->run("SELECT `ID`,`name`  FROM `marchant` ");
							
						while($row = mysql_fetch_array($run)){
							$name = $row['name'];
							$ID = $row['ID'];
							$user = $_POST[$name];
							$connect->run("UPDATE `marchant` SET `adminuser1` = '$user' WHERE `ID` = '$ID' ");								
							}
									
								
								
								 
			 echo "<script>window.open('setPaymentProcessor.php?message=Updated Sucessfully','_self');</script>";
			 
								 }
								 ?>	
                            </div>
                        </div>
                    </div>
                </div>


<?php
require_once 'includes/lower.php';

?>