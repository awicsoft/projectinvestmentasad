<?php

$userID = $_POST['userID'];
$user_marchantID = $_POST['user_marchantID'];
$earned = $_POST['earned'];
$withdraw = $_POST['withdraw'];

$deposit = $_POST['deposit'];
$profits = $_POST['profits'];
$loss = $_POST['loss'];
$start_date = $_POST['start_date'];
$status = $_POST['status'];





require_once '../../user/script/classes/database.php'; 

$connect = new Database();
$run = $connect->run("INSERT INTO `investments` (
`ID` ,
`packageID` ,
`package_type` ,
`userID` ,
`user_marchantID` ,
`earned` ,
`withdraw` ,
`deposit` ,
`profits` ,
`loss` ,
`start_date` ,
`status`
)
VALUES (
NULL , '1', 'daily_packages', '$userID', '$user_marchantID', '$earned', '$withdraw', '$deposit', '$profits', '$loss', '$start_date', '$status'
);
");

 echo "<script>window.open('../investments.php','_self')</script>";
?>