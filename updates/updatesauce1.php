<?php 
session_start();
$_SESSION["firstsauce".$_SESSION['ordernum']] = $_POST['itemname'];
header("Location:../secondsauce.php");
?> 