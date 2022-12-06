<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Eleições</title>
</head>
<body>
     <!--  -->
      <?php 
      # Mostrar se um eleitor é obrigado a votar ou não
      $ano = $_GET['nasc'];     
      $age = 2022 - $ano;
      $result =  ($age>18 &&  $age <= 65) ? ('Pode votar') : ('Não pode votar');
      echo "voce tem $age Anos";
      echo "<br> $result";
      ?>
    <form method="get">
      <input style="width: 200px" type="text" name="nasc" placeholder="Digite o seu ano de nascimento...">
      <input type="submit" value="Enviar">
    </form>
</body>
</html>