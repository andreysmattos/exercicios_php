<?php
/*
12 - Valida e corrige número de telefone. Faça um programa que leia um número de telefone, e corrija o número no caso deste conter somente 7 dígitos, acrescentando o '3' na frente. O usuário pode informar o número com ou sem o traço separador.

    Valida e corrige número de telefone
    Telefone: 461-0133
    Telefone possui 7 dígitos. Vou acrescentar o digito três na frente.
    Telefone corrigido sem formatação: 34610133
    Telefone corrigido com formatação: 3461-0133


*/


function telefone($t){
	$telefone = (string) $t;
	

	if(strlen($telefone) < 7  || strlen($telefone) > 9){
		echo "Número invalido.";
		return false;
	}

	if($telefone[-5] == '-'){
		if(strlen($telefone) == 8){ //entra aki se TIVER a barra -
			$dig = 8;
			$sm = $telefone;
			$telefone = '3' . $telefone;
			$tres= true;
		}
		
	} else { //entra aki se NAO tiver a barra -

		
		//entra aqui quando não tem a barra e já tem o 3 na frente
		if(strlen($telefone) == 8){
			$dig = 8;
			$sm = $telefone;

			$telefone2 = substr($telefone, -4);
			$telefone1 = substr($telefone, 0, strlen($telefone2));
			$telefone = $telefone1 . "-" . $telefone2;
		} elseif(strlen($telefone) == 7){
			$dig = 8;
			$sm = $telefone;
			$tres= true;
			$telefone2 = substr($telefone, -4);
			$telefone1 = substr($telefone, 0, strlen($telefone2));
			$telefone = '3' . $telefone1 . "-" . $telefone2;

		}
	}


	if(!isset($dig)){
		$dig = strlen($telefone);
		echo "Telefone: " . $telefone . "<br/>";
		return false;
	}
	echo "Telefone: " . $telefone . "<br/>";
	echo "Telefone possui $dig dígitos. <br/>";
	echo (isset($tres)) ? "Vou acrescentar o digito três na frente<br/>" : "<br/>";
	echo "Telefone corrigido sem formatação: $sm <br/>";
	echo "Telefone corrigido com formatação: $telefone <br/>";


}


?>

<form method="get">
	<label>Telefone:</label> <br/>
	<input type="text" name="telefone">
	<input type="submit">
</form>

<?php

echo (!empty($_GET['telefone'])) ? telefone($_GET['telefone']) : '';