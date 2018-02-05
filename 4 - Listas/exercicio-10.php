<?php
/*
10 - Faça um Programa que leia dois vetores com 10 elementos cada. Gere um terceiro vetor de 20 elementos, cujos valores deverão ser compostos pelos elementos intercalados dos dois outros vetores.
*/

?>
<form method="post">
<hr>
<label> Primeiro vetor: </label> <br>

<label> Número: </label> <input type="number" name="num[]" required> <br/>
<label> Número: </label> <input type="number" name="num[]" required> <br/>
<label> Número: </label> <input type="number" name="num[]" required> <br/>
<label> Número: </label> <input type="number" name="num[]" required> <br/>
<label> Número: </label> <input type="number" name="num[]" required> <br/>
<label> Número: </label> <input type="number" name="num[]" required> <br/>
<label> Número: </label> <input type="number" name="num[]" required> <br/>
<label> Número: </label> <input type="number" name="num[]" required> <br/>
<label> Número: </label> <input type="number" name="num[]" required> <br/>
<label> Número: </label> <input type="number" name="num[]" required> <br/>
<hr>
<label> Segundo vetor: </label><br>


<label> Número: </label> <input type="number" name="num2[]" required> <br/>
<label> Número: </label> <input type="number" name="num2[]" required> <br/>
<label> Número: </label> <input type="number" name="num2[]" required> <br/>
<label> Número: </label> <input type="number" name="num2[]" required> <br/>
<label> Número: </label> <input type="number" name="num2[]" required> <br/>
<label> Número: </label> <input type="number" name="num2[]" required> <br/>
<label> Número: </label> <input type="number" name="num2[]" required> <br/>
<label> Número: </label> <input type="number" name="num2[]" required> <br/>
<label> Número: </label> <input type="number" name="num2[]" required> <br/>
<label> Número: </label> <input type="number" name="num2[]" required> <br/>
<input type="submit">
</form>


<?php
$array_novo = [];
if(isset($_POST['num']) && isset($_POST['num2'])){
	for($i = 0; $i < 10; $i++){
		$array_novo [] = $_POST['num'][$i];
		$array_novo [] = $_POST['num2'][$i];
	}

	

	foreach($array_novo as $value){
		$virugula = (end($array_novo) != $value) ? ", " : '';
		echo $value . $virugula;
	}
}

?>