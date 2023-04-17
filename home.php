<?php session_start() ?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body><?php
// include("DB.php");
$ID = $_SESSION["PersonID"];
// $sql = "SELECT * FROM Person WHERE PersonID = $ID";
// $result = $conn->query($sql);
// $row = $result->fetch_assoc();
?>
    <p>You are welcome <?php echo $_SESSION['Firstname']. " " .$_SESSION['Lastname']; ?></p>
    <p>Your ID: <?php echo $_SESSION["PersonID"] ?></p>
    <p>Order <a href="./includes/signupOrder.php">here!</a> for your dispatcher.</p>
    
    <!-- <script>
        alert("<//?php echo $_SESSION["Firstname"] ?>");
    </script> -->
</body>
</html>