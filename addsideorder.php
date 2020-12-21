<?php
    $dbServername = "localhost";
    $dbUsername = "root";
    $dbPassword = "";
    $dbName = "menu";

    // Create connection
    session_start();
    $conn = mysqli_connect($dbServername, $dbUsername, $dbPassword, $dbName);

    $sidename = $_POST['sidename'];
    $ingredient1 = $_POST['ingredient1'];
    $ingredient2 = $_POST['ingredient2'];
    $ingredient3 = $_POST['ingredient3'];
    $ordernum = $_POST['ordernum'];
    $price = $_POST['price'];

    $ordervariable = "tablesides$ordernum";
    $kitchensidemenu = "kitchensidemenu";
    $sideorder = "sideorder";
    
    /*$sql = "INSERT INTO mycart (drink_cat, drink_title, drink_price, drink_desc, a_perc)
    VALUES ('$drink_cat', '$drink_title', '$drink_price', '$drink_desc', '$a_perc')";*/
    $sql = "INSERT INTO $ordervariable (sidename, ingredient1, ingredient2, ingredient3, ordernum, price)
    VALUES ('$sidename', '$ingredient1','$ingredient2', '$ingredient3','$ordernum', '$price' )";
    $kitchensql = "INSERT INTO $kitchensidemenu (sidename, ingredient1, ingredient2, ingredient3, ordernum)
    VALUES ('$sidename', '$ingredient1','$ingredient2', '$ingredient3','$ordernum' )";
    $sideordersql = "INSERT INTO $sideorder (sidename, ingredient1, ingredient2, ingredient3, ordernum, price)
    VALUES ('$sidename', '$ingredient1','$ingredient2', '$ingredient3','$ordernum', '$price' )";
    $salesql = "INSERT INTO sidesales (sidename, ingredient1, ingredient2, ingredient3, ordernum, price)
    VALUES ('$sidename', '$ingredient1','$ingredient2', '$ingredient3','$ordernum', '$price' )";
    
    if ($conn->query($salesql) === TRUE) {
    }
    if ($conn->query($kitchensql) === TRUE) {
    }
    if ($conn->query($sideordersql) === TRUE) {
    }
    if ($conn->query($sql) === TRUE) {
        unset($_SESSION["sidename".$_SESSION['ordernum']]);
        unset($_SESSION["ingredient1".$_SESSION['ordernum']]);
        unset($_SESSION["ingredient2".$_SESSION['ordernum']]);
        unset($_SESSION["ingredient3".$_SESSION['ordernum']]);
        unset($_SESSION["price".$_SESSION['ordernum']]);
        header("Location:cart.php?SUPERsuccess!");
        
        //echo "New record created successfully";
    } else {
        echo "Error: " . $sql . "<br>" . $conn->error;
    }

    $conn->close();

?>