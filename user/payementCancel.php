<?php


if(isset($_POST['PAYEE_ACCOUNT']) && isset($_POST['PAYMENT_AMOUNT']) && isset($_POST['PAYMENT_UNITS'])  && isset($_POST['PAYMENT_BATCH_NUM']) && isset($_POST['PAYMENT_ID']) && isset($_POST['ORDER_NUM']) && isset($_POST['CUST_NUM'])) {

$all ="";
foreach ($_POST as $key => $entry)
{
     if (is_array($entry)) {
        foreach($entry as $value) {
          $all .= $key . ": " . $value . "<br>";
        }
     } else {
        $all .= $key . ": " . $entry . "<br>";
     }
}
echo $all;
echo "PAYEE_ACCOUNT".$_POST['PAYEE_ACCOUNT']."<br />";
echo "PAYMENT_AMOUNT".$_POST['PAYMENT_AMOUNT']."<br />";
echo "PAYMENT_UNITS".$_POST['PAYMENT_UNITS']."<br />";
echo "PAYMENT_BATCH_NUM".$_POST['PAYMENT_BATCH_NUM']."<br />";
echo "PAYER_ACCOUNT".@$_POST['PAYER_ACCOUNT']."<br />";
echo "PAYMENT_ID".$_POST['PAYMENT_ID']."<br />";
echo "ORDER_NUM".$_POST['ORDER_NUM']."<br />";
echo "CUST_NUM".$_POST['CUST_NUM']."<br />";
echo "Perfect Money  Payment Canceled";
}
else
if(isset($_POST['LMI_PAYMENT_NO']) && isset($_POST['LMI_SYS_INVS_NO']) && isset($_POST['LMI_SYS_TRANS_NO'])  && isset($_POST['LMI_SYS_TRANS_DATE']) && isset($_POST['FIELD_1']) && isset($_POST['FIELD_2'])) {

echo "LMI_PAYMENT_NO".$_POST['LMI_PAYMENT_NO']."<br />";
echo "LMI_SYS_INVS_NO".$_POST['LMI_SYS_INVS_NO']."<br />";
echo "LMI_SYS_TRANS_NO".$_POST['LMI_SYS_TRANS_NO']."<br />";
echo "LMI_SYS_TRANS_DATE".$_POST['LMI_SYS_TRANS_DATE']."<br />";
echo "FIELD_1".$_POST['FIELD_1']."<br />";
echo "FIELD_2".$_POST['FIELD_2']."<br />";

echo "WEB MONEY  Payment Canceled";
}
else{
	echo "PAYMENT CANCEL PAGE";
	}

?>