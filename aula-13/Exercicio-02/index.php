<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Exebir a tabuada de um numero escolhido pelo usuario, de 1 a 10.</title>
</head>
<body>
    <form action="exe02.php">
      <select name="tab" id="">
       <?php for ($i=1; $i <=10; $i++) { 
          echo "<option value='$i'>$i</option>";
       } ?>
      </select>
      <input type="submit" value="Tabuada">
    </form>
</body>
</html>