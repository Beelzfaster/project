<?php
    $dbServername = "localhost";
    $dbUsername = "root";
    $dbPassword = "";
    $dbName = "menu";

    // Create connection
    session_start();
    $conn = mysqli_connect($dbServername, $dbUsername, $dbPassword, $dbName);

    $ordernum = $_SESSION['ordernum'];

    $sql = "DELETE FROM mainorder WHERE ordernum = $ordernum"; 
    $sidesql = "DELETE FROM sideorder WHERE ordernum = $ordernum"; 
    $drinksql = "DELETE FROM drinkorder WHERE ordernum = $ordernum"; 
    
    if ($conn->query($sidesql) === TRUE) {
    }
    if ($conn->query($drinksql) === TRUE) {
    }
    if ($conn->query($sql) === TRUE) {
        header("Location:success.php");
    } else {
        echo "Error: " . $sql . "<br>" . $conn->error;
    }
    
    $conn->close();
?>