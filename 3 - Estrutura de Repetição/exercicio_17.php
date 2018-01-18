<?php /* 17 - Faça um programa que calcule o fatorial de um número inteiro fornecido pelo usuário. Ex.: 5!=5.4.3.2.1=120 */ 


if(!empty($_GET['num'])){
	$num = $_GET['num'];
	$resultado = $num;

	while ($num >= 2) {
		$resultado *= ($num-1);
		$num--;
	}
}


?>

<form method="get" action="">
	
	<label> Informe um valor: </label> 	<br/>

	<input type="number" name="num"> 	<br/>

	<input type="submit">

</form>


<?php
echo (!empty($_GET['num'])) ? 'O fatorail de '. $_GET['num'] .' é : ' . $resultado : '';

?>