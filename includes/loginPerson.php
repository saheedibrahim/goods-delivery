<?php session_start(); ?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <style>
        .error{color: #ff0000;}
    </style>
    <title>Document</title>
</head>
<body>
    <form action="loginPersonProcess.php" method="post">
        Email: <input type="email" name="email" id="" required><span class="error">*</span><br><br>
        Password: <input type="password" name="pass" required><span class="error">* </span><br><br>
        <input type="submit" name="login" value="Login">
    </form>
    <p>Don't have an account? <a href="../signupPerson.php">Register Here!</a></p>
</body>
</html>