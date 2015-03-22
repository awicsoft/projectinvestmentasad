<?php
session_start();
session_destroy();
echo "<script>window.open('../login.php?message=Sucessfully Logout ','_self')</script>";

?>