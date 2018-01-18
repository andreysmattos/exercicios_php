<?php /* 41 - Faça um programa que receba o valor de uma dívida e mostre uma tabela com os seguintes dados: 
valor da dívida, valor dos juros, quantidade de parcelas e valor da parcela.
Os juros e a quantidade de parcelas seguem a tabela abaixo:
Quantidade de Parcelas  % de Juros sobre o valor inicial da dívida
1       0
3       10
6       15
9       20
12      25
Exemplo de saída do programa:
Valor da Dívida           		Valor dos Juros 			Quantidade de Parcelas  		Valor da Parcela
R$ 1.000,00               		0               			1                       		R$  1.000,00
R$ 1.100,00               		100             			3                       		R$    366,00
R$ 1.150,00               		150             			6                       		R$    191,67 */?>

<form method="get" action="">
	<label> Digite o valor da dívida: </label> <br/>
	<input type="number" name="num"><br/>
	<input type="submit">
</form>

<h5>Valor da Dívida  --- Valor dos Juros --- Quantidade de Parcelas --- Valor da Parcela</h5>

<?php

if(!empty($_GET['num'])){
	$num = $_GET['num'];
	$juros = 5;
	echo "R$ " . $num . " --------------------- " .  0 . " --------------------- " . 0 . " --------------------- " . "R$: " . $num . "<br/>";

	for ($i=3; $i <= 12; $i += 3) { 
		$juros += 5;
		$valor = ($num + ($num * ($juros / 100)));
		
	
		echo "R$ " . $valor . " -------------------- " .  $num * ($juros / 100) . " -------------------- " . $i . " -------------------- " . "R$: " . number_format($valor/3,2) . "<br/>";
	}

}

?>
