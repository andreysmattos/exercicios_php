<?php
/* 
11 - Altere o programa anterior, intercalando 3 vetores de 10 elementos cada. 
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

<hr>
<label> Segundo vetor: </label><br>


<label> Número: </label> <input type="number" name="num3[]" required> <br/>
<label> Número: </label> <input type="number" name="num3[]" required> <br/>
<label> Número: </label> <input type="number" name="num3[]" required> <br/>
<label> Número: </label> <input type="number" name="num3[]" required> <br/>
<label> Número: </label> <input type="number" name="num3[]" required> <br/>
<label> Número: </label> <input type="number" name="num3[]" required> <br/>
<label> Número: </label> <input type="number" name="num3[]" required> <br/>
<label> Número: </label> <input type="number" name="num3[]" required> <br/>
<label> Número: </label> <input type="number" name="num3[]" required> <br/>
<label> Número: </label> <input type="number" name="num3[]" required> <br/>



<input type="submit">
</form>


<?php
$array_novo = [];
if(isset($_POST['num']) && isset($_POST['num2']) && isset($_POST['num3'])){
	for($i = 0; $i < 10; $i++){
		$array_novo [] = $_POST['num'][$i];
		$array_novo [] = $_POST['num2'][$i];
		$array_novo [] = $_POST['num3'][$i];
	}

	

	foreach($array_novo as $value){
		$virugula = (end($array_novo) != $value) ? ", " : '';
		echo $value . $virugula;
	}
}