<?php /* 32 - Faça um programa que calcule o fatorial de um número inteiro fornecido pelo usuário. Ex.: 5!=5.4.3.2.1=120. A saída deve ser conforme o exemplo abaixo:
Fatorial de: 5
5! =  5 . 4 . 3 . 2 . 1 = 120 */ ?>

<form method="get" action="">
	<label>Número:</label> <br/>
	<input type="number" name="num"> <br/>
	<input type="submit">
</form>

<?php
if(!empty($_GET['num'])){
	$fatorial = 1;
	$num = $_GET['num'];
	echo $num .' = ';
	while($num > 0){
		if($num == 1){
		echo $num . '  ';} else{
			echo $num . ' . ';}

		$fatorial *= $num;
		$num--;



	}
	echo ' = ' . $fatorial;
}

?>