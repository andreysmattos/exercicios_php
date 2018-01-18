<?php /* 38 - Um funcionário de uma empresa recebe aumento salarial anualmente: Sabe-se que:
Esse funcionário foi contratado em 1995, com salário inicial de R$ 1.000,00;
Em 1996 recebeu aumento de 1,5% sobre seu salário inicial;
A partir de 1997 (inclusive), os aumentos salariais sempre correspondem ao dobro do percentual do ano anterior. Faça um programa que determine o salário atual desse funcionário. Após concluir isto, altere o programa permitindo que o usuário digite o salário inicial do funcionário. */ ?>



<form method="get" action="">
<label>Inform o salário:</label> <br/>
<input type="number" name="salario"><br/>
<input type="submit">
</form>

<?php
$c = 1.5;
if(!empty($_GET['salario'])){
	$salario = $_GET['salario'];
	$salarioAtual = $salario;

	for ($i=1996; $i <= 2017; $i++) {
		echo "ANO = " .$i. "<br/>";
		
		$porcentagem = ($c / 100);
		$c *= 2;
		$salarioAtual += $salario * $porcentagem;


		echo "C = " .$c. "<br/>";
		echo "porcentagem = " .$porcentagem. "<br/>";
		echo "salarioAtual = " .$salarioAtual. "<br/>";
		echo "<br/>";
		echo "<br/>";


		


		
	}

	

	echo "O salário atual é: " . $salarioAtual;
}
?>