<?php

/* 
4 - Faça um Programa que leia um vetor de 10 caracteres, e diga quantas consoantes foram lidas. Imprima as consoantes.
*/




?>


<form method="get">
	<label> Digite uma letra: </label> <br/>
	<input type="text" maxlength="1" name="letra[]" size="1">
	<br/>
	<label> Digite uma letra: </label> <br/>
	<input type="text" maxlength="1" name="letra[]" size="1">
	<br/>
	<label> Digite uma letra: </label> <br/>
	<input type="text" maxlength="1" name="letra[]" size="1">
	<br/>
	<label> Digite uma letra: </label> <br/>
	<input type="text" maxlength="1" name="letra[]" size="1">
	<br/>
	<label> Digite uma letra: </label> <br/>
	<input type="text" maxlength="1" name="letra[]" size="1">
	<br/>
	<label> Digite uma letra: </label> <br/>
	<input type="text" maxlength="1" name="letra[]" size="1">
	<br/>
	<label> Digite uma letra: </label> <br/>
	<input type="text" maxlength="1" name="letra[]" size="1">
	<br/>
	<label> Digite uma letra: </label> <br/>
	<input type="text" maxlength="1" name="letra[]" size="1">
	<br/>
	<label> Digite uma letra: </label> <br/>
	<input type="text" maxlength="1" name="letra[]" size="1">
	<br/>
	<label> Digite uma letra: </label> <br/>
	<input type="text" maxlength="1" name="letra[]" size="1">
	<br/>

	<input type="submit">
</form>


<?php
$total = 0;
if(isset($_GET['letra'])){
	foreach($_GET['letra'] as $key => $letra){
		if($letra != '' && is_string($letra)){
			switch ($letra) {
				case 'a':
					unset($_GET['letra'][$key]);
					break;
				
				case 'e':
					unset($_GET['letra'][$key]);
					break;
				case 'i':
					unset($_GET['letra'][$key]);
					break;
				case 'o':
					unset($_GET['letra'][$key]);
					break;
				case 'u':
					unset($_GET['letra'][$key]);
					break;
				
			}
		}
	}

	foreach ($_GET['letra'] as $key => $value) {
		echo $value;
		echo ($value == end($_GET['letra']) ? '' : " - ");
	}
}

echo "<br/>Total de consoantes: " . count($_GET['letra']);


?>