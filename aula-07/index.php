<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Operadores Relacionais</title>
</head>
<body>
  <?php 
  #  Maior = $a > $b
  #  Menor = $a < $b
  #  Maior ou igual = $a >= $b
  #  Menor ou igual = $a <= $b
  #  Diferente $a <> $b  $a != $b
  # igual $a == $b 
  # identico $a === $b  // igual e do mesmo tipo, como no javaScript

  # Operador ternário
    # expressão ? verdadeiro : falso
    # $a = 10;
    # $b = 5;
    # $a > $b ? "Verdadeiro" : "Falso";
  ?>

  <?php 
    $n1 = $_GET['a'];
    $n2 = $_GET['b'];
    $tipo = $_GET['op'];
    
    echo "Os valores passado são $n1 e $n2 <br />";
    $tipo == "s" ? $soma = $n1 + $n2 : "";
    $tipo == "m" ? $soma = $n1 - $n2 : "";
    $tipo == "v" ? $soma = $n1 * $n2 : "";
    echo "O resultado é $soma <br />";

  ?>
</body>
</html>