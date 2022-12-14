<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Estrutura de Repetição While</title>
</head>
<style type="text/css">
  h1 {
    display: inline-block;
  }
</style>
<body>
    <?php 
      // com var iniciando no inicio
      $a = 1;
      while ($a <= 10) { 
       echo "<h1>&nbsp;$a&nbsp;-</h1>";
       $a++;
      }
      ?>
     
    <p><br>======================</p>
    <?php 
       $b = 10;
      while ($b >= 1) {
        echo "<h1>&nbsp;$b&nbsp;-</h1>";
        $b--;
      }
    ?>

    <form method="get" action="./data01.php">
        <label for="contadordinamico">Contador dinamico</label><br>
        <?php 
          
          $contador = 1;
          while ($contador <= 5) {
            echo "<br>Valor $contador:<input type='number' name='v-$contador' value='0' min='0' max='50'/><br/>";
            $contador++;
         } 
        ?>
        <input type="submit" value="Verificar">
    </form>

    <!-- Modificando o laço -->
    <?php
    $c = 1; 
    # Break e continue quebra o fluxo do loop natual. Não é recomendado usar. Mas se for preciso, usa-se assim;
      while ($c <= 1000) {
        # code
        break;
        // code
        continue;  
        $c++;
      }
    
    ?>
</body>
</html>