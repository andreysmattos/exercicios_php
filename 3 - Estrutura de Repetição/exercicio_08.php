<?php /* 8 - Faça um programa que leia 5 números e informe a soma e a média dos números. */?>


<form method="post" action="">
	<input type="number" name="num1"> <br/>
	<input type="number" name="num2"> <br/>
	<input type="number" name="num3"> <br/>
	<input type="number" name="num4"> <br/>
	<input type="number" name="num5"> <br/>
	<input type="submit" value="Verificar">
</form>

<?php
if(!empty($_POST['num1']) && !empty($_POST['num2']) && !empty($_POST['num3']) && !empty($_POST['num4']) && !empty($_POST['num5'])){

$soma = 0;
	for ($i=1; $i <= 5; $i++) { 
		$soma += $_POST["num$i"];
	}
	$media = ($soma / 5);
	

	echo 'O soma dos números é ' . $soma;

	echo ' <br/>A média dos números é ' . $media;



}


?>