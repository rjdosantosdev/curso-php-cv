<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Rotinas em PHP</title>
</head>
<body>
  <?php 
    function soma($a, $b) {
      return $a + $b;
    }
    
    $x = 10;
    $y = 15;
    $r = soma($x, $y); 
    echo "<h1>A soma entre $x e $y é igual a $r</h1>";
  ?>
</body>
</html>