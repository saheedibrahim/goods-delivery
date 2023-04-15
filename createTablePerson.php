<?php
$servername = "localhost:3307";
$username = "root";
$password = "";
$dbname = "goods_delivery";

try{
    $conn = new PDO("mysql:host=$servername;dbname=$dbname", $username, $password);
    $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
    $sql = "CREATE TABLE Person (
        PersonID INT(6) UNSIGNED AUTO_INCREMENT PRIMARY KEY,
        Firstname VARCHAR(30) NOT NULL,
        Lastname VARCHAR(30) NOT NULL,
        PhoneNo VARCHAR(16) NOT NULL,
        Email VARCHAR(30) NOT NULL,
        PersonPassword VARCHAR(30) NOT NULL,
        ConfirmPassword VARCHAR(30) NOT NULL
    )"; 
    $conn->exec($sql);
    echo "Table created successfully";
} catch(PDOException $e){
    echo $sql . $e->getMessage();
}
?>