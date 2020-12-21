<?php 
session_start();
$_SESSION["firstsauce".$_SESSION['ordernum']] = "Nothing";
$_SESSION["secondsauce".$_SESSION['ordernum']] = "Nothing";
header("Location:../cart.php");
?> 