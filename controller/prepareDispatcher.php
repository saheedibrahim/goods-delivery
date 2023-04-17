<?php
    require "../DBconn/DB.php";
extract($_POST);
$sql = "SELECT * FROM Dispatcher WHERE Email = '$email'";
$result = $conn->query($sql);
if($result->num_rows > 0){
    echo "Email already exist";
} else{
    $stmt = $conn->prepare("INSERT INTO Dispatcher(Names, Email, PhoneNo, Pass, PassConfirm)
    VALUES(?, ?, ?, ?, ?)");
    function test_input($data){
        $data = trim($data);
        $data = stripslashes($data);
        $data = htmlspecialchars($data);
        return $data;
    }
    if($_SERVER["REQUEST_METHOD"] == "POST"){
        if(empty($_POST["name"])){
            echo $nameErr = "Please insert your full name";
            exit;
        } else {
            $name = test_input($_POST["name"]);
            if(!preg_match("/^[a-zA-Z- ]*$/", $name)){
                echo "Only letters and spaces are allowed";
                exit;
            }
        }
        if(empty($_POST["email"])){
            echo $emailErr = "Email cannot be empty";
            exit;
        } else {
            $email = test_input($_POST["email"]);
            if(!filter_var($email, FILTER_VALIDATE_EMAIL)){
                echo $emailErr = "Insert a valid email";
                exit;
            }
        }
        if(empty($_POST["phone_no"])){
            echo $phone_noErr = "Please insert your phone number";
            exit;
        } else {
            $phone_no = test_input($_POST["phone_no"]);
            if(!preg_match("/^[0-9]*$/", $phone_no)){
                echo $phone_noErr = "Only numbers are allowed";
                exit;
            }
        }
        if(empty($_POST["pass"])){
            echo $passErr = "Please insert your full name";
            exit;
        } else {
            $pass = test_input($_POST["pass"]);
            if(!preg_match("/^[a-zA-Z- ]*$/", $pass)){
                echo "Only letters and spaces are allowed";
                exit;
            }
        }
        if(empty($_POST["passConfirm"])){
            echo $passConfirmErr = "Please insert your full name";
            exit;
        } elseif($_POST["pass"] == $_POST["passConfirm"]) {
            $passConfirm = test_input($_POST["passConfirm"]);
            } else {
                echo $passConfirmErr = "Password does not match";
                exit;
            }
            $stmt->bind_param("sssss", $name, $email, $phone_no, $pass, $passConfirm);
            $stmt->execute();
            echo "New record created succefully";
        }
    }
?>