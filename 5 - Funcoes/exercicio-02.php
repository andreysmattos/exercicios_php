<?php
/*
2- Faça um programa para imprimir:
    1
    1   2
    1   2   3
    .....
    1   2   3   ...  n
para um n informado pelo usuário. Use uma função que receba um valor n inteiro imprima até a n-ésima linha.
*/

function ex2($n){
		for($i = 1; $i <= $n; $i++){
			for($c = 1; $c <= $i; $c++){
				echo $c . " ";
			}
			echo "<br/>";
		}
}

ex2(40);


?>