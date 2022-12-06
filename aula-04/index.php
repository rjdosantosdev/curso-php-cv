<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Olá mundo - PHP</title>
</head>
<body>
  <h1>Variáveis em PHP</h1>
<pre>
## Inteiro 
## Real 
## caractere 
## Lógico

No php, pode deixar os tipos de forma automatica (coerção) ou forcar o uso dos tipo, chamado também de 'typecast', herdado da linguagem C
### exemplo: 

## inteiro (int), (integer)   
## Real (real), (float), (double)   
## caractere (string)
## Lógico (???) - <code>true 1, false vazio</code>
</pre>
  <?php 
    $n = 28;
    // se mudar pra int, retorna 0
    $no = (string) "Romário";
    echo "$no tem $n anos!";
  ?>
</body>
</html>