<?php /* 24 - Faça um programa que calcule o mostre a média aritmética de N notas. */

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

	$soma = array_sum($andrey);

	$media = $soma / $conj;

	echo 'A media final é: ' . $media;

	}





/* for ($a=1; $a < (count($_GET) - 1) ; $a++) { 
	# code...
}*/


} else {

	echo "<h3> Número não informado, retorne a página anterior!</h3>";
}

?>