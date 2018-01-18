<?php /* 20 - Altere o programa de cálculo do fatorial, permitindo ao usuário calcular o fatorial várias vezes e limitando o fatorial a números inteiros positivos e menores que 16. */ 


if(!empty($_GET['num']) && $_GET['num'] <= 16 && $_GET['num'] > 0){
	$num = $_GET['num'];
	$resultado = $num;

	while ($num >= 2) {
		$resultado *= ($num-1);
		$num--;
	}
}


?>

<form method="get" action="">
	
	<label> Informe um valor entre 1 e 16: </label> 	<br/>

	<input type="number" name="num"> 	<br/>

	<input type="submit">

</form>


<?php
echo (!empty($num)) ? 'O fatorail de '. $_GET['num'] .' é : ' . $resultado : '';

?>