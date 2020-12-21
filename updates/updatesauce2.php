<?php 
session_start();
$_SESSION["secondsauce".$_SESSION['ordernum']] = $_POST['itemname'];
header("Location:../cart.php?success!");
?> 