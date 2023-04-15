<?php session_start(); ?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <style>
        .error{color: #ff0000;}
    </style>
    <title>Document</title>
</head>
<body>   
<p>You are welcome <?php echo $_SESSION["Firstname"] ." ".$_SESSION['Lastname']; ?></p>
<?php
    $destinationErr = $LGAErr = $addressErr = $sizeErr = "";
    $destination = $LGA = $address = $size = "";
    
    function test_input($data){
        $data = trim($data);
        $data = stripslashes($data);
        $data = htmlspecialchars($data);
        return $data;
    }
?>
   <form action="prepareOrder1.php" method="post">
     <select name="destination" id="" required>
            <option name="destination" value="select destination">select destination</option>
            <option name="destination" value="Lagos">Lagos</option>
            <option name="destination" value="Oyo">Oyo</option>
            <option name="destination" value="Ogun">Ogun</option>
            <option name="destination" value="Kwara">Kwara</option>
            <option name="destination" value="Ondo">Ondo</option>
            <option name="destination" value="Ekiti">Ekiti</option>
            <option name="destination" value="Kogi">Kogi</option>
            <option name="destination" value="Kano">Kano</option>
            <option name="destination" value="Kaduna">Kaduna</option>
            <option name="destination" value="Abuja">Abuja</option>
            <option value="Katsina">Katsina</option>
        </select><span class="error">*</span><br><br>
        LGA: <input type="text" name="LGA" required><span class="error">*</span><br><br>
        Address: <input type="text" name="address" required><span class="error">*</span><br><br>
        Weight(kg): <input type="text" name="size" required><span class="error">*</span><br><br>
        <input type="submit" name="submit" value="Order">
    </form>
</body>
</html>