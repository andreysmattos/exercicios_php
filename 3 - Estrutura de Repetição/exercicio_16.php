<?php /* 16 - A série de Fibonacci é formada pela seqüência 0,1,1,2,3,5,8,13,21,34,55,... Faça um programa que gere a série até que o valor seja maior que 500. */ ?>

<?php
	$antes = 1;
	$proximo = 1;
	$array = array();
	$array[0] = 1;
	$array[1] = 1;
	$i = 0;


	do {
		

		$array[] = $array[$i] + $array[$i+1];




		echo $array[$i] . ' ';

		$i++;


	} while ($array[$i-1] < 500)
		









?>