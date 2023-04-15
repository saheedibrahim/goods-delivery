<?php
echo "<table style='border: 1px solid black'>";
echo "<tr><th>ID</th><th>Destination</th><th>LGA</th><th>Address</th><th>Size</th><th>Price</th><th>TotalAmount</th><th>GoodsID</th><th>Date</th><th>Carry Status</th><th>Delivery Status</th><th>Customer ID</th></tr>";
class TableRows extends RecursiveIteratorIterator{
    function __construct($it){
        parent::__construct($it, self::LEAVES_ONLY);
    }
    function current(){
        return "<td style='width:150px; border:1px solid black'>" . parent::current() . "</td>";
    }
    function beginChildren(){
        echo "<tr>";
    }
    function endChildren(){
        echo "</tr>" . "\n";
    }
}

$servername = "localhost:3307";
$username = "root";
$password = "";
$dbname = "goods_delivery";
try{
    $conn = new PDO("mysql:host=$servername;dbname=$dbname", $username, $password);
    $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
    $sql = $conn->prepare("SELECT * FROM Orders");
    $sql->execute();
    $result = $sql->setFetchMode(PDO::FETCH_ASSOC);
    foreach(new TableRows(new RecursiveArrayIterator($sql->fetchAll())) as $k=>$v){
        echo $v;
    }
} catch(PDOException  $e){
    echo "Error: ". $e->getMessage();
}
?>