<?php
require "DB.php";
$sql = "CREATE TABLE Dispatcher (
    DipatcherID INT UNSIGNED AUTO_INCREMENT PRIMARY KEY,
    Names VARCHAR(50) NOT NULL,
    Email VARCHAR(30) NOT NULL,
    PhoneNo VARCHAR(11) NOT NULL,
    Pass VARCHAR(18) NOT NULL,
    PassConfirm VARCHAR(18) NOT NULL
)";
if($conn->query($sql) === TRUE){
    echo "Table dispatcher created successfully";
} else {
    echo "Error creating table: " . $conn->error;
}
$conn->close();



// OrderID INT(6) UNSIGNED,
// Available BOOLEAN NOT NULL,
// FOREIGN KEY (OrderID) REFERENCES Order(OrderID) ON DELETE CASCADE
?>