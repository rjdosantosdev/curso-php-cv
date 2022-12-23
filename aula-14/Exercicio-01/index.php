<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Funções em PHP</title>
</head>
<body>
  <?php 
      function soma($a, $b) {
        $s = $a + $b;
        echo "<h1>A Soma vale: $s</h1>";
      }
      soma(5, 4);
      soma(10, 4);
  ?>
</body>
</html>