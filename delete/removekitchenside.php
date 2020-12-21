<?php
    
    $dbServername = "localhost";
    $dbUsername = "root";
    $dbPassword = "";
    $dbName = "menu";

    // Create connection
    

    $conn = mysqli_connect($dbServername, $dbUsername, $dbPassword, $dbName);
    // Check connection
    if (!$conn) {
        die("Connection failed: " . mysqli_connect_error());
    }

    $id = $_POST['id'];
    $ordernum = $_POST['ordernum'];

    $ordervariable = "kitchensidemenu";
    // sql to delete a record
    $sql = "DELETE FROM $ordervariable WHERE id = $id"; 

    if (mysqli_query($conn, $sql)) {
        mysqli_close($conn);
        header('Location: ../kitchendisplay.php'); 
        exit;
    } else {
        echo "Error deleting record";
    }

?>