<?php
/*
9 - Faça um Programa que leia um vetor A com 10 números inteiros, calcule e mostre a soma dos quadrados dos elementos do vetor.
*/



?>


<form method="post">

<label> Número: </label> <input type="number" name="num[]"> <br/>
<label> Número: </label> <input type="number" name="num[]"> <br/>
<label> Número: </label> <input type="number" name="num[]"> <br/>
<label> Número: </label> <input type="number" name="num[]"> <br/>
<label> Número: </label> <input type="number" name="num[]"> <br/>
<label> Número: </label> <input type="number" name="num[]"> <br/>
<label> Número: </label> <input type="number" name="num[]"> <br/>
<label> Número: </label> <input type="number" name="num[]"> <br/>
<label> Número: </label> <input type="number" name="num[]"> <br/>
<label> Número: </label> <input type="number" name="num[]"> <br/>
<input type="submit">
</form>

<?php
$quad = [];
if(isset($_POST['num'])){
	foreach($_POST['num'] as $valor){
		//echo "valor: " . $valor . "<br/>";
		if(is_numeric($valor)){
			$quad[] = $valor * $valor;
		}
	}

	echo array_sum($quad);
}


