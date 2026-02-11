<?php 
session_start(); 
$_SESSION = array(); 
session_destroy(); 
//print($_SESSION); 
header("Location: ../customer_log.php");?>