<?php 

$tab = $_GET["tab"];

$c = 1;
do {
  echo "<br><h2>$tab X $c = " . $tab * $c . "</h2>" ;
  $c++;
} while ($c <= 10);