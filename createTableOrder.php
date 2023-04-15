<?php
$servername = "localhost:3307";
$username = "root";
$password = "";
$dbname = "goods_delivery";

try{
    $conn = new PDO("mysql:host=$servername;dbname=$dbname", $username, $password);
    $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
    $sql = "CREATE TABLE Orders (
        OrderID INT(6) UNSIGNED AUTO_INCREMENT PRIMARY KEY, 
        Destination VARCHAR(30) NOT NULL,
        LGA VARCHAR(30) NOT NULL,
        OrderAddress VARCHAR(30) NOT NULL,
        Size DECIMAL(6, 2) NOT NULL,
        Price  DECIMAL(8, 2),
        TotalAmount DECIMAL(8, 2),
        GoodsID VARCHAR(30) UNIQUE,
        RegDate TIMESTAMP DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
        CarryStatus BOOLEAN NOT NULL,
        DeliveryStatus BOOLEAN NOT NULL,
        PersonID INT UNSIGNED,
        FOREIGN KEY (PersonID) REFERENCES Person(PersonID)       
    )"; 
    $conn->exec($sql);
    echo "Table created successfully";
} catch(PDOException $e){
    echo $sql . $e->getMessage();
}
?>