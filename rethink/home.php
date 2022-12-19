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
        <p class = "headertitle">LogIn</p>
    </div>

    <form class = "classform" action="login.php" method="post">
        <div>

            <h2 style= "text-align: left">LogIn</h2>

            <label for="email">Email</label>
            <input type="text" placeholder="Enter Email" name = "email" required>

            <br><br><br>

            <label for="password">Password</label>
            <input type="password" placeholder="Enter Password" name = "password" required>

            <br><br><br>

            <button type = "submit">LogIn</button>
            <button type = "button" onclick="window.location='register.php'">Register</button>
        </div>
    </form>

</body>
</html>