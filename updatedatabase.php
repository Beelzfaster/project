<?php

    $dbServername = "localhost";
    $dbUsername = "root";
    $dbPassword = "";
    $dbMenu = "menu";

    // Create connection

    $connMenu = mysqli_connect($dbServername, $dbUsername, $dbPassword, $dbMenu);

    session_start();
    if(!isset($_SESSION['username'])){
        header('location: login.php');
    }

    $mainmenu = "mainmenu";
    $sidemenu = "sidemenu";
    $saucemenu = "saucemenu";
    $drinkmenu = "drinkmenu";
    $tablemenu = "tablemenu";

    $mainmenusql = "CREATE TABLE IF NOT EXISTS $mainmenu(
        id INT NOT NULL PRIMARY KEY AUTO_INCREMENT,
        itemname VARCHAR(100) NOT NULL,
        itemtype VARCHAR(100) NOT NULL,
        firstitem VARCHAR(100) NOT NULL,
        seconditem VARCHAR(100) NOT NULL,
        thirditem VARCHAR(100) NOT NULL,
        size VARCHAR(100) NOT NULL,
        price int(11) NOT NULL,
        picture VARCHAR(100) NOT NULL
    )";

    $sidemenusql2 = "CREATE TABLE IF NOT EXISTS $sidemenu(
        id INT NOT NULL PRIMARY KEY AUTO_INCREMENT,
        itemname VARCHAR(100) NOT NULL,
        picture VARCHAR(100) NOT NULL
    )";

    $drinkmenusql = "CREATE TABLE IF NOT EXISTS $drinkmenu(
        id INT NOT NULL PRIMARY KEY AUTO_INCREMENT,
        itemname VARCHAR(100) NOT NULL,
        itemtype VARCHAR(100) NOT NULL,
        picture VARCHAR(100) NOT NULL
    )";

    $tablemenusql = "CREATE TABLE IF NOT EXISTS $tablemenu(
        id INT NOT NULL PRIMARY KEY AUTO_INCREMENT,
        itemname VARCHAR(100) NOT NULL,
        tablenum int(11) NOT NULL,
        picture VARCHAR(100) NOT NULL
    )";

    $saucemenusql = "CREATE TABLE IF NOT EXISTS $saucemenu(
        id INT NOT NULL PRIMARY KEY AUTO_INCREMENT,
        itemname VARCHAR(100) NOT NULL,
        picture VARCHAR(100) NOT NULL
    )";

    if ($connMenu->query($tablemenusql) === TRUE) {
    }
    $sqlfortables = "SELECT id, picture FROM $tablemenu ORDER BY id";
    $result4 = mysqli_query($connMenu, $sqlfortables);
            
    $id = 0;
    while($tablemenu = mysqli_fetch_assoc($result4)) {
        $id = $tablemenu['id'];
    }// end while loop
    if ($id == 0){
        $tablesql = "INSERT INTO tablemenu (itemname, tablenum, picture)
            VALUES ('Table 1', 1, '1.png' ),
            ('Table 2', 2, '2.png' ),
            ('Table 3', 3, '3.png' ),
            ('Table 4', 4, '4.png' ),
            ('Table 5', 5, '5.png' ),
            ('Table 6', 6,'6.png' ),
            ('Table 7', 7,'7.png' ),
            ('Table 8', 8,'8.png' ),
            ('Table 9', 9,'9.png' ),
            ('Table 10', 10,'10.png' ),
            ('Table 11', 11,'11.png' ),
            ('Table 12', 12,'12.png' ),
            ('Table 13', 13,'13.png' ),
            ('Table 14', 14,'14.png' ),
            ('Table 15', 15,'15.png' ),
            ('Table 16', 16,'16.png' ),
            ('Table 17', 17,'17.png' ),
            ('Table 18', 18,'18.png' ),
            ('Table 19', 19,'19.png' ),
            ('Table 20', 20,'20.png' ),
            ('Table 21', 21,'21.png' )";
        if ($connMenu->query($tablesql) === TRUE) {
        }

    }

    if ($connMenu->query($mainmenusql) === TRUE) {
    }
    $sqlformain = "SELECT id, firstitem, seconditem, thirditem, size, price, picture FROM $mainmenu ORDER BY id";
    $result = mysqli_query($connMenu, $sqlformain);
            
    $id = 0;
    while($mainmenu = mysqli_fetch_assoc($result)) {
        $id = $mainmenu['id'];
    }// end while loop
    if ($id == 0){
        $mainsql = "INSERT INTO mainmenu (itemname, itemtype, firstitem, seconditem, thirditem, size, price, picture)
        VALUES ('Single Hamburger', 'Main', 'Beef', 'Nothing','Nothing', '1','5', 'beef1.png' ),
        ('Double Hamburger', 'Main', 'Beef', 'Beef','Nothing', '2','6', 'beef2.png' ),
        ('Triple Hamburger', 'Main', 'Beef', 'Beef','Beef', '3','7', 'beef3.png' ),
        ('Single Chicken Burger', 'Main', 'Chicken', 'Nothing','Nothing', '1','5', 'chicken1.png' ),
        ('Double Chicken Burger', 'Main', 'Chicken', 'Chicken','Nothing', '2','6', 'chicken2.png' ),
        ('Triple Chicken Burger', 'Main', 'Chicken', 'Chicken','Chicken', '3','7', 'chicken3.png' ),
        ('Single Veggie Burger', 'Main', 'Veggie', 'Nothing','Nothing', '1','5', 'veggie1.png' ),
        ('Double Veggie Burger', 'Main', 'Veggie', 'Veggie','Nothing', '2','6', 'veggie2.png' ),
        ('Triple Veggie Burger', 'Main', 'Veggie', 'Veggie','Veggie', '3','7', 'veggie3.png' ),
        ('Fries', 'Side', 'Fries', 'Nothing','Nothing', '1','3', 'Fries.png' ),
        ('Bacon Cheese Fries', 'Side', 'Bacon', 'Cheese','Fries', '1','3', 'BaconCheeseFries.jpg' ),
        ('Bacon Mac & Cheese', 'Side', 'Beef', 'Nothing','Nothing', '1','3', 'Mac.png' ),
        ('Vanilla Shake', 'Drink', 'Beef', 'Nothing','Nothing', '1','5', 'Vanilla.png' ),
        ('Chocolate Shake', 'Drink', 'Beef', 'Nothing','Nothing', '1','5', 'Chocolate.png' ),
        ('Strawberry Shake', 'Drink', 'Beef', 'Nothing','Nothing', '1','5', 'Strawberry.png' ),
        ('Coke', 'Drink', 'Nothing', 'Nothing','Nothing', '1','2', 'cokeLogo.jpg' ),
        ('7 up', 'Drink', 'Nothing', 'Nothing','Nothing', '1','2', '7upLogo.jpg' ),
        ('Fanta', 'Drink', 'Nothing', 'Nothing','Nothing', '1','2', 'fantaOrangeLogo.jpg' )";
        if ($connMenu->query($mainsql) === TRUE) {
        }

    }

    if ($connMenu->query($sidemenusql2) === TRUE) {
    }
    $sqlforsides = "SELECT id, picture FROM $sidemenu ORDER BY id";
    $result3 = mysqli_query($connMenu, $sqlforsides);
            
    $id = 0;
    while($sidemenu = mysqli_fetch_assoc($result3)) {
        $id = $sidemenu['id'];
    }// end while loop
    if ($id == 0){
        $sidesql = "INSERT INTO sidemenu (itemname, picture)
            VALUES ('Bacon', 'Bacon.jpg' ),
            ('Lettuce', 'Lettuce.png' ),
            ('Tomato', 'Tomato.png' ),
            ('Onions', 'Onion.png' ),
            ('Pickles', 'Pickles.png' ),
            ('Mushrooms', 'Mushroom.png' ),
            ('Cheese', 'Cheese.png' ),
            ('Peppers', 'Peppers.png' ),
            ('Nothing', 'Nothing.png' )";
        if ($connMenu->query($sidesql) === TRUE) {
        }

    }

    if ($connMenu->query($saucemenusql) === TRUE) {
    }
    $sqlforsauces = "SELECT id, picture FROM $saucemenu ORDER BY id";
    $result4 = mysqli_query($connMenu, $sqlforsauces);
            
    $id = 0;
    while($saucemenu = mysqli_fetch_assoc($result4)) {
        $id = $saucemenu['id'];
    }// end while loop
    if ($id == 0){
        $saucesql = "INSERT INTO saucemenu (itemname, picture)
            VALUES ('Ketchup', 'Ketchup.png' ),
            ('Mustard', 'Mustard.png' ),
            ('Mayo', 'Mayo.png' ),
            ('BBQ', 'BBQ.png' ),
            ('Special', 'Special.png' ),
            ('Nothing', 'NoSauce.png' )";
        if ($connMenu->query($saucesql) === TRUE) {
        }

    }

    if ($connMenu->query($mainmenusql) === TRUE) {
        header("Location:home.php?login=success");
    }
    else {
        echo "Error: " . $menusql . "<br>" . $connMenu->error;
    }

    $conn->close();
    $connMenu->close();

?>