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

    <form action="preparePerson1.php" method="post">
        Firstname: <input type="text" name="firstname" required><span class="error">* </span><br><br>
        Lastname: <input type="text" name="lastname" required><span class="error">* </span><br><br>
        Phone number: <input type="text" name="phone_no" id="" required><span class="error">*</span><br><br>
        Email: <input type="email" name="email" id="" required><span class="error">*</span><br><br>
        Password: <input type="password" name="password" required><span class="error">* </span><br><br>
        Confirm Password: <input type="password" name="confirm_password" required><span class="error">* </span><br><br>
        <input type="submit" name="signup" value="Signup">
    </form>
    <p>Already have an account? <a href="loginPerson.php">Login</a></p>
</body>
</html>