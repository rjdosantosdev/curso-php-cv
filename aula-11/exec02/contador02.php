<?php 
$inicio = $_GET["inicio"];
$final = $_GET["final"];


if ($inicio >= $final) {
  $incremento = $final;
  while ($final >= $inicio) {
    echo "<h1>$final</h1>";
    $fina--;
  }
}



$incremento = $inicio;  
while ($inicio <= $final) {
  echo "<h1>$inicio</h1>";
  $inicio++;
}



  
?> 