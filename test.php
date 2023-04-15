<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <!-- <p id="testup"></p>
    
<form action="" method="post" onsubmit="return testing()">
<input type="button" onclick="testing()" value="see">
</form>
    <button onclick="dispatcher_available()">try it<?php // header("Location: test1.php"); ?></button>
<script>
    function dispatcher_available(){
    let destination = "Lagos";
    let size = 50;
    let goodsID = "ACD453";
    let question = "Destination: " + destination + "\n" + "Size: " + size + "\n" + "Goods ID: " + goodsID;
    if(confirm(question) == true){
        question = "You acknowledge";
    } else {
        question = "You disapprove";
    }
    // document.getElementById("going").innerHTML = question;
    window.location = "test1.php"
    
}

let x = "Would you be available"+y;

    function testing(){
        let y = 50, x1
        let x = "Would you be available"+y;
        if(confirm(x) == true){
            x1 = "YOu press ok";
            x = x1 + "<?php// echo $a = " testing what?"; ?>"
        }else{
            x = "you click cancel";
        }
    document.getElementById("testup").innerHTML = x;
    }
</script>

<p id="going"></p> -->

<?php
    echo "Hello" . 50;
    echo "50" . "Hello";
    $testing = array("Saheed", "Qudus", "Yushau");
    $x = count($testing);
    echo $x;
    $test = array('Saheed'=>'leader', 'student'=>'pupil');
    // for($a=0; $a<$x; $a++){

    // }

?>
<script type="text/javascript">
    var my_var = <?php echo json_encode($my_var); ?>;
</script>

<!-- <p id="testin">test</p> -->
<script>
   var res = "success";
</script>

you can add javascript to your code by using the echo statement and rap all 
your javascript between "" and if there is "" in the javascript code
then add \ before any "", and for the php inside rap it with ''
  
  
<?php
  echo "<script>document.write(\"hello world\")</script>"
?>
  
//other example

<?php
  $a = 5;
  echo "<script>document.write('$a')</script>"
?>

//other example
  
<?php 
$TokenData = Auth::user();

echo "<script type=\"text/javascript\">
             localStorage.setItem(\"id\", '$TokenData->id');
             localStorage.setItem(\"name\", '$TokenData->name');
             localStorage.setItem(\"email\", '$TokenData->email');
      </script> ";

   echo "<script>document.writeln(res);</script>";
?>

<script>
    var abc= 'this is text';
<?php $abc = "<script>document.write(abc)</script>"?>
var listArray = "<?php echo $x; ?>"
// document.getElementById("testin").innerHTML = listArray;
document.getElementById("tes").innerHTML = listArray;
</script>
<?php echo $abc . "<br>". $x;?>
<p id="tes"></p>
</body>
</html>