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

    $ordervariable = "tablesides$ordernum";
    // sql to delete a record
    $sql = "DELETE FROM sideorder WHERE id = $id"; 
    $sidesql = "DELETE FROM sidesales WHERE id = $id"; 

    if ($conn->query($sidesql) === TRUE) {
    }
    if (mysqli_query($conn, $sql)) {
        mysqli_close($conn);
        header('Location: ../cart.php'); //If book.php is your main page where you list your all records
        exit;
    } else {
        echo "Error deleting record";
    }

?>