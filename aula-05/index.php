<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Operadores Aritméticos</title>

  <style>
    .container {
      display: flex;
      justify-content: space-around;
    }
    body {
      font-size: 1.5rem;
      margin: 100px 0;
    }
    pre {
      margin: 0;
      padding: 0;
      width: max-content;
    }
    div {
      margin-left: 20px;
    }
  </style>
</head>
<body>
  <div class="container">
    <div class="leftContainer">
      <h3>Operadores Aritméticos </h3>  
      <pre>
      # Adição 
      # Subtração 
      # Muiltiplicação 
      # Divisão 
      # Módulo
      </pre>
      Código:
      <br /><code>$n1 = 2;</code>
      <br /><code>$n2 = 2;</code>
      <br />
        <?php 
          $n1 = 2;
          $n2 = 2;
          echo "A soma vale " . ( $n1 + $n2); 
          echo "<br />A Subtração vale " . ( $n1 - $n2);
          echo "<br />A Muiltiplicação vale " . ( $n1 * $n2);
          echo "<br />A Divisão vale " . ( $n1 / $n2);
          echo "<br />O Módulo vale " . ( $n1 % $n2);
        ?>
   </div>
   <div class="rightContainer">
    <h3>Funções Matemáticas</h3>
      <pre>
      # Abs()           Valor Absoluto 
      # pow()           Potenciação 
      # sqrt()          Raiz Quadrada 
      # roud()          Arredondamento 
      # intval()        Valor inteiro da variável
      # number_format() Formatador
      </pre>
    </div>
  </div>
</body>
</html>