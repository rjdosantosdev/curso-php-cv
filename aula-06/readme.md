# Operadores de Atribuição

$a += $b
$a -= $b
$a *= $b
$a /= $b
$a %= $b
$a .= $b

## exe 01 - Aplicar 10% de desconto ao preço de um produto.

# number_format() Formatador
number_format($preco, 2)
### valor da moeda mais numero de casas decimais.

# Operadores de incremento

Pré-incremento  $a = $a + 1 || ++$a
Pós-incremento  $a = $a + 1 || $a++
Pré-decremento  $a = $a - 1 || --$a
Pós-decremento  $a = $a - 1 || $a--

## exe 02 - Mostrar o ano anterior referente ao ano atual.


## ###########################################

## Variáveis referenciadas 

$a = 3;                         $a = 3;
$b = $a;                        $b = &$a;
$b += 5;                        $b =+ 5;
echo $b;                        echo $a;
echo $b;                        echo $b;


## exe 03 - Praticar o uso das Variáveis referenciadas.