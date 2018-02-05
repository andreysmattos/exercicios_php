<?php
/* 1 - Faça um Programa que leia um vetor de 5 números inteiros e mostre-os. */ 


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
	<input type="submit">
</form>


<?php


if(isset($_GET['num'])){
	echo "<hr>Vetor: ";

	foreach($_GET['num'] as $value){
		$virg = ($value != end($_GET['num']) ? ', ' : '');
		echo $value. $virg	;
	}
}