<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Incremento - PHP</title>
</head>
<body>
    <?php 
      $anoAtual = 2022;
      echo "Ano atual $anoAtual";
      echo "<br />O ano anterior é ". --$anoAtual; // $anoAtual = $anoAtual - 1
      ++$anoAtual;
      echo "<br />O ano Seguinte é ". ++$anoAtual; // $anoAtual = $anoAtual - 1
    ?>
</body>
</html>