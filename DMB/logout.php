<?php
session_start();
include('connection.php');
unset($_SESSION["id"]);
session_destroy(); 
header("location:login.php");
?>

