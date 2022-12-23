<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Como manipular strings em PHP</title>
</head>
<body>
    <?php
      $prod = "leite";
      $preco = 4.5;
      // Função nativa do PHP que é uma herança do C. O F é format
      printf("<h1>O %s está custando R$ %.2f", $prod, $preco . "</h1>");
    ?>
     <h1>==========================================</h1>
     <?php 
        // A função print_r
        $x[0] = 4;
        $x[1] = 3;
        $x[2] = 8;
        print_r($x);
        echo "<br>";
        $v2 = array(3, 7, 6, 2, 1, 9);
        print_r($v2);
        
        // São funções parecidas
        //var_dump($v2)
        //var_export($v2)
      ?> 
    
</body>
</html>