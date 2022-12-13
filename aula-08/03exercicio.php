<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Document</title>
  <style>
    body {
      height: 100vh; 
      display: grid;
      place-items: center;
      align-items: center;
    }
  </style>
</head>
<body>
  <div class="container">
    <form action="./03cores.php" method="get">
      <label for="itxt">Texto: </label>
      <input type="text" name="t" id="itxt">
      <label for="itxt">Tamanho: </label>
      <select name="tam" id="itam">
        <option value="24px">24</option>
        <option value="32px">32</option>
        <option value="38px">38</option>
        <option value="46px">46</option>
        <option value="80px">80</option>
      </select>
      <label for="cor">Cor: </label>
      <input type="color" name="cor" id="icor">
      <input type="submit" value="Gerar">
    </form>
  </div>
</body>
</html>