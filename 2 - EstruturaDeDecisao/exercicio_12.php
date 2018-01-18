<?php /* 12 - Faça um programa para o cálculo de uma folha de pagamento, sabendo que os descontos são do Imposto de Renda, que depende do salário bruto (conforme tabela abaixo) e 3% para o Sindicato e que o FGTS corresponde a 11% do Salário Bruto, mas não é descontado (é a empresa que deposita). O Salário Líquido corresponde ao Salário Bruto menos os descontos. O programa deverá pedir ao usuário o valor da sua hora e a quantidade de horas trabalhadas no mês.
Desconto do IR:
Salário Bruto até 900 (inclusive) - isento
Salário Bruto até 1500 (inclusive) - desconto de 5%
Salário Bruto até 2500 (inclusive) - desconto de 10%
Salário Bruto acima de 2500 - desconto de 20% Imprima na tela as informações, dispostas conforme o exemplo abaixo. No exemplo o valor da hora é 5 e a quantidade de hora é 220.
        Salário Bruto: (5 * 220)        : R$ 1100,00
        (-) IR (5%)                     : R$   55,00  
        (-) INSS ( 10%)                 : R$  110,00
        FGTS (11%)                      : R$  121,00
        Total de descontos              : R$  165,00
        Salário Liquido                 : R$  935,00 */ 

if(!empty($_POST['quantidade']) && !empty($_POST['valor']) && $_POST['quantidade'] > 0 && $_POST['valor'] > 0){
	$quantidade = $_POST['quantidade'];
	$valor = $_POST['valor'];

	$salarioBruto = $quantidade * $valor;
	$inss = $salarioBruto * 0.1;
	$fgts = $salarioBruto * 0.11;

	if($salarioBruto <= 900){
		$ir = 0;
		$porcentagem = '0%';
		//echo "isento";

		} elseif($salarioBruto > 900 && $salarioBruto <= 1500){
			$ir = $salarioBruto * 0.05;
			$porcentagem = '5%';
			//echo "5%";
		} elseif ($salarioBruto > 1500 && $salarioBruto <= 2500) {
			$ir = $salarioBruto * 0.1;
			$porcentagem = '10%';
			//echo "10%";
		} elseif ($salarioBruto > 2500){
			$ir = $salarioBruto * 0.2;
			$porcentagem = '20%';
			//echo '<br>AKII > >>> ' . $ir;
			//echo "20%";
		}

		$salarioLiquido = $salarioBruto - $inss - $ir;

}



?>

<div style="float:left;">
<form method="post" action="">
<label>Horas trabalhadas: </label> <br/>
<input type="number" name="quantidade"><br/>
<label>Valor por hora: </label> <br/>
<input type="number" name="valor">
<br/>
<input type="submit">
</form>
</div>
<div>
<textarea disabled="" cols="60" rows="7"> <?php 
if(!empty($salarioLiquido)){
	echo "Salário Bruto: ($valor * $quantidade)        : R$ $salarioBruto,00 &#10";
	echo "(-) IR ($porcentagem)                     : R$   $ir,00 &#10";
	echo "(-) INSS ( 10%)                 : R$  $inss,00 &#10";
	echo "FGTS (11%)                      : R$  $fgts,00 &#10";
	echo "Total de descontos              : R$  " . ($inss + $ir) . ",00 &#10";
	echo "Salário Liquido                 : R$  $salarioLiquido,00";
	}?>
         </textarea>
</div>

