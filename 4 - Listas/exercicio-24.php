<?php
/*
24 - Faça um programa que simule um lançamento de dados. Lance o dado 100 vezes e armazene os resultados em um vetor . Depois, mostre quantas vezes cada valor foi conseguido. Dica: use um vetor de contadores(1-6) e uma função para gerar numeros aleatórios, simulando os lançamentos dos dados.
*/

$a = [];
for($i = 1; $i <= 100; $i++){
	$a [] = rand(1,6);
}
//print_r($a);
$c[1] = 0;
$c[2] = 0;
$c[3] = 0;
$c[4] = 0;
$c[5] = 0;
$c[6] = 0;

foreach($a as $value){
	for($i = 1; $i <= 6; $i++){
		if($value == $i){
			$c[$i] +=1;
		}
	}
}


echo "<pre>";
print_r($c);
echo "</pre>";


?>