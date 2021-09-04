<?php
  require __DIR__ . '/vendor/autoload.php';
  require_once'library/functions.php';
  session_start();

  //generate an array with min and max
  $result = "";
  if(isset($_POST['submit'])){
    echo $_POST['min'];
    echo $_POST['max'];
    $_SESSION['result'] = random($_POST['min'], $_POST['max']); 
    var_dump($_SESSION['result']);
    $result = $_SESSION['result'];
  }

  //pop out a value once the button is clicked
  if(isset($_POST['result'])&&($result!==null)){
  array_shift($_SESSION['result']);
  $result = $_SESSION['result']; 
  var_dump($result);
  } elseif (isset($_POST['result'])&&(count($result)==0)) { 
    $result = "No more numbers available.";
  }

?>
<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Document</title>
  <style>
  #ranNum {border-style: dotted;}
  </style>
</head>
<body>
  <form method="post">
    <input type="number" name="min" id="min"></input>
    <input type="number" name="max" id="max"></input>
    <input type="submit" name="submit" value="generate"></input>
  </form>
 
  <div id="ranNum">random number here</div>
  <div id="seeRanNum">more</div>

  <form method="post">
    <input type="text" name="showResult" id="showResult"><?php 
      if($result==!null){echo $result[0];} elseif (isset($_POST['result'])&&(count($result)==0)){ $result = "No more numbers available.";} ?></input>
    <input type="submit" name="result" value="result" onclick="generateRandomNumber();"></input>
    <input type="submit" name="test" value="test" onclick="doThat();"></input>
  </form>
  <script src="script/connect.js"></script>
</body>
</html>