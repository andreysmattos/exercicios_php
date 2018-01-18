<?php /* 15 - Faça um Programa que peça os 3 lados de um triângulo. O programa deverá informar se os valores podem ser um triângulo. Indique, caso os lados formem um triângulo, se o mesmo é: equilátero, isósceles ou escaleno.
Dicas:
Três lados formam um triângulo quando a soma de quaisquer dois lados for maior que o terceiro;
Triângulo Equilátero: três lados iguais;
Triângulo Isósceles: quaisquer dois lados iguais;
Triângulo Escaleno: três lados diferentes; */

if(!empty($_GET['num1']) && !empty($_GET['num2']) && !empty($_GET['num3'])){
	$num1 = $_GET['num1'];
	$num2 = $_GET['num2'];
	$num3 = $_GET['num3'];

	if( ($num1 + $num2) > $num3 && ($num1 + $num3) > $num2 && ($num2 + $num3) > $num1){

		echo "É triangulo";

		if($num1 == $num2 && $num1 == $num3){
			$triangulo = 'Equilátero';
		} elseif($num1 == $num2 || $num1 == $num3 || $num2 == $num3){
			$triangulo = 'Isósceles';
		} elseif($num1 != $num2 && $num1 != $num3){
			$triangulo = 'Escaleno';
		}
	} else {
		echo "Não é triangulo";
	}


}


 ?>


<form method="get" action="">
	<label>Informe os 3 lados: </label><br/>
	<input type="number" name="num1"><br/>
	<input type="number" name="num2"><br/>
	<input type="number" name="num3"> 
	<br/>
	<input type="submit"><br/><br/>
	<label>O triangulo é: </label>
	<input type="text" readonly="" value="<?php echo (!empty($triangulo) ? $triangulo : "");?>">

</form>