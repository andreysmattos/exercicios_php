<?php /* 18 - Faça um programa que, dado um conjunto de N números, determine o menor valor, o maior valor e a soma dos valores. */

if(!empty($_GET['conj'])){
	$conj = $_GET['conj'];
	$andrey = array();
echo '<form method="get" action="">';
echo '<input type"number" name="conj" style="display: none" value="'.$conj .'">';

	for ($i=1; $i <= $conj ; $i++) { 
		
			
			echo '<label for="num'. $i.'"> Número '. $i.': </label><br/>';
			echo '<input id="num'. $i.'" type="number" name="num'.$i. '"><br/>';
	}

	echo '<input type="submit" value="Enviar os '.($conj).' dados">';

	echo '</form>';

	if(!empty($_GET['num' . $conj])){
		for ($a=1; $a <= $conj; $a++) { 
			$andrey[] = $_GET['num' . $a];
		}

	$maior = max($andrey);
	$menor = min($andrey);
	$soma = array_sum($andrey);

	echo 'O MAIOR É ' . $maior . '</br>';
	echo 'O MENOR É ' . $menor . '</br>';
	echo 'A SOMA É ' . $soma . '</br>';
	}





/* for ($a=1; $a < (count($_GET) - 1) ; $a++) { 
	# code...
}*/


} else {

	echo "<h3> Número não informado, retorne a página anterior!</h3>";
}

?>