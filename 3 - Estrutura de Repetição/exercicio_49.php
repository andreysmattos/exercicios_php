<?php
/*
49 - Faça um programa que mostre os n termos da Série a seguir:
  S = 1/1 + 2/3 + 3/5 + 4/7 + 5/9 + ... + n/m. 
Imprima no final a soma da série.
*/

//altere o valor de N pra definir até onde vai a seqeuncia



?>

<form method="get">
	<label> Número: </label> <br/>
	<input type="number" name="num">
	<input type="submit">
</form>




<?php
$n = filter_input(INPUT_GET,'num');


$total = 0;
//não mexer no valor de M
$m = -1;
for ($i=1; $i <= $n; $i++) { 
	$mostrar = ($i == $n) ? "" : " + ";
	$m += 2;
	echo $i ."/".$m. $mostrar;
	$total += $i/$m;
}

echo "<br/>";
echo "<br/>";
echo "<br/>";

echo "<hr>";
echo "Total: " . $total;


echo "<br/>";
echo "<br/>";
echo "<br/>";

?>