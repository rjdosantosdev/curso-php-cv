<?php 

  $numero = isset($_GET['numero']) ? $_GET['numero'] : 0;
  $operacao = isset($_GET['operacao']) ? $_GET['operacao'] : 1;

  // if ($operacao === "dobro") {
  //   echo "O dobro de $numero é " . $numero * 2;
  // }
  // if ($operacao === "cubo") {
  //   echo "O dobro de $numero é " . $numero * 2;
  // } 
  // if ($operacao === "raiz") {
  //   echo "O dobro de $numero é " . number_format(sqrt($numero));
  // }

  switch ($operacao) {
    case 'dobro':
      echo "O dobro de $numero é " . $numero * 2;
      break;
    case 'cubo':
      echo "O dobro de $numero é " . $numero * $numero * $numero;
      break;
    case 'raiz':
      echo "O dobro de $numero é " . number_format(sqrt($numero));
      break;
  }


?>