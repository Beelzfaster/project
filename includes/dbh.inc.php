<?php

$dbServername = "localhost";
$dbUsername = "root";
$dbPassword = "";
$dbName = "login";
$dbMenu = "menu";

// Create connection

$conn = mysqli_connect($dbServername, $dbUsername, $dbPassword, $dbName);
$connMenu = mysqli_connect($dbServername, $dbUsername, $dbPassword, $dbMenu);

//check connection

    $users = "users";
    $kitchenmainmenu = "kitchenmainmenu";
    $kitchensidemenu = "kitchensidemenu";
    $kitchendrinkmenu = "kitchendrinkmenu";

    $userssql = "CREATE TABLE IF NOT EXISTS $users(
        id INT NOT NULL PRIMARY KEY AUTO_INCREMENT,
        firstname VARCHAR(100) NOT NULL,
        lastname VARCHAR(100) NOT NULL,
        username VARCHAR(100) NOT NULL,
        email VARCHAR(100) NOT NULL,
        password VARCHAR(100) NOT NULL,
        ordernum int(11) NOT NULL
    )";

    $kitchenmainmenusql = "CREATE TABLE IF NOT EXISTS $kitchenmainmenu(
        id INT NOT NULL PRIMARY KEY AUTO_INCREMENT,
        firstitem VARCHAR(100) NOT NULL,
        seconditem VARCHAR(100) NOT NULL,
        thirditem VARCHAR(100) NOT NULL,
        size VARCHAR(100) NOT NULL,
        firstextra VARCHAR(100) NOT NULL,
        secondextra VARCHAR(100) NOT NULL,
        thirdextra VARCHAR(100) NOT NULL,
        firstsauce VARCHAR(100) NOT NULL,
        secondsauce VARCHAR(100) NOT NULL,
        ordernum int(11) NOT NULL
    )";

    $kitchensidemenusql = "CREATE TABLE IF NOT EXISTS $kitchensidemenu(
        id INT NOT NULL PRIMARY KEY AUTO_INCREMENT,
        sidename VARCHAR(100) NOT NULL,
        ingredient1 VARCHAR(100) NOT NULL,
        ingredient2 VARCHAR(100) NOT NULL,
        ingredient3 VARCHAR(100) NOT NULL,
        ordernum int(11) NOT NULL
    )";

    $kitchendrinkmenusql = "CREATE TABLE IF NOT EXISTS $kitchendrinkmenu(
        id INT NOT NULL PRIMARY KEY AUTO_INCREMENT,
        drinkname VARCHAR(100) NOT NULL,
        ordernum int(11) NOT NULL
    )";

    if ($conn->query($userssql) === TRUE) {
    }
    if ($connMenu->query($kitchenmainmenusql) === TRUE) {
    }
    if ($connMenu->query($kitchensidemenusql) === TRUE) {
    }
    if ($connMenu->query($kitchendrinkmenusql) === TRUE) {
    }
    
?>