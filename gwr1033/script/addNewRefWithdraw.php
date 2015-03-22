<?php

$parentID = $_POST['parentID'];
$date = $_POST['date'];
$ammount = $_POST['ammount'];
$status = $_POST['status'];
$paymentmethod = $_POST['paymentmethod'];
$account = $_POST['account'];





require_once '../../user/script/classes/database.php'; 

$connect = new Database();
$run = $connect->run("INSERT INTO `refferal_withdraw` (
`ID` ,
`paerentID` ,
`date` ,
`ammount` ,
`status` ,
`paymentMethod` ,
`account`
)
VALUES (
NULL , '$parentID', '$date', '$ammount', '$status', '$paymentmethod', '$account'
);
");

 echo "<script>window.open('../refferalWithdraw.php','_self')</script>";
?>