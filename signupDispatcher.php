<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <style>
        .error{color: red;}
    </style>
</head>
<body>
    <form action="prepareDispatcher.php" method="post">
        <input type="text" name="name" placeholder="Name" require><span class="error">*</span><br><br>
        <input type="text" name="email" placeholder="Email" require><span class="error">*</span><br><br>
        <input type="number" name="phone_no" placeholder="Phone number" id="" require><span class="error">*</span><br><br>
        <input type="password" name="pass" placeholder="Password" require><span class="error">*</span><br><br>
        <input type="password" name="passConfirm" placeholder="Confirm Password" require><span class="error">*</span><br><br>
        <input type="submit" value="Signup">
    </form>
</body>
</html>