<?php
    session_start();
    $email = $_POST['email'];
    $passw = $_POST['password'];

    $dbname= "rethink";
    $conn = new mysqli("localhost", "root", "", $dbname);

    if($conn->connect_error){
        die("Connection failed: " . $conn->connect_error);
    }

    $sql = "SELECT * FROM userTable WHERE userEmail = '$email'";
    $result = $conn -> query($sql);
    $row = $result->fetch_assoc();

    if($row != null){
        if($row['userPassword'] == $passw){
            $_SESSION['username'] = $row['userName'];
            $_SESSION['userID'] = $row['userID'];
            echo '<script>alert("LogIn Success!")</script>';
            header("Refresh: 2; URL=post.php"); 
        }else{
            echo '<script>alert("Wrong Password")</script>';
            header("Refresh: 2; URL=home.php"); 
        }
    }else{
        echo '<script>alert("Email Not Found")</script>';
        header("Refresh: 2; URL=home.php"); 
    }
?>