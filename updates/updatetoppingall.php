<?php 
session_start();
$_SESSION["firstextra".$_SESSION['ordernum']] = "Nothing";
$_SESSION["secondextra".$_SESSION['ordernum']] = "Nothing";
$_SESSION["thirdextra".$_SESSION['ordernum']] = "Nothing";
header("Location:../firstsauce.php");
?> 