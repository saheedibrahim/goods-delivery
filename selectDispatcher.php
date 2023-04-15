<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <style>
        th, td{border:1px solid black;}
    </style>
</head>
<body>
    
<?php
require "DB.php";
$stmt = "SELECT * FROM Dispatcher";
$result = $conn->query($stmt);
if($row = $result->num_rows > 0){
    echo "<table style=''><tr><th>Names</th><th>Email</th><th>Phone number</th><th>Password</th><th>Confirm Password</th></tr>";
    while($row = $result->fetch_assoc()){
        echo  "<tr><td>" . $row["Names"] . "</td><td>". $row["Email"] . "</td><td>". $row["PhoneNo"] . "</td><td>". $row["Pass"] . "</td><td>". $row["PassConfirm"] . "</td></tr>";
    }
    echo "</table>";
} else {
    echo "0 result found";
}
?>
</body>
</html>