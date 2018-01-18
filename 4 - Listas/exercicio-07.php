<?php
/*
7 - Faça um Programa que leia um vetor de 5 números inteiros, mostre a soma, a multiplicação e os números.
*/

?>

<form method="get">
	<input type="num" name="num[]" size="3"><br/>
	<input type="num" name="num[]" size="3"><br/>
	<input type="num" name="num[]" size="3"><br/>
	<input type="num" name="num[]" size="3"><br/>
	<input type="num" name="num[]" size="3"><br/>
	<input type="submit" value="Calcular">
</form>

<?php
function soma($array){
	$soma = 0;
	foreach($array as $value){
		$soma += $value;
	}
	return $soma;
}

function mult($array){
	$mult = 1;
	foreach($array as $value){
		$mult *= $value;
	}
	return $mult;
}

if(isset($_GET['num']) && !in_array('',$_GET['num'])){ //Verifca se tem valor em branco em alguma parte do array;
	echo '<hr>';
	echo "Soma : ". soma($_GET['num']);
	echo '<hr>';
	echo "Multiplicação: " . mult($_GET['num']);
	echo '<hr> Valores: ';
	foreach($_GET['num'] as $valor){
		echo $valor . " "; 
	}
	echo '<hr>';
}

?>