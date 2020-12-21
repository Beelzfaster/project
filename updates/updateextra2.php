<?php 
session_start();
$_SESSION["secondextra".$_SESSION['ordernum']] = $_POST['itemname'];
header("Location:../thirdextra.php");
?> 