<?php

$investmentID = $_POST['investmentID'];
$date = $_POST['date'];
$ammount = $_POST['ammount'];
$status = $_POST['status'];






require_once '../../user/script/classes/database.php'; 

$connect = new Database();
$run = $connect->run("INSERT INTO `withdraw_history` (
`ID` ,
`investmentID` ,
`date` ,
`ammount` ,
`status` 
)
VALUES (
NULL , '$investmentID', '$date', '$ammount', '$status'
);
");

 echo "<script>window.open('../investmentWithdraw.php','_self')</script>";
?>