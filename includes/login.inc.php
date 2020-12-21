<?php

session_start();

if(isset($_POST['submit'])) {
    
    include 'dbh.inc.php';
    
    $username = mysqli_real_escape_string($conn, $_POST['username']);
    $password = mysqli_real_escape_string($conn, $_POST['password']);
    
    //Error handlers
    //Check if inputs are empty
    if(empty($username) || empty($password)) {
        header("Location: ../login.php?login=error1");
            exit();
    } else {
        $sql = "SELECT * FROM users WHERE username='$username' OR email='$username'";
        $result = mysqli_query($conn, $sql);
        $resultCheck = mysqli_num_rows($result);
        if ($resultCheck < 1) {
            header("Location: ../login.php?login=error2");
            exit();
        } else {
            if($row = mysqli_fetch_assoc($result)) {
                //De-hashing the password
                $hashedPasswordCheck = password_verify($password, $row['password']);
                if($hashedPasswordCheck == false) {
                    header("Location: ../login.php?login=error3");
                    exit();
                } elseif ($hashedPasswordCheck == true) {
                    //Log in the user here
                    $_SESSION['username'] = $row['username'];
                    $_SESSION['firstname'] = $row['firstname'];
                    $_SESSION['lastname'] = $row['lastname'];
                    $_SESSION['email'] = $row['email'];
                    $_SESSION['username'] = $row['username'];
                    $_SESSION['ordernum'] = $row['ordernum'];
                    header("Location: ../updatedatabase.php");
                    exit();
                }
            }
        }
    }
}else {
    header("Location: ../login.php?login=error4");//change to home.php later
    exit();
}
