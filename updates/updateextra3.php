<?php 
session_start();
$_SESSION["thirdextra".$_SESSION['ordernum']] = $_POST['itemname'];
header("Location:../firstsauce.php");
?> 