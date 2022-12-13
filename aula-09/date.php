<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Document</title>
</head>
<body>
  <?php 
    $anoNascimento = $_GET["data"];
    $tot = date("Y") - $anoNascimento;
    if ($tot > 18 && $tot <= 65) {
      echo "Voce tem $tot anos. Pode dirigir e pode votar";
    } 
    else {
      if ($tot >= 16 || $tot < 18) {
        echo "Voce tem $tot anos. Seu voto é opcional";
      } 
      else {
        echo "Voce tem $tot anos. Não pode votar";
      }
    }
  ?>
</body>
</html>