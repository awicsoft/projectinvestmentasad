<?php

require_once 'includes/upper.php';

?>
			
			<!-- END STYLE CUSTOMIZER -->
			<!-- BEGIN PAGE HEADER-->
			<h3 class="page-title">
			Change Password <small>change your password here</small>
			</h3>
			
			<!-- END PAGE HEADER-->
			<!-- BEGIN DASHBOARD STATS -->
			
			<!-- END DASHBOARD STATS -->
			<div class="clearfix">
			</div>
			
			

<form method=post name=opts action="script/security.php">
<input type=hidden name=a value=earnings>
<input type=hidden name=page value=1>
<table cellspacing=0 cellpadding=0 border=0 width=100% class="table table-striped table-bordered table-hover dataTable no-footer">
				
                    <tr class="row2">
                      <td width="25%" align="left">Previous Password</td>
                      
                      <td><input type="password" id="amount" class="form-control" name="ppassword" title="Enter the Amount to withdraw"> </td>
                    </tr>
                    <tr class="row2">
                      <td width="25%" align="left">New Password</td>
                      
                      <td><input type="password" id="amount" class="form-control" name="npassword1" title="Enter the Amount to withdraw"> </td>
                    </tr>
                      <tr class="row2">
                      <td width="25%" align="left">Cofirm Password</td>
                      
                      <td><input type="password" id="amount" class="form-control" name="npassword2" title="Enter the Amount to withdraw"> </td>
                    </tr>
                      
                     <tr  class="row2">
                    
                      
                      <td colspan="4"><p class="formBtn"><input type="submit" class="form-control" name="update" value="UPDATE"></p> </td>
                    </tr>
</table>
</form>




<?php

require_once 'includes/lower.php';

?>