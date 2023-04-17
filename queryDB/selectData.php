<?php
echo "<table style='border: 1px solid black'>";
echo "<tr><th>ID</th><th>Firstname</th><th>Lastname</th><th>Phone number</th><th>Email</th><th>Password</th><th>Confirm Password</th></tr>";
class TableRows extends RecursiveIteratorIterator{
    function __construct($it){
        parent::__construct($it, self::LEAVES_ONLY);
    }
    function current(){
        return "<td style='width:150px; border:1px solid black'>" . parent::current() . "</td>";
    }
    function beginChildren():void{
        echo "<tr>";
    }
    function endChildren():void{
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
    $sql = $conn->prepare("SELECT * FROM Person");
    $sql->execute();
    $result = $sql->setFetchMode(PDO::FETCH_ASSOC);
    foreach(new TableRows(new RecursiveArrayIterator($sql->fetchAll())) as $k=>$v){
        echo $v;
    }
} catch(PDOException  $e){
    echo "Error: ". $e->getMessage();
}
?>