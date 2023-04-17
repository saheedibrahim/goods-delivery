<?php session_start(); ?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>

<?php
require("DB.php");
    // $destination = $_SESSION["Destination"];
    // $size = $_SESSION["Size"];
    // $goodsID = $_SESSION["GoodsID"];
    
    function available($response){
        GLOBAL $destination, $size, $goodsID;

    }

?>

<script>
    // for(var x=0; x<"<?php //echo $dispatchersList ?>; x++"){
    
    // document.getElementByID("going").innerHTML = question;
// }
</script>

<?php

$sql = "SELECT DipatcherID FROM Dispatcher";
    $dispatchers = array();
    $dispatchersList = count($dispatchers);
    $riderAvailable = 0;
    $result = $conn->query($sql);
    if($result->num_rows > 0){
        while($row = $result->fetch_assoc()){
            // $dispatchers[$riderAvailable] = $row["DipatcherID"];
            // echo "The Dipatcher ID is: " . $dispatchers[$riderAvailable] . "<br>";
            // function dispatcher_available(){
                $avail = "Are you available";
                $question = "Destination: " . $_SESSION["Destination"] . "\n" . "Size: " . $_SESSION["Size"] . "\n" . "Goods ID: " . $_SESSION["GoodsID"] . "\n" . $avail;
                
                $goodsID = $_SESSION["GoodsID"];
                "<script>
                if(confirm('<?php echo $question ?>') == true){
                    <?php
                    $carry = 'UPDATE Orders SET CarryStatus=1 WHERE GoodsID=$goodsID';
                    $conn->query($carry);
                    exit;
                    ?>
                } else {
                    dispatcher_available();
                }
                
                </script>";
        // }



            $riderAvailable++;
        }                
    }else {
        echo "No dispatcher available";
    }
for($x=0; $x<$dispatchersList; $x++){
    "<script>document.write(dispatcher_available())</script>";
    header("Location: ./controller/prepareDispatcher.php");
}
?>
</body>
</html>