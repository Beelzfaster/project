<?php 
session_start();
$_SESSION["drinkname".$_SESSION['ordernum']] = $_POST['itemname'];
$_SESSION["drinkprice".$_SESSION['ordernum']] = $_POST['price'];
header("Location:../cart.php");
?> 