<?php
/*
1- Faça um programa para imprimir:
    1
    2   2
    3   3   3
    .....
    n   n   n   n   n   n  ... n
para um n informado pelo usuário. Use uma função que receba um valor n inteiro e imprima até a n-ésima linha.

*/


function imprimir_numero($n){
	for($i = 1; $i <= $n; $i++){
		for($c = 1; $c <= $i; $c++){
			echo $i . " ";
		}
		echo "<br>";
	}
}

imprimir_numero(30);

?>