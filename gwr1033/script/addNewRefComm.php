<?php

$userID = $_POST['userID'];
$parentID = $_POST['parentID'];
$Commission = $_POST['Commission'];


require_once '../../user/script/classes/database.php'; 

$connect = new Database();
$run = $connect->run("INSERT INTO `ref_commision` (
`ID` ,
`parentID` ,
`userID` ,
`Commission`
)
VALUES (
NULL , '$parentID', '$userID', '$Commission'
);");


?>