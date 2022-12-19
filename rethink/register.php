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
        <p class = "headertitle">Register</p>
    </div>

    <h1 style = "text-align: center">Registration</h1>
    <form class = "classform" style = "height: 400px" action="registerfunc.php" method="post">
        <div>

            <h4 style= "text-align: left">See the Registration Rules</h4>

            <label for="user">Username</label>
            <input type="text" placeholder="Enter Username" name = "user" required>

            <br><br><br>

            <label for="email">Email</label>
            <input type="text" placeholder="Enter Email" name = "email" required>

            <br><br><br>

            <label for="password">Password</label>
            <input type="password" placeholder="Enter Password" name = "password" required>

            <br><br><br>

            <label for="repassword">Re-Enter Password</label>
            <input type="password" placeholder="Confirm Password" name = "repassword" required>

            <br><br><br>

            <button type = "submit">Register</button>
            <p>Return to the <a href="home.php">LOGIN PAGE</a></p>
        </div>
    </form>

</body>
</html>