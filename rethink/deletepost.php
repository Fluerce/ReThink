<?php  
    session_start();
    $postID = $_SESSION['postID'];
    $dbname= "rethink";
    $conn = new mysqli("localhost", "root", "", $dbname);

    if($conn->connect_error){
        die("Connection failed: " . $conn->connect_error);
    }

    $sql = "DELETE FROM postTable WHERE postID = $postID";
    $result = $conn -> query($sql);
    unset($_SESSION['postID']);

    echo '<script>alert("Post Deleted!")</script>';
    header("Refresh: 2; URL=post.php"); 


?>