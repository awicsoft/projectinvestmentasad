<?php
require_once 'script/checks.php';
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
                      Change Password Here <small></small>
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
							
							
                          <div class="row">
                          <label>Previous Password</label>
                          <input type="password" name="ppassword" value="" class="form-control">
                           <label>New Password</label>
                          <input type="password" name="npassword1" value="" class="form-control">
                          <label>Once Again</label>
                          <input  type="password" name="npassword2" value="" class="form-control">
                          
							<input type="submit" name="update" class="btn btn-default"  class="form-control"  value="Update">

                       			 </form>
                                 
                                 <?php
                                 if(isset($_POST['update'])){
								 	
									
									
									require_once '../include/incryption.php';
								 	$connect = new Database();
																
								
								$ppass = incrypt($_POST['ppassword']);
								$npass1 =	incrypt($_POST['npassword1']);
								$npass2 = incrypt($_POST['npassword2']);
								if($npass1 != $npass2) 
								{
						echo "<script>alert('Both New password Not Matched');</script>";
								exit();	
								}
								$adminID = $_SESSION['a_id'];
							$run = $connect->run("SELECT `pass` FROM `admin` WHERE `ID` = '$adminID' AND `pass` = '$ppass' ");
							$row = mysql_fetch_array($run);
							if($row>0){
								
								$run = $connect->run("UPDATE `admin` SET `pass` = '$npass1' WHERE `ID` ='$adminID';");
								echo "<script>alert('Password Changed Sucessfully');</script>";
									exit();
								}
								else
								{echo "<script>alert('Previous Password not Matched');</script>";
									exit();
									}
								
								 
			
			 
								 }
								 ?>	
                            </div>
                        </div>
                    </div>
                </div>

<?php
require_once 'includes/lower.php';

?>