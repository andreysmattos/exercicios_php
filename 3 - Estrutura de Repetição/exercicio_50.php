<?php

/*
50 - Sendo H= 1 + 1/2 + 1/3 + 1/4 + ... + 1/N, Faça um programa que calcule o valor de H com N termos.
*/
$num = 1;


?>



<form method="get">
	<label> Número: </label> <br/>
	<input type="number" name="n"><br/>
	<input type="submit">
</form>

<?php
$n = filter_input(INPUT_GET, 'n');
$total = 0;

for($i = 2; $i <= $n; $i++){

	$mais = ($i == $n) ? '' : " + ";

	echo $num . "/" . $i . $mais;
	$total += $num / $i;
}

echo "<hr> Total: " . $total;

?>