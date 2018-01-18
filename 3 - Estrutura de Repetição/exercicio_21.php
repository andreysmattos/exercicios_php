<?php /* 21 - Faça um programa que peça um número inteiro e determine se ele é ou não um número primo. Um número primo é aquele que é divisível somente por ele mesmo e por 1. */ ?>



<form method="get" action="">
<label>Digite um valor: </label> <br/>

<input type="number" name="num"> <br/>

<input type="submit">



</form>



<?php


if(!empty($_GET['num'])){
	$num = $_GET['num'];
	//echo $num;
	$primo = 0;
	$nPrimo = 0;

	for ($i=2; $i < $num; $i++) { 
		//echo $i;


		 if($num % $i > 0){
			//echo 'tem sobra <br/>';
			$nPrimo+= 1;
		} else {
		$primo+= 1;
		//echo 'nao tem sobra <br/>';
		}


	}

	//echo $primo . ' VALOR PRIMO <br/>' . $nPrimo . 'VALOR NAO PRIMO';
	echo ($primo == 0) ? "O número informado é PRIMO" : "O número informado não é PRIMO";



}
?>