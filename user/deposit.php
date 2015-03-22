<?php

require_once 'includes/upper.php';

?>


<script>
	function perfectValidate() {
 	   var x = document.forms["perfect"]["PAYMENT_AMOUNT"].value;
    	if (x< 30) {
    	document.forms["perfect"].action ="";
        	alert("Yout ammount is less than 30");
        	
     	return false;
    }else{
    document.forms["perfect"].action ="https://perfectmoney.is/api/step1.asp";



return true;
    }
}

	function webValidate() {
 	   var x = document.forms["web"]["LMI_PAYMENT_AMOUNT"].value;
    	if (x< 30) {
    	document.forms["web"].action ="";
            	alert("Yout ammount is less than 30");
        	
     	return false;
    }else{
    document.forms["web"].action ="https://merchant.wmtransfer.com/lmi/payment.asp";



return true;
    }
}

	function skrillValidate() {
 	   var x = document.forms["skrill"]["amount"].value;
    	if (x< 30) {
    	document.forms["skrill"].action ="";
          	alert("Yout ammount is less than 30");
        	
     	return false;
    }else{
    document.forms["skrill"].action ="https://www.moneybookers.com/app/payment.pl";



return true;
    }
}
</script>			
			<!-- END STYLE CUSTOMIZER -->
			<!-- BEGIN PAGE HEADER-->
			<h3 class="page-title">
			Deposit <small>Deposit Your Money With our new Payment Porcessor Securly and Earn Dollars</small>
			</h3>
<h1>FOR Easypaisa,Ucash,Mobi Cash,Time Pay,UBL Omni <a href="other.php">Click here</a></h1>			
			<!-- END PAGE HEADER-->
			<!-- BEGIN DASHBOARD STATS -->
			
			<!-- END DASHBOARD STATS -->
			<div class="clearfix">
			</div>
			
		
				<form name="perfect" action="" method="POST">
				<input type="hidden" name="PAYEE_ACCOUNT" value="<?php  echo  getAdminPerfectMoneyAccount();?>">
<input type="hidden" name="PAYEE_NAME" value="Hilaal Banking">
<!--<input type="hidden" name="PAYER_ACCOUNT" value="U7755832">-->
<input type='hidden' name='PAYMENT_ID' value='<?=time() ?>'>

<input type="hidden" name="PAYMENT_UNITS" value="USD">
<input type="hidden" name="STATUS_URL" value="https://hilaalbanking.com/user/script/perfectMoneyStatus.php">
<input type="hidden" name="PAYMENT_URL" value="https://hilaalbanking.com/user/payementSucessfull.php">
<input type="hidden" name="PAYMENT_URL_METHOD" value="POST">
<input type="hidden" name="NOPAYMENT_URL" value="https://hilaalbanking.com/user/payementCancel.php">
<input type="hidden" name="NOPAYMENT_URL_METHOD" value="POST">
<input type="hidden" name="SUGGESTED_MEMO" value="2.1% Daily for 120 days">
<input type="hidden" name="BAGGAGE_FIELDS" value="ORDER_NUM CUST_NUM">
    <input type="hidden" name="ORDER_NUM" value="1">
    <input type="hidden" name="CUST_NUM" value="<?php echo  $_SESSION['u_id'];?>">

					<div class="dashboard-stat green-haze">
						<div class="visual">
							<i class="fa fa-group fa-icon-medium"></i>
						</div>
						<div class="details">
							<div class="number">
							<label>Enter Perfect Money Ammount in USD :</label>
								<input onchange="perfectValidate()" style="color:black; 	"  name="PAYMENT_AMOUNT"  type=text placeholder="30.0"/>
							</div>
							<div class="desc">
							Minimuim $30.0
							</div>
						</div>
						<a class="more" href="#">
						  <input onclick="perfectValidate()"  type="submit" name="PAYMENT_METHOD" value="Pay FROM PERFCT MONEY Now!" class="tabeladugme" style=" font-weight: bold; font-size:20px; width:100%; color:blue;"> 
						</a>
					</div>
			</form>



				<form name="web" action="" method="POST">
				<input type="hidden" name="PAYEE_ACCOUNT" value="<?php  echo  getAdminPerfectMoneyAccount();?>">
    <input type="hidden" name="LMI_PAYMENT_DESC" value="payment under the bill">
    <input type="hidden" name="LMI_PAYMENT_NO" value="<?php echo $_SESSION['u_id'];?>">
    <input type="hidden" name="LMI_PAYEE_PURSE" value="<?php echo getAdminWebMoneyAccount();?>">
    <input type="hidden" name="LMI_SIM_MODE" value="0">

    <input type="hidden" name="LMI_RESULT_URL" value="https://hilaalbanking.com/user/script/webmoneyResult.php">
    <input type="hidden" name="LMI_SUCCESS_URL" value="https://hilaalbanking.com/user/payementSucessfull.php">
    <input type="hidden" name="LMI_SUCCESS_METHOD" value="2">
    <input type="hidden" name="LMI_FAIL_URL" value="https://hilaalbanking.com/user/payementCancel.php">
    <input type="hidden" name="LMI_FAIL_METHOD" value="2">


					<div class="dashboard-stat green-haze">
						<div class="visual">
							<i class="fa fa-group fa-icon-medium"></i>
						</div>
						<div class="details">
							<div class="number">
							<label>Enter WEB Money Ammount in USD :</label>
								<input onchange="webValidate()" style="color:black; 	"  name="LMI_PAYMENT_AMOUNT" type=text placeholder="30.0"/>
							</div>
							<div class="desc">
							Minimuim $30.0
							</div>
						</div>
						<a class="more" href="#">
						  <input onclick="webValidate()" type="submit" name="" value="Pay FROM WEB MONEY Now!" class="tabeladugme" style=" font-weight: bold; font-size:20px; width:100%; color:blue;"> 
						</a>
					</div>
			</form>



				<form name="skrill" action="" method="POST">
			<input type="hidden" name="pay_to_email" value="<?php echo getAdminSkrillAccount();?>"/>
      <input type="hidden" name="logo_url" value="https://hilaalbanking.com/images/logo_footer.png"/> 
    <input type="hidden" name="cancel_url" value="https://hilaalbanking.com/user/payementCancel.php"/> 
   <input type="hidden" name="return_url" value="http:s//hilaalbanking.com/user/index.php"/> 
  <input type="hidden" name="status_url" value="https://hilaalbanking.com/user/script/SkrillStatus.php?id=<?php echo $_SESSION['u_id'];?>"/> 
  <input type="hidden" name="language" value="EN"/>
 
  <input type="hidden" name="currency" value="USD"/>
  <input type="hidden" name="detail1_description" value="Investments"/>
  <input type="hidden" name="detail1_text" value="daily package"/>
  <input type="hidden" name="field1" value="<?php  echo $_SESSION['u_id'];?>"/>


					<div class="dashboard-stat green-haze">
						<div class="visual">
							<i class="fa fa-group fa-icon-medium"></i>
						</div>
						<div class="details">
							<div class="number">
							<label>Enter Skrill Ammount in USD :</label>
								<input onchange="skrillValidate()" style="color:black; 	"  name="amount" type=text placeholder="30.0"/>
							</div>
							<div class="desc">
							Minimuim $30.0
							</div>
						</div>
						<a class="more" href="#">
						  <input onclick="skrillValidate()" type="submit" name="" value="Pay FROM SKRILL MONEY Now!" class="tabeladugme" style=" font-weight: bold; font-size:20px; width:100%; color:blue;"> 
						</a>
					</div>
			</form>



<?php

require_once 'includes/lower.php';

?>