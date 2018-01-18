<?php 
/* 11 - As Organizações Tabajara resolveram dar um aumento de salário aos seus colaboradores e lhe contraram para desenvolver o programa que calculará os reajustes.

Faça um programa que recebe o salário de um colaborador e o reajuste segundo o seguinte critério, baseado no salário atual:
salários até R$ 280,00 (incluindo) : aumento de 20%
salários entre R$ 280,00 e R$ 700,00 : aumento de 15%
salários entre R$ 700,00 e R$ 1500,00 : aumento de 10%
salários de R$ 1500,00 em diante : aumento de 5% Após o aumento ser realizado, informe na tela:
o salário antes do reajuste;
o percentual de aumento aplicado;
o valor do aumento;
o novo salário, após o aumento.
 */

if(!empty($_POST['salario']) && $_POST['salario'] > 0 && is_numeric($_POST['salario'])){
	$salario = $_POST['salario'];

	if($salario <= 280){
		$aumento = $salario * 0.20;
		$porcentagem = '20%';
		$total = $salario + $aumento;
		//echo $aumento . " de aumento";
		//echo "<=280";
	} elseif ($salario <= 700) {
		$aumento = $salario * 0.15;
		$porcentagem = '15%';
		$total = $salario + $aumento;
		//echo $aumento . " de aumento";
		//echo "<=700";
	} elseif ($salario <= 1500) {
		$aumento = $salario * 0.10;
		$porcentagem = '10%';
		$total = $salario + $aumento;
		//echo $aumento . " de aumento";
		//echo "<= 1500";
	} elseif ($salario > 1500) {
		$aumento = $salario * 0.05;
		$porcentagem = '5%';
		$total = $salario + $aumento;
		//echo $aumento . " de aumento";
		//echo ">1500";
	}
}


?>


<form method="post" action="">
	<label for="salario"> Digite seu salário: </label>
	<input type="number" name="salario" id="salario">
	<input type="submit" value="Calcular reajuste">
</form>

<textarea readonly="" cols="40" rows="5">
<?php 
if(!empty($_POST['salario'])){
	echo "Salário antes do aumento: R$: " . $salario . ',00';
	echo "&#10";
	echo "Percentual de aumento aplicado:  " . $porcentagem;
	echo "&#10";
	echo "Aumento recebido: R$: " . $aumento . ',00';
	echo "&#10";
	echo "Novo salário: R$: " . $total . ',00';

}
?></textarea>