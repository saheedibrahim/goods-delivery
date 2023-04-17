<?php session_start() ?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    
<?php
if(isset($_POST["login"])){
    // if(isset($_POST['pass'] !== ))
    extract($_POST);
    $servername = "localhost:3307";
    $username = "root";
    $password = "";
    $dbname = "goods_delivery";
    
    $conn = new mysqli($servername, $username, $password, $dbname);
    if($conn->connect_error){
        die("Connection failed: ". $conn->connect_error);
    }
    // echo $email . " " . $pass . " Thanks <br>";
    $sql = "SELECT * FROM Person WHERE Email = '$email' and PersonPassword = '$pass'";
    $result = $conn->query($sql);
    if($result->num_rows > 0){
    
        
    $result = $conn->query($sql);
        $row = $result->fetch_assoc();
        $_SESSION['PersonID'] = $row['PersonID'];
        $_SESSION['Firstname'] = $row['Firstname'];
        $_SESSION['Lastname'] = $row['Lastname'];
        $_SESSION['PhoneNo'] = $row['PhoneNo'];
        $_SESSION['Email'] = $row['Email'];
        header("Location: ../home.php");

        
    } else {
        echo "Invalid Email or Password";
        exit;
    }
    
}
?>
    
</body>
</html>