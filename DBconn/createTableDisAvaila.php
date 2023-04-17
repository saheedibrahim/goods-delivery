<?php
// require ("DB.php");
$servername = "localhost:3307";
$username = "root";
$password = "";
$dbname = "goods_delivery";

$conn = new mysqli($servername, $username, $password, $dbname);
if($conn->connect_error){
    die("Connection failed: ". $conn->connect_error);
}
$sql = "CREATE TABLE Available (
    AvailableID INT UNSIGNED AUTO_INCREMENT PRIMARY KEY,
    DispatcherID INT UNSIGNED,
    OrderID INT(6) UNSIGNED,
    Availabilitys BOOLEAN NOT NULL,
    FOREIGN KEY (DispatcherID) REFERENCES Dispatcher(DipatcherID) ON DELETE CASCADE,
    FOREIGN KEY (OrderID) REFERENCES Orders(OrderID) ON DELETE CASCADE
)";
if ($conn->query($sql) === TRUE) {
    echo "Table dispatcher created successfully";
} else {
    echo "Error creating table: " . $conn->error;
}


$conn->close();
?>