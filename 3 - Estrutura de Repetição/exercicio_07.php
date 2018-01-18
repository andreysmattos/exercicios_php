<?php /* 7 - Faça um programa que leia 5 números e informe o maior número. */?>


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

	$array = [];

	for ($i=1; $i <= 5; $i++) { 
		array_push($array, $_POST["num$i"]);
	}
	
	$maior = max($array);

	echo 'O maior número é ' . $maior;



}


?>