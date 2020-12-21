<?php 
session_start();
$_SESSION["sidename".$_SESSION['ordernum']] = $_POST['itemname'];
$_SESSION["ingredient1".$_SESSION['ordernum']] = $_POST['firstitem'];
$_SESSION["ingredient2".$_SESSION['ordernum']] = $_POST['seconditem'];
$_SESSION["ingredient3".$_SESSION['ordernum']] = $_POST['thirditem'];
$_SESSION["sideprice".$_SESSION['ordernum']] = $_POST['price'];
header("Location:../cart.php");
?> 