<?php
/*
4 - Faça um programa, com uma função que necessite de um argumento. A função retorna o valor de caractere ‘P’, se seu argumento for positivo, e ‘N’, se seu argumento for zero ou negativo.
*/


function is_positivo($n){
	if($n > 0){
		return "P";
	} elseif($n < 0){
		return "N";
	} else {
		echo "Valor informado não pode ser classificado como positivo ou negativo";
	}
}


echo is_positivo(-1);
?>