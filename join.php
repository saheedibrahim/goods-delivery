<?php
require "DB.php";
$stmt = "SELECT Person.firstname AS Firstname, Person.Email AS Email, Orders.destination AS Destination, 
Orders.GoodsID AS GoodsID, Orders.PersonID AS PersonID
    FROM Orders 
    INNER JOIN Person ON Orders.PersonID = Person.PersonID";
$result = $conn->query($stmt);
if($row = $result->num_rows > 0){
    echo "<table style='border:1px solid black;'><tr><th>Firstname</th><th>Email</th><th>Destination</th><th>Goods ID</th><th>PersonID</th></tr>";
    while($row = $result->fetch_assoc()){
    echo "<tr><td>". $row["Firstname"]."</td><td>". $row["Email"]."</td><td>". $row["Destination"]."</td><td>". $row["GoodsID"]."</td><td>". $row["PersonID"];
} 
echo "</table>";
} else {
    echo "0 results";
}
$conn->close();
?>