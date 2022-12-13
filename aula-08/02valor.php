<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Sexo</title>
</head>
<body>
<?php 
                 # isset = verifica se foi passado algum   
  $nome          = isset($_GET["nome"]) ? $_GET["nome"] : "[não informado]";
  $anoNascimento = isset($_GET["ano"]) ? $_GET["ano"] : 0;
  $sexo          = isset($_GET["sexo"]) ? $_GET["sexo"] : "[não informado]";
  $idade         = date("Y") - $anoNascimento;

  echo "$nome é $sexo e tem $idade anos";

  ?>
</body>
</html>