<?php 
session_start();
$_SESSION["firstextra".$_SESSION['ordernum']] = $_POST['itemname'];
header("Location:../secondextra.php");
?> 