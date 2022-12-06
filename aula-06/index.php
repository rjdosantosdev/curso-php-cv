<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Operadores de Atribuição</title>
</head>
<body>
    <?php 
    
      // Comentário inline em PHP 
      # esse é um comentário
      /* 
      esse é um comentário
      */
      $preco = $_GET['p'];
      echo "O preço do produto e R$ " . number_format($preco, 2);
      $preco += ($preco*10/100);
    ?>
    <form method="get">
      <input type="text" name="p">
      <input type="submit" value="Enviar">
    </form>
    <?= "<br />O novo preço do produto é R$ " . number_format($preco, 2); ?>
</body>
</html>