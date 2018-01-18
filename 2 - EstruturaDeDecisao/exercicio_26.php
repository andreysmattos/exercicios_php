<?php /* 26 - Um posto está vendendo combustíveis com a seguinte tabela de descontos:
Álcool:
até 20 litros, desconto de 3% por litro
acima de 20 litros, desconto de 5% por litro
Gasolina:
até 20 litros, desconto de 4% por litro
acima de 20 litros, desconto de 6% por litro Escreva um algoritmo que leia o número de litros vendidos, o tipo de combustível (codificado da seguinte forma: A-álcool, G-gasolina), calcule e imprima o valor a ser pago pelo cliente sabendo-se que o preço do litro da gasolina é R$ 2,50 o preço do litro do álcool é R$ 1,90. */ ?>



<form method="post" action="">
	<label for="litros"> Litros: </label> <br/>
	<input type="number" name="litros" id="litros"> <br/><br/>
	<label for="tipo"> Combustível: </label> <br/>
	<select name="tipo" id="tipo">
		<option value="A"> Álcool</option>
		<option value="G"> Gasolina</option>
	</select> <br/><br/>
	<input type="submit">
</form>


<?php 
if(!empty($_POST['litros'])){
	$litros = $_POST['litros'];
	switch ($_POST['tipo']) {
		case 'A':
			$tipo = 'Álcool';
			$valor = $litros * 1.90;
			if($litros <= 20){
				$valor = $valor - ($valor * 0.03);
			} else {
				$valor = $valor - ($valor * 0.05);
			}
			break;

		case 'G':
			$tipo = 'Gasolina';
			$valor = $litros * 2.50;
			if($litros <= 20){
				$valor = $valor - ($valor * 0.04);
			} else {
				$valor = $valor - ($valor * 0.06);
			}
			break;
	}
	echo "<br/>";
	echo "Você comprou " . $litros . " litros de " . $tipo . ", total a pagar: R$: " . $valor;
}


?>