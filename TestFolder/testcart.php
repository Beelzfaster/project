<?php
    $dbServername = "localhost";
    $dbUsername = "root";
    $dbPassword = "";
    $dbName = "menu";

    // Create connection

    $conn = mysqli_connect($dbServername, $dbUsername, $dbPassword, $dbName);
    
    /*$drink_cat = $_POST['drink_cat'];
    $drink_title = $_POST['drink_title'];
    $drink_price = $_POST['drink_price'];
    $drink_desc = $_POST['drink_desc'];
    $a_perc = $_POST['a_perc'];*/
    
    
    $name = $_POST['name'];
    $price = $_POST['price'];
    
    /*$sql = "INSERT INTO mycart (drink_cat, drink_title, drink_price, drink_desc, a_perc)
    VALUES ('$drink_cat', '$drink_title', '$drink_price', '$drink_desc', '$a_perc')";*/
    $sql = "INSERT INTO menu (name, price)
    VALUES ('$name', '$price')";
    
    if ($conn->query($sql) === TRUE) {
        header("Location:menu-grid.php?success!");

        //echo "New record created successfully";
    } else {
        echo "Error: " . $sql . "<br>" . $conn->error;
    }

    $conn->close();
      
?>