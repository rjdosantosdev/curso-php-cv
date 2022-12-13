<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Condições de multiplos casos - switch</title>
</head>
<body>
  <?php  
    # ler um numero e qual operação realizar: sobro, cubo ou raiz
  ?>  

  <form action="./exec01.php" method="get">
    <input type="number" name="numero" placeholder="Operação">
    <select name="operacao" id="operacao">
        <option value="dobro">Dobro</option>
        <option value="cubo">Cubo</option>
        <option value="raiz">Raiz Quadrada</option>
    </select>
    <input type="submit" value="Enviar">
  </form>
</body>
</html>