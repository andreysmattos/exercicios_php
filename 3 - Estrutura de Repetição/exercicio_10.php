<?php /* 10 - Faça um programa que receba dois números inteiros e gere os números inteiros que estão no intervalo compreendido por eles. */?>


<form method="get" action="">
	<input type="number" name="num1"> <br/>
	<input type="number" name="num2"> <br/>
	<input type="submit">
</form>
<h4> Programa que recebe dois números inteiros e gera os números inteiros que estão no intervalo.</h4>

<?php
if(!empty($_GET['num1']) && !empty($_GET['num2'])){
	$num1 = $_GET['num1'];
	$num2 = $_GET['num2'];

	if($num1 > $num2){
		$intervalo = $num1 - $num2;

	} elseif($num2 > $num1){
		$intervalo = $num2 - $num1;
	}


	for ($intervalo; $intervalo > 0; $intervalo--) { 
		echo ($intervalo > 1) ? $intervalo . ' - ' : $intervalo;
	}


}

?>