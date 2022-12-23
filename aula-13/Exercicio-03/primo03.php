<?php

$num = $_GET["primo"];

echo "<h1>Analisando o numero $num...</h1>";


for ($i=1; $i<=$num; $i++) {
  $r = $num % $i;
  
  if ($r == 0) { //caso sobre 0 entre a divisão do contador do laço pelo numero acrescento mais 1 no acumulador
    $a++;
    echo "$i ";
  }
}
  if ($a > 2) { //caso o resto das divisões somadas sejam maior que 2 significa que o número não é primo
    echo"<br>Total de múltiplos: $a<br>";
    echo"Resultado: $num NÃO É PRIMO!";
  }else{ //Se não o número é primo
    echo"<br>Total de múltiplos: $a<br>";
    echo"Resultado: $num É PRIMO!";
  }