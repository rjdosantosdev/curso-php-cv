<?php

$semana = $_GET["semana"];

switch ($semana) {
  case '1':
  case '2':
  case '3':
  case '4':
  case '5':
    echo "Dia de ir pra escola";
    break;
  case "6":
  case "7":
    echo "Dia de descanso";
    break;
}

?>