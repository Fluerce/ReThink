<?php
    session_start(); 
    $title = $_POST['title'];
    $content = $_POST['content'];
    $date = date("F j, Y, g:i a");
    $id = $_SESSION['userID'];

    $dbname= "rethink";
    $conn = new mysqli("localhost", "root", "", $dbname);

    if($conn->connect_error){
        die("Connection failed: " . $conn->connect_error);
    }

    $sql = "INSERT INTO postTable (userID, postTitle, postContent, postDate) VALUES ($id ,'$title', '$content', '$date')";
    $result = $conn -> query($sql);

    echo '<script>alert("Post Added")</script>';
    header("Refresh: 2; URL=post.php"); 


?>