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

    <form class = "classform" action="postfunc.php" style= "height: 300px" method="post">
        <div>

            <h2 style= "text-align: left">Create Post</h2>

            <label for="title">Enter Title</label>
            <input type="text" placeholder="Title" name = "title" required>

            <br><br><br>

            <label for="content">Content</label>
            <input type="text"style= "width: 75%; height: 100px" name = "content" required>

            <br><br><br>

            <button type = "submit">Create Post</button>
        </div>
    </form>
</body>
</html>