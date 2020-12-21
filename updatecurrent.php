<?php
    $dbServername = "localhost";
    $dbUsername = "root";
    $dbPassword = "";
    $dbName = "login";
    $dbMenu = "menu";

    // Create connection

    $conn = mysqli_connect($dbServername, $dbUsername, $dbPassword, $dbName);
    $connMenu = mysqli_connect($dbServername, $dbUsername, $dbPassword, $dbMenu);
    
    session_start();
    if(!isset($_SESSION['username'])){
        header('location: login.php');
    }
    
    $ordernum = $_POST['tablenum'];
    
    $sql = "UPDATE users SET ordernum = '$ordernum' WHERE username = '".$_SESSION['username']."'";

    $ordervariable = "table$ordernum";
    $ordersides = "tablesides$ordernum";
    $drinks = "drink$ordernum";

    $mainsalessql = "CREATE TABLE IF NOT EXISTS mainsales(
        id INT NOT NULL PRIMARY KEY AUTO_INCREMENT,
        firstitem VARCHAR(100) NOT NULL,
        seconditem VARCHAR(100) NOT NULL,
        thirditem VARCHAR(100) NOT NULL,
        size int(11) NOT NULL,
        firstextra VARCHAR(100) NOT NULL,
        secondextra VARCHAR(100) NOT NULL,
        thirdextra VARCHAR(100) NOT NULL,
        firstsauce VARCHAR(100) NOT NULL,
        secondsauce VARCHAR(100) NOT NULL,
        ordernum int(11) NOT NULL,
        price int(11) NOT NULL
    )";

    $sidesalessql = "CREATE TABLE IF NOT EXISTS sidesales(
        id INT NOT NULL PRIMARY KEY AUTO_INCREMENT,
        sidename VARCHAR(100) NOT NULL,
        ingredient1 VARCHAR(100) NOT NULL,
        ingredient2 VARCHAR(100) NOT NULL,
        ingredient3 VARCHAR(100) NOT NULL,
        ordernum int(11) NOT NULL,
        price int(11) NOT NULL
    )";

    $drinksalessql = "CREATE TABLE IF NOT EXISTS drinksales(
        id INT NOT NULL PRIMARY KEY AUTO_INCREMENT,
        drinkname VARCHAR(100) NOT NULL,
        ordernum int(11) NOT NULL,
        price int(11) NOT NULL
    )";

    $mainordersql = "CREATE TABLE IF NOT EXISTS mainorder(
        id INT NOT NULL PRIMARY KEY AUTO_INCREMENT,
        firstitem VARCHAR(100) NOT NULL,
        seconditem VARCHAR(100) NOT NULL,
        thirditem VARCHAR(100) NOT NULL,
        size int(11) NOT NULL,
        firstextra VARCHAR(100) NOT NULL,
        secondextra VARCHAR(100) NOT NULL,
        thirdextra VARCHAR(100) NOT NULL,
        firstsauce VARCHAR(100) NOT NULL,
        secondsauce VARCHAR(100) NOT NULL,
        ordernum int(11) NOT NULL,
        price int(11) NOT NULL
    )";

    $sideordersql = "CREATE TABLE IF NOT EXISTS sideorder(
        id INT NOT NULL PRIMARY KEY AUTO_INCREMENT,
        sidename VARCHAR(100) NOT NULL,
        ingredient1 VARCHAR(100) NOT NULL,
        ingredient2 VARCHAR(100) NOT NULL,
        ingredient3 VARCHAR(100) NOT NULL,
        ordernum int(11) NOT NULL,
        price int(11) NOT NULL
    )";

    $drinkordersql = "CREATE TABLE IF NOT EXISTS drinkorder(
        id INT NOT NULL PRIMARY KEY AUTO_INCREMENT,
        drinkname VARCHAR(100) NOT NULL,
        ordernum int(11) NOT NULL,
        price int(11) NOT NULL
    )";

    $menusql = "CREATE TABLE IF NOT EXISTS $ordervariable(
        id INT NOT NULL PRIMARY KEY AUTO_INCREMENT,
        firstitem VARCHAR(100) NOT NULL,
        seconditem VARCHAR(100) NOT NULL,
        thirditem VARCHAR(100) NOT NULL,
        size int(11) NOT NULL,
        firstextra VARCHAR(100) NOT NULL,
        secondextra VARCHAR(100) NOT NULL,
        thirdextra VARCHAR(100) NOT NULL,
        firstsauce VARCHAR(100) NOT NULL,
        secondsauce VARCHAR(100) NOT NULL,
        ordernum int(11) NOT NULL,
        price int(11) NOT NULL
    )";

    $sidesmenusql = "CREATE TABLE IF NOT EXISTS $ordersides(
        id INT NOT NULL PRIMARY KEY AUTO_INCREMENT,
        sidename VARCHAR(100) NOT NULL,
        ingredient1 VARCHAR(100) NOT NULL,
        ingredient2 VARCHAR(100) NOT NULL,
        ingredient3 VARCHAR(100) NOT NULL,
        ordernum int(11) NOT NULL,
        price int(11) NOT NULL
    )";

    $drinksql = "CREATE TABLE IF NOT EXISTS $drinks(
        id INT NOT NULL PRIMARY KEY AUTO_INCREMENT,
        drinkname VARCHAR(100) NOT NULL,
        ordernum int(11) NOT NULL,
        price int(11) NOT NULL
    )";

    if ($connMenu->query($mainordersql) === TRUE) {
    }
    if ($connMenu->query($sideordersql) === TRUE) {
    }
    if ($connMenu->query($drinkordersql) === TRUE) {
    }
    if ($connMenu->query($mainsalessql) === TRUE) {
    }
    if ($connMenu->query($sidesalessql) === TRUE) {
    }
    if ($connMenu->query($drinksalessql) === TRUE) {
    }
    if ($conn->query($sql) === TRUE) {
        $_SESSION['ordernum'] = $ordernum;
        if ($connMenu->query($menusql) === TRUE) {
            if ($connMenu->query($sidesmenusql) === TRUE) {
                if ($connMenu->query($drinksql) === TRUE) {
                    header("Location:tablenavigation.php?success!");
                }
            }
            //echo "New record created successfully";
        } else {
            echo "Error: " . $menusql . "<br>" . $connMenu->error;
        }
        //echo "New record created successfully";
    } else {
        echo "Error: " . $sql . "<br>" . $conn->error;
    }

    $conn->close();
    $connMenu->close();
      
?>