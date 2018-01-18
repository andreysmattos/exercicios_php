<?php /* 6 - Faça um programa que imprima na tela os números de 1 a 20, um abaixo do outro. Depois modifique o programa para que ele mostre os números um ao lado do outro. */

function abaixo(){
	for ($i=1; $i <= 20; $i++) { 
		echo $i . '<br/>';
	}
}

function lado(){
	for ($i=1; $i <= 20; $i++) { 
		echo $i . ' ';
	}
}


?>

<h4>Escolha a opção:</h4>

<form method="get" action="">

	<select name="op">
		<option value="1"> Lado</option>
		<option value="2"> Abaixo</option>
	</select>

	<input type="submit">
	
</form>


<?php 
switch ($_GET['op']) {
	case '1':
		lado();
		break;
	
	case '2':
		abaixo();
		break;
	
}

?>