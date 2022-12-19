<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="styles.css">
    <title>ReThink</title>
</head>
<body>
<div class = "header">
        <p class = "headertitle">MiniBlog</p>
        <p class = "headertitle">Hello 
            <?php 
            session_start(); 
            echo $_SESSION["username"];
            ?>!
        </p>
        <a href="post.php">Home</a>
        <a href="logout.php">LogOut</a>
</div>

        <?php
            $dbname= "rethink";
            $conn = new mysqli("localhost", "root", "", $dbname);
        
            if($conn->connect_error){
                die("Connection failed: " . $conn->connect_error);
            }
            $userID = $_SESSION['userID'];
            $sql = "SELECT * FROM postTable WHERE userID = $userID";
            $result = $conn -> query($sql);
        ?>


        <div class = "classform" style = "margin-top: 100px; height: 1000px; padding: 20px; text-align: left; font-color">
            <?php
                if($result != null){
                    while($row = $result->fetch_assoc()){
                        echo "<p>" . $row['postTitle'] . "<br>" . $row['postContent'] . "<br>" . $row['postDate'] . "</p>";
                        $post_id = $row['postID'];
            ?>
                    <button type = "button" style = "background-color: lightgreen; height: 50px; width: 200px; font-size: 15px" onclick="window.location='.php'">Edit Post</button>
                    <button type = "button" style = "background-color: red; height: 50px; width: 200px; font-size: 15px" onclick="window.location='deletepost.php'">Delete Post</button>
            <?php
                        echo "<br> ------------------------------------------------------------------ <br>";
                        
                    }
                }
            ?>
            
        </div>
        <div class = "classform" style = "margin-top: 25px; height: 100px; padding: 20px">
            <button type = "button" style = "background-color: lightblue; height: 50px; width: 200px; font-size: 15px" onclick="window.location='createpost.php'">Create New Post</button>
        </div>

    
</body>
</html>