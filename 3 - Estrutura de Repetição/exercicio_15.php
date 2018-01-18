<?php /* 15 - A série de Fibonacci é formada pela seqüência 1,1,2,3,5,8,13,21,34,55,... Faça um programa capaz de gerar a série até o n−ésimo termo. */ ?>

<form method="get" action="">
	<label>Informe um número: </label>

	<input type="number" name="num"> 
	<input type="submit">


</form>


<?php

if(!empty($_GET['num'])){

	$num = $_GET['num'];
	$antes = 1;
	$proximo = 1;
	$array = array();
	$array[0] = 1;
	$array[1] = 1;


	for ($i=0; $i < $num ; $i++) {
	


		$array[] = $array[$i] + $array[$i+1];

		echo $array[$i] . ' ';


	}



}


?>