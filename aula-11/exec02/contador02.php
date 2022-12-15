<?php 
$inicio = $_GET["inicio"];
$final = $_GET["final"];
$incremento = $_GET["incremento"];
$decremento = $_GET["decremento"];

 
while ($inicio <= $final) {
  echo "<h1>$inicio</h1>";
  $inicio = $inicio + $incremento;
}

if ($inicio > $final) {
  while ($inicio >= $final) {
    echo "<h1>$inicio</h1>";
    $inicio = $inicio - $decremento;
  }
}
  
?> 