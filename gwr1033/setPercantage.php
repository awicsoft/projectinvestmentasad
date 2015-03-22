<?php

require_once 'includes/upper.php';
?>
			
			<!-- END STYLE CUSTOMIZER -->
			<!-- BEGIN PAGE HEADER-->
			<h3 class="page-title">
			Dashboard <small>dashboard & statistics</small>
			</h3>
			
			
			<div class="clearfix">
			</div>
			

  <div class="row">
                    <div class="col-lg-12">
                        <h1 class="page-header">
                          Profits Percantage Set Here <small></small>
                        </h1>
                    
                    </div>
                </div>
                
<div class="row">
                    <div class="col-lg-12 text-center">
                        <div class="panel panel-default">
                            <div class="panel-body">
                            <?php
							if(!isset($_POST['update'])){	require_once '../user/script/classes/database.php';
                            $connect = new Database();
									$connect->DBConection();
									$row0 = $connect->giveRow("SELECT `commission` FROM `daily_packages` WHERE `ID` = '1'");
									$row1 =$connect->giveRow("SELECT `commision` FROM `commistions` WHERE `ID` = '1'");
									$row2 = $connect->giveRow("SELECT `commision` FROM `commistions` WHERE `ID` = '2'");
									$connect->closeDBConnection();
									$com0 = $row0['commission'];
									$com1 = $row1['commision'];
									$com2 = $row2['commision'];
							}
							?>
                             <form role="form" action="" method="post">
                             <div class="form-group">
                                <label>Enter the Investment to share</label>
                                <input name=ipercantage value="<?php   if(!isset($_POST['update'])) echo $com0;?>"  class="form-control">
                                <p class="help-block">For Example : 5%,0%,-4%</p>
                            </div>
									<div class="form-group">
                                <label>Enter the Per Refferal Earining Percantage</label>
                                <input name=epercantage value="<?php   if(!isset($_POST['update'])) echo $com1;?>"  class="form-control">
                                <p class="help-block">For Example : 5%,0%,-4%</p>
                            </div>
                            <div class="form-group">
                                <label>Enter the Per Active Refferal Percantage</label>
                                <input name=apercantage value="<?php  if(!isset($_POST['update'])) echo $com2;?>" class="form-control">
                                <p class="help-block">For Example : 5%,0%</p>
                            </div>
                             <div class="row">
							<input type="submit" name="update" class="btn btn-default" value="Update">

                       			 </form>
                                 
                                 <?php
                                 if(isset($_POST['update'])){
								 	require_once '../user/script/classes/database.php';
									$ipercantage = $_POST['ipercantage'];
								 	$epercantage = $_POST['epercantage'];
									$apercantage = $_POST['apercantage'];
									
									$connect = new Database();
										$connect->run("UPDATE `daily_packages` SET `commission` = '$ipercantage' WHERE `ID` =1;");								
									$connect->run("UPDATE `commistions` SET `commision` = '$epercantage' WHERE `commistions`.`ID` =1;");								
									$connect->run("UPDATE `commistions` SET `commision` = '$apercantage' WHERE `commistions`.`ID` =2;");
								 
								 echo "<script>window.open('setPercantage.php?message=Updated Sucessfully','_self');</script>";
								 }
								 ?>
                            </div>
                        </div>
                    </div>
                </div>



<?php
require_once 'includes/lower.php';

?>