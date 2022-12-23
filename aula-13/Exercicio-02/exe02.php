<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Document</title>
  
  <style>
    h3 {
      margin: 0;
    }
  </style>
</head>
<body>
<?php 

    $tabuada = $_GET["tab"]; 

    for ($contador=1; $contador <= 10; $contador++) { 
      echo "<br><h3>$tabuada X $contador = " . $tabuada * $contador . "</h3>";
    }
       
?>
</body>
</html>