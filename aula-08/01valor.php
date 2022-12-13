<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Raiz quadrada</title>
</head>
<body>
<?php 
  $valor = $_GET["v"];

  $rq = sqrt($valor);

  echo "<h1>A Raiz de $valor é " . number_format($rq) . "</h1>";

  ?>
</body>
</html>