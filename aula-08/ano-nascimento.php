<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>exercicio 02</title>
</head>
<body>
  <?php 
  /* 
    Ler nome,ano de nascimento e sexo de uma pessoa, mostrando sua idade.
  */
  ?>
  <form action="./02valor.php" method="get">
    <label for="nome">Nome:</label>
    <input type="text" name="nome">
    <label for="ano">Ano Nascimento:</label>
    <input type="number" name="ano">
    <fieldset>
         <legend>Sexo</legend>
         <input type="radio" checked name="sexo" id="nasc" value="homem"> 
         <label for="masc">Masculino:</label>
         <input type="radio" name="sexo" id="fem" value="mulher"> 
         <label for="fem">Feminino:</label>
    </fieldset>
    <input type="submit" value="Enviar">
  </form>
</body>
</html>