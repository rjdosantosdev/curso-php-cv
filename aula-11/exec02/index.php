<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Contador moderno</title>
  
  <style>
    body {
      font-family: 'Franklin Gothic Medium', 'Arial Narrow', Arial, sans-serif;
    }
    div {
      margin-bottom: 8px;
    }
    label {
      min-width: 40px;
      display: inline-block;
    }
    input[type="number"] {
      padding: 6px 12px;
    } 
    input[type="submit"] {
      background-color: rgba(0, 0, 0, 0.8);
      color: #FFF;
      display: flex;
      align-items: center;
      justify-content: center;
      width: 115px;
      height: 35px;
      font-size: 1.3rem;
      text-transform: uppercase;
      cursor: pointer;
    }
  </style>
</head>
<body>
  <form action="./contador02.php" method="get">
      <div>
        <label for="inicio">inicio</label>:
        <input type="number" max="100" min="0" id="inicio" name="inicio">
      </div>
      <div>
        <label for="final">Final</label>:
        <input type="number" max="100" min="0" id="final" name="final"> 
      </div>
      <!-- <div>
        <label for="">Incremento</label>
          <select name="incremento" id="">
            <option value="1" selected>1</option>
            <option value="2">2</option>
            <option value="3">3</option>
            <option value="4">4</option>
            <option value="5">5</option>
            <option value="6">6</option>
          </select>
      </div> -->
      <input type="submit" value="Contar">
  </form>
</body>
</html>