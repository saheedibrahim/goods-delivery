<?php
$servername = "localhost:3307";
$username = "root";
$password = "";
$dbname = "goods_delivery";

try{
    $conn = new PDO("mysql:host=$servername;dbname=$dbname", $username, $password);
    $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
    $sql = "DELETE FROM Person";
    // -- MODIFY COLUMN PhoneNo VARCHAR(12) NOT NULL";
    $conn->exec($sql);
    echo "Column edited successfully";
} catch(PDOException $e){
    echo "Error: " . $e->getMessage();
}
?>