<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Numero primo</title>
</head>
<body>
  <?php
    # Usando uma função interna para criar os arrays e pegar o tamanho dele.
    function soma() {
      $p = func_get_args();
      $tot = func_num_args();
      

      
      $s = 0;
      for ($i=0; $i < $tot; $i++) { 
        $s = $s + $p[$i];
      }    
      return $s;
    }
    
    $r = soma(3, 6, 7, 5);
    echo "A soma dos valores é $r";
  ?>
</body>
</html>