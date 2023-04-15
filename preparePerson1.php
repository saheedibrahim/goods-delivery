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
extract($_POST);
$servername = "localhost:3307";
$username = "root";
$password = "";
$dbname = "goods_delivery";

$conn = new mysqli($servername, $username, $password, $dbname);
if($conn->connect_error){
    die("Connection failed: ". $conn->connect_error);
}
$sql = "SELECT * FROM Person WHERE Email = '$email' ";
$result = $conn->query($sql);
if($result->num_rows > 0){
    echo "Email already exist";
    exit;
} else {
$stmt = $conn->prepare("INSERT INTO Person(Firstname, Lastname, PhoneNo, Email, PersonPassword, ConfirmPassword)
    VALUES(?, ?, ?, ?, ?, ?)");
    
function test_input($data){
    $data = trim($data);
    $data = stripslashes($data);
    $data = htmlspecialchars($data);
    return $data;
}

if ($_SERVER["REQUEST_METHOD"] == "POST"){
    if (empty($_POST["firstname"])){
        echo $firstnameErr = "Firstname is required";
        exit;
    } else {
        $firstname = test_input($_POST["firstname"]);
        if (!preg_match("/^[a-zA-Z-]*$/", $firstname)){
            echo $firstnameErr = "Only letters are allowed";
            exit;
        }
    }
    if (empty($_POST["lastname"])){
        echo $lastnameErr = "Lastname is required";
        exit;
    } else {
        $lastname = test_input($_POST["lastname"]);
        if (!preg_match("/^[a-zA-Z-]*$/", $lastname)){
            echo $lastnameErr = "Only letters are allowed in lastname";
            exit;
        }
    }
    if ((empty($_POST["phone_no"]))){
        echo $phone_noErr = "Phone number is required";
        exit;
    } elseif ( strlen($_POST["phone_no"]) != 11){
        echo $phone_noErr = "Phone numer must be eleven digit number";
        exit;
    }
        else {
        $phone_no = test_input($_POST["phone_no"]);
        if (!preg_match("/^[0-9]*$/", $phone_no)){
            echo $phone_noErr = "Only numbers are allowed";
            exit;
        }
    }
    if (empty($_POST["email"])){
        echo $emailErr = "Email is required";
        exit;
    } else {
        $email = test_input($_POST["email"]);
        if(!filter_var($email, FILTER_VALIDATE_EMAIL)){
            echo $emailErr = "Invalid email format";
            exit;
        }
    }
    if (empty($_POST["password"])){
        echo $person_passwordErr = "Password is required";
        exit;
    } else {
        $person_password = test_input($_POST["password"]);
    }
    if (empty($_POST["confirm_password"])){
        echo $confirm_passwordErr = "Please confirm your password";
        exit;
    } elseif($_POST["password"] == $_POST["confirm_password"]) {
        $confirm_password = test_input($_POST["confirm_password"]);
    } else{
        echo $confirm_passwordErr = "Password does not match";
        exit;
    }
    $stmt->bind_param("ssssss", $firstname, $lastname, $phone_no, $email, $person_password, $confirm_password);
    $stmt->execute();
    echo "New record created successfully";
    }
}
$stmt->close();
$conn->close();
?>
<a href="loginPerson.php">Login</a>
</body>
</html>