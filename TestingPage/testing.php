<?php

$dbServername = "localhost";
$dbUsername = "root";
$dbPassword = "";
$dbName = "menu";

// Create connection

$conn = mysqli_connect($dbServername, $dbUsername, $dbPassword, $dbName);

$sql = "CREATE TABLE IF NOT EXISTS test(
    id INT NOT NULL PRIMARY KEY AUTO_INCREMENT,
    name VARCHAR(100) NOT NULL,
    price int(11) NOT NULL,
    description VARCHAR(100) NOT NULL
)";
$name = $_POST['name'];
$price = $_POST['price'];

/*$sql = "INSERT INTO mycart (drink_cat, drink_title, drink_price, drink_desc, a_perc)
VALUES ('$drink_cat', '$drink_title', '$drink_price', '$drink_desc', '$a_perc')";*/
$sql = "INSERT INTO test1 (name, price)
VALUES ('$name', '$price')";

if ($conn->query($sql) === TRUE) {
    header("Location:menu-grid.php?success!");

    //echo "New record created successfully";
} else {
    echo "Error: " . $sql . "<br>" . $conn->error;
}

$conn->close();


?>