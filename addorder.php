<?php
    $dbServername = "localhost";
    $dbUsername = "root";
    $dbPassword = "";
    $dbName = "menu";

    // Create connection
    session_start();
    $conn = mysqli_connect($dbServername, $dbUsername, $dbPassword, $dbName);

    $firstitem = $_POST['firstitem'];
    $seconditem = $_POST['seconditem'];
    $thirditem = $_POST['thirditem'];
    $size = $_POST['size'];
    $firstextra = $_POST['firstextra'];
    $secondextra = $_POST['secondextra'];
    $thirdextra = $_POST['thirdextra'];
    $firstsauce = $_POST['firstsauce'];
    $secondsauce = $_POST['secondsauce'];
    $ordernum = $_POST['ordernum'];
    $price = $_POST['price'];

    $ordervariable = "table$ordernum";
    $kitchenmainmenu = "kitchenmainmenu";
    $mainorder = "mainorder";
    
    /*$sql = "INSERT INTO mycart (drink_cat, drink_title, drink_price, drink_desc, a_perc)
    VALUES ('$drink_cat', '$drink_title', '$drink_price', '$drink_desc', '$a_perc')";*/
    $sql = "INSERT INTO $ordervariable (firstitem, seconditem, thirditem, size, firstextra, secondextra, thirdextra, firstsauce, secondsauce, ordernum, price)
    VALUES ('$firstitem', '$seconditem','$thirditem', '$size','$firstextra', '$secondextra','$thirdextra', '$firstsauce','$secondsauce', '$ordernum', '$price' )";
    $kitchensql = "INSERT INTO $kitchenmainmenu (firstitem, seconditem, thirditem, size, firstextra, secondextra, thirdextra, firstsauce, secondsauce, ordernum)
    VALUES ('$firstitem', '$seconditem','$thirditem', '$size','$firstextra', '$secondextra','$thirdextra', '$firstsauce','$secondsauce', '$ordernum' )";
    $ordersql = "INSERT INTO $mainorder (firstitem, seconditem, thirditem, size, firstextra, secondextra, thirdextra, firstsauce, secondsauce, ordernum, price)
    VALUES ('$firstitem', '$seconditem','$thirditem', '$size','$firstextra', '$secondextra','$thirdextra', '$firstsauce','$secondsauce', '$ordernum', '$price' )";
    $salesql = "INSERT INTO mainsales (firstitem, seconditem, thirditem, size, firstextra, secondextra, thirdextra, firstsauce, secondsauce, ordernum, price)
    VALUES ('$firstitem', '$seconditem','$thirditem', '$size','$firstextra', '$secondextra','$thirdextra', '$firstsauce','$secondsauce', '$ordernum', '$price' )";
    
    if ($conn->query($salesql) === TRUE) {
    }
    if ($conn->query($kitchensql) === TRUE) {
    }
    if ($conn->query($ordersql) === TRUE) {
    }
    if ($conn->query($sql) === TRUE) {
        unset($_SESSION["firstitem".$_SESSION['ordernum']]);
        unset($_SESSION["seconditem".$_SESSION['ordernum']]);
        unset($_SESSION["thirditem".$_SESSION['ordernum']]);
        unset($_SESSION["size".$_SESSION['ordernum']]);
        unset($_SESSION["firstextra".$_SESSION['ordernum']]);
        unset($_SESSION["secondextra".$_SESSION['ordernum']]);
        unset($_SESSION["thirdextra".$_SESSION['ordernum']]);
        unset($_SESSION["firstsauce".$_SESSION['ordernum']]);
        unset($_SESSION["secondsauce".$_SESSION['ordernum']]);
        unset($_SESSION["price".$_SESSION['ordernum']]);
        header("Location:cart.php?SUPERsuccess!");
        
        //echo "New record created successfully";
    } else {
        echo "Error: " . $sql . "<br>" . $conn->error;
    }

    $conn->close();

?>