<?php

    $user = $_POST['user'];
    $email = $_POST['email'];
    $passw = $_POST['password'];
    $repassw = $_POST['repassword'];

    $dbname= "rethink";
    $conn = new mysqli("localhost", "root", "", $dbname);

    if($conn->connect_error){
        die("Connection failed: " . $conn->connect_error);
    }

    $sql = "SELECT * FROM userTable WHERE userEmail = '$email'";
    $result = $conn -> query($sql);

    if($passw == $repassw){
        if($result->fetch_assoc() == null){
            $sql = "INSERT INTO userTable (userName, userEmail, userPassword) VALUES ('$user', '$email', '$passw')";
            $result = $conn -> query($sql);
            $conn -> close();
            echo '<script>alert("User Added")</script>';
            header("Refresh: 2; URL=home.php"); 
        }else{     
            echo '<script>alert("Email Has Been Used Before")</script>';     
            header("Refresh: 2; URL=register.php"); 
        }
    }else{
        echo '<script>alert("Password does not Match")</script>';
        header("Refresh: 2; URL=register.php"); 
    }

    
?>