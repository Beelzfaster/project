<?php
    $dbServername = "localhost";
    $dbUsername = "root";
    $dbPassword = "";
    $dbName = "menu";

    // Create connection
    session_start();
    $conn = mysqli_connect($dbServername, $dbUsername, $dbPassword, $dbName);

    $drinkname = $_POST['drinkname'];
    $ordernum = $_POST['ordernum'];
    $price = $_POST['price'];

    $ordervariable = "drink$ordernum";
    $kitchendrinkmenu = "kitchendrinkmenu";
    $drinkorder = "drinkorder";
    
    /*$sql = "INSERT INTO mycart (drink_cat, drink_title, drink_price, drink_desc, a_perc)
    VALUES ('$drink_cat', '$drink_title', '$drink_price', '$drink_desc', '$a_perc')";*/
    $sql = "INSERT INTO $ordervariable (drinkname, ordernum, price)
    VALUES ('$drinkname', '$ordernum', '$price' )";
    $kitchensql = "INSERT INTO $kitchendrinkmenu (drinkname, ordernum)
    VALUES ('$drinkname', '$ordernum' )";
    $ordersql = "INSERT INTO $drinkorder (drinkname, ordernum, price)
    VALUES ('$drinkname', '$ordernum', '$price' )";
    $salesql = "INSERT INTO drinksales (drinkname, ordernum, price)
    VALUES ('$drinkname', '$ordernum', '$price' )";
    
    if ($conn->query($salesql) === TRUE) {
    }
    if ($conn->query($kitchensql) === TRUE) {
    }
    if ($conn->query($ordersql) === TRUE) {
    }
    if ($conn->query($sql) === TRUE) {
        unset($_SESSION["drinkname".$_SESSION['ordernum']]);
        unset($_SESSION["price".$_SESSION['ordernum']]);
        header("Location:cart.php?SUPERsuccess!");
        
        //echo "New record created successfully";
    } else {
        echo "Error: " . $sql . "<br>" . $conn->error;
    }

    $conn->close();

?>