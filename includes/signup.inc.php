<?php

if(isset($_POST['submit'])){
    
    include_once 'dbh.inc.php';
    
    $firstname = mysqli_real_escape_string($conn, $_POST['firstname']);
    $lastname = mysqli_real_escape_string($conn, $_POST['lastname']);
    $email = mysqli_real_escape_string($conn, $_POST['email']);
    $username = mysqli_real_escape_string($conn, $_POST['username']);
    $password = mysqli_real_escape_string($conn, $_POST['password']);
    
    //Error handlers
    //Check for empty fields
    if(empty($firstname) || empty($lastname) || empty($email) || empty($username) || empty($password)) {
        header("Location: ../signup.php?signup=empty");
        exit();
    }else {
        //Check if input characters are valid
        if(!preg_match("/^[a-zA-Z]*$/", $firstname) || !preg_match("/^[a-zA-Z]*$/", $lastname)) {
            header("Location: ../signup.php?signup=invalid");
            exit();
        }else {
            //Check if email is valid
            if(!filter_var($email, FILTER_VALIDATE_EMAIL)) {
                header("Location: ../signup.php?signup=bademail");
                exit();
            }else {
                $sql = "SELECT * FROM users WHERE username='$username'";
                $result = mysqli_query($conn, $sql);
                $resultCheck = mysqli_num_rows($result);
                
                if ($resultCheck > 0) {
                    header("Location: ../signup.php?signup=usertaken");
                    exit();
                }else {
                    //hashing the password
                    $hashedPassword = password_hash($password, PASSWORD_DEFAULT);
                    //Insert the user into the database
                    $sql = "INSERT INTO users (firstname, lastname, username, email, password) VALUES ('$firstname', '$lastname', '$username', '$email', '$hashedPassword');";
                    mysqli_query($conn, $sql);
                    header("Location: ../login.php?signup=success");
                    exit();
                }
                
            }
        }
    }
    
}else{
    header("Location: ../signup.php");
    exit();
}