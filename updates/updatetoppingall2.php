<?php 
session_start();
$_SESSION["secondextra".$_SESSION['ordernum']] = "Nothing";
$_SESSION["thirdextra".$_SESSION['ordernum']] = "Nothing";
header("Location:../firstsauce.php");
?> 