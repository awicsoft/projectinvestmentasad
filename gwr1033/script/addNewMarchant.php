<?php

$userID = $_POST['userID'];
$marchantID = $_POST['marchantID'];
$username = $_POST['username'];


require_once '../../user/script/classes/database.php'; 

$connect = new Database();
$run = $connect->run("INSERT INTO `user_marchant` (
`ID` ,
`userID` ,
`marchantID` ,
`username1` ,
`username2`
)
VALUES (
NULL , '$userID', '$marchantID', '$username', ''
);");


?>