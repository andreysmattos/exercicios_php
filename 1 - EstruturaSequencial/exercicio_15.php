<?php /* 15 - Faça um Programa que pergunte quanto você ganha por hora e o número de horas trabalhadas no mês. Calcule e mostre o total do seu salário no referido mês, sabendo-se que são descontados 11% para o Imposto de Renda, 8% para o INSS e 5% para o sindicato, faça um programa que nos dê:
salário bruto.
quanto pagou ao INSS.
quanto pagou ao sindicato.
o salário líquido.
calcule os descontos e o salário líquido, conforme a tabela abaixo:
+ Salário Bruto : R$
- IR (11%) : R$
- INSS (8%) : R$
- Sindicato ( 5%) : R$
= Salário Liquido : R$
Obs.: Salário Bruto - Descontos = Salário Líquido. */ ?>


<form method="post" action="">
<label for=""> Valor Hora: </label> <br> <input type="number" name="hora"><br>
<label for=""> Horas Trabalhadas: </label> <br><input type="number" name="quantidade"><br><br>
<input type="submit" value="Calcular">
<br><br>

</form>

<?php 

if(!empty($_POST['hora']) && !empty($_POST['quantidade'])){

	$salarioBruto = $_POST['hora'] * $_POST['quantidade'];
	$inss = $salarioBruto * 0.08;
	$ir = $salarioBruto * 0.11;
	$sindicato = $salarioBruto * 0.05;
	$salarioLiquido = $salarioBruto - $inss - $sindicato - $ir;
}


?>


<textarea style="width: 225px; height: 95px;" readonly="">
+ Salário Bruto : R$ <?php echo (empty($salarioBruto) ? '0' : $salarioBruto);?>

- IR (11%) : R$ <?php echo (empty($ir) ? '0' : $ir);?>

- INSS (8%) : R$ <?php echo (empty($inss) ? '0' : $inss);?>

- Sindicato ( 5%) : R$ <?php echo (empty($sindicato) ? '0' : $sindicato);?>

= Salário Liquido : R$ <?php echo (empty($salarioLiquido) ? '0' : $salarioLiquido);?>

</textarea>