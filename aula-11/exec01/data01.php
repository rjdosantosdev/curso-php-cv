<?php 
	# variavel variavel é tornar o valor de uma variavel o nome de outra variavel dinamicamente
	$i = 1;
	while ($i <= 5) {
		$v = "num" . $i;
		$url = "v-" . $i;
		$$v = isset($_GET[$url]) ? $_GET[$url] : 0;
		$i++; 
	}
	print_r($$v);

	// echo "$num1 $num2 $num3 $num4 $num5";

	// $counter = 1;
	// while ($counter <= 5) {
	// 	$v = "num" . $i;
	// 	echo "Valor $i : " . $$v . "<br/>";
	// 	$i++;
	// $counter++;
	// }

	# 5 é maior que 1?
?>