<?php 

$fatorial = $_GET["fatorial"]; // 5
$c = $fatorial;

$fat = -1;

do {
  $fat = $fat * $c;
  $c--;
} while ($c >= 1);
echo "Fatorial de $fatorial! " . -$fat;
?>