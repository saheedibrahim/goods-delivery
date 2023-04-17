<?php session_start(); ?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <a href=></a>
<?php   
    require "../DBconn/DB.php";
        function goodsID(){
            require "../DBconn/DB.php";
            $goods_id = rand(900000, 999999);
            $stmt = "SELECT * FROM Orders WHERE GoodsID = $goods_id";
            $result = $conn->query($stmt);
            if($result->num_rows > 0){
                $goods_id = rand(900000, 999999);
            }
            return $goods_id;
        }

    $stmt = $conn->prepare("INSERT INTO Orders (Destination, LGA, OrderAddress, Size, Price, TotalAmount, GoodsID, PersonID)
        VALUES(?, ?, ?, ?, ?, ?, ?, ?)");

        function test_input($data){
            $data = trim($data);
            $data = stripslashes($data);
            $data = htmlspecialchars($data);
            return $data;
        }
        function amount($price){
            GLOBAL $destination;
            if ($destination == "Lagos"){
                $amount = $price;
            } else {
                $amount = $price + 5000;
            }
            return $amount;
        }

        if($_SERVER["REQUEST_METHOD"] == "POST"){
            if(($_POST['destination']) == "select destination"){
                echo $destinationErr = "Please select your destination.";
                exit;
            } else{
                $destination = test_input($_POST['destination']);
            }
            if(empty($_POST['LGA'])){
                echo $LGAErr = "LGA of your destination cannot be empty";
                exit;
            } else{
                $LGA = test_input($_POST['LGA']);
            }
            if(empty($_POST['address'])){
                echo $adressErr = "Address of your destination cannot be empty";
                exit;
            } else{
                $address = test_input($_POST['address']);
            }
            if ((empty($_POST["size"]))){
                echo $sizeErr = "Phone number is required";
                exit;
            } else {
                $size = test_input($_POST["size"]);
                if (!preg_match("/^[0-9]*$/", $size)){
                    echo $sizeErr = "Only numbers are allowed";
                    exit;
                }
            }

            $price = (int)$size * 1000;
            $amount = amount($price);
            $goods_id = goodsID();
            $personID = $_SESSION["PersonID"];
            $stmt->bind_param("ssssssss", $destination, $LGA, $address, $size, $price, $amount, $goods_id, $personID);
            if($stmt->execute() === True){
                $_SESSION["Destination"] = $destination;
                $_SESSION["LGA"] = $LGA;
                $_SESSION["Address"] = $address;
                $_SESSION["Size"] = $size;
                $_SESSION["GoodsID"] = $goods_id;
                echo "New record created successfully<br><br>";
                // header("Location: ../OrderAvailable.php");
                

            };
        }
    $stmt->close();
    $conn->close();
?>


    <button><a href="../home.php">Home</a></button>
</body>
</html>