<?php

/* 2 - Faça um Programa que leia um vetor de 10 números reais e mostre-os na ordem inversa.
 */
?>

<form method="get">
	<label> Número 1: </label> <br/>
	<input type="number" name="num[]">
	<br>
	<label> Número 2: </label> <br/>
	<input type="number" name="num[]">
	<br>
	<label> Número 3: </label> <br/>
	<input type="number" name="num[]">
	<br>
	<label> Número 4: </label> <br/>
	<input type="number" name="num[]">
	<br>
	<label> Número 5: </label> <br/>
	<input type="number" name="num[]">
	<br>
	<br>
	<label> Número 6: </label> <br/>
	<input type="number" name="num[]">
	<br>
	<br>
	<label> Número 7: </label> <br/>
	<input type="number" name="num[]">
	<br>
	<br>
	<label> Número 8: </label> <br/>
	<input type="number" name="num[]">
	<br>
	<br>
	<label> Número 9: </label> <br/>
	<input type="number" name="num[]">
	<br>
	<br>
	<label> Número 10: </label> <br/>
	<input type="number" name="num[]">
	<br>
	<input type="submit">
</form>


<?php

foreach(array_reverse($_GET['num']) as $value){

	echo $value;
	echo ($_GET['num'][0] != $value) ? ", " : '';
}

?>