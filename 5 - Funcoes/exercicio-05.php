<?php
/*
5 - Faça um programa com uma função chamada somaImposto. A função possui dois parâmetros formais: taxaImposto, que é a quantia de imposto sobre vendas expressa em porcentagem e custo, que é o custo de um item antes do imposto. A função “altera” o valor de custo para incluir o imposto sobre vendas.
*/

function somaImposto($taxaImposto, $custo){
	$taxaImposto = $taxaImposto / 100;
	return ($custo * $taxaImposto) + $custo;
}

echo somaImposto(50, 800);
?>