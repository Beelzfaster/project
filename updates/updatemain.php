<?php 
session_start();
$_SESSION["firstitem".$_SESSION['ordernum']] = $_POST['firstitem'];
$_SESSION["seconditem".$_SESSION['ordernum']] = $_POST['seconditem'];
$_SESSION["thirditem".$_SESSION['ordernum']] = $_POST['thirditem'];
$_SESSION["size".$_SESSION['ordernum']] = $_POST['size'];
$_SESSION["price".$_SESSION['ordernum']] = $_POST['price'];
header("Location:../firstextra.php");
?> 