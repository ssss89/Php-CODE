<?php  
include "conn.php";
session_start();
session_destroy();
session_unset();

header("location:login2.php");



?>