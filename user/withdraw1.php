
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>CamelForex.com</title>
<!--This Web is designed by Musa Butt, contact : 03245187257
<!-- start CSS -->
<link href="css/style.css" rel="stylesheet" type="text/css" />
<!-- end CSS -->

<!-- start JS -->
<script src="jquery-1.10.2.min.js" type="text/javascript"></script>
<script src="js/functions.js" type="text/javascript"></script>
<!-- end JS -->
<?php include 'script/acount_functions.php';?>
<?php include '../include/public_functions.php';?>
</head>

<body>

<!-- start HEADER -->
<?php header1(); ?>
<!-- end HEADER -->

<!-- start MAIN -->
<div id="main">

		<!-- start TOP -->
	<?php userTop();?>
	<!-- end TOP -->
			
	<!-- start WRAP -->
	<div class="wrap">
	
				<!-- start MENU -->
		<?php startMenu(); ?>
		<!-- end MENU -->
				
		<!-- start CONTENT -->
		<div id="content">

				<p class="pageTitle">Withdraw Money</p>
 		






<form method=post>


<table cellspacing=0 cellpadding=2 border=0>
<?php if(isset($_GET['message'])){?>
                     <tr class="row2">
                     
                      
                      <td colspan="10" align="center"><lable style="color:#C30; text-align:center" >* asds </lable></td>
                    </tr>
                    <?php }?>

<tr>
 <td>Withdrawable Balance In this Investment</td>
 <td>$<b>0.00</b></td>
</tr>
<tr>
 <td>Marchant</td>
 <td>$<b>0.00</b></td>
</tr>
 
 
   


 






</table>
<table width="95%" border="0" cellspacing="0" cellpadding="0" align="center" style="padding:10px">
                    <!--<tr class="row1">
                      <td width="45%" align="left">Minimum Withdrawal Amount for Bank Wire </td>
                      
                      <td>$500 USD</td>
                    </tr>-->
                    <tbody><tr class="row2">
                      <td width="35%" align="left">Minimum Withdrawal Amount </td>
                      
                      <td>$
                        50.00                        USD</td>
                    </tr>
                    <tr class="row1">
                      <td width="35%" align="left">Maximum Withdrawal Amount </td>
                      
                      <td>UNLIMITED
                         </td>
                    </tr>
                    <tr class="row2">
                      <td width="25%" align="left">Amount</td>
                      
                      <td><input type="text" id="amount" class="txtbx" name="txtAmount" title="Enter the Amount to withdraw">
                        </td>
                    </tr>
                    
                    <tr class="row2">
                      <td width="25%" align="center" colspan="3"><input type="hidden" name="canWithdraw" value="0">
                         <input type="submit" name="button" id="button" value="Withdraw" class="button"></td>
                    </tr>
                  </tbody></table>


For other eCurrencies please provide your <br> Payee Account details in the comments field below.

<br><br>
You have no funds to withdraw.
</form>


		</div>
		<!-- end CONTENT -->
		
		<div class="clr"></div>
	
	</div>
	<!-- end WRAP -->

</div>
<!-- end MAIN -->

<!-- start FOOTER -->
<?php footer1(); ?>

<!-- end FOOTER -->

<!-- start OVERLAY -->
<div id="overlay"></div>
<!-- end OVERLAY -->


<!-- start CERTIFICATE -->
<div id="certificate"><a href="Twelverized/files/OurCertificate_large.jpg" target="_blank"></a></div>
<!-- end CERTIFICATE -->

</body>
</html>