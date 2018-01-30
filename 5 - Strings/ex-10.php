<?php
/*
10 - Número por extenso. Escreva um programa que solicite ao usuário a digitação de um número até 99 e imprima-o na tela por extenso.
*/

function extenso($num){
	$num = (string) $num;

	$unidade[1] = "Um";
	$unidade[2] = "Dois";
	$unidade[3] = "Três";
	$unidade[4] = "Quatro";
	$unidade[5] = "Cinco";
	$unidade[6] = "Seis";
	$unidade[7] = "Sete";
	$unidade[8] = "Oito";
	$unidade[9] = "Nove";

	$dezenas[1] = 'Dez';
	$dezenas[2] = 'Vinte';
	$dezenas[3] = 'Trinta';
	$dezenas[4] = 'Quarenta';
	$dezenas[5] = 'Cinquenta';
	$dezenas[6] = 'Sessenta';
	$dezenas[7] = 'Setenta';
	$dezenas[8] = 'Oitenta';
	$dezenas[9] = 'Noventa';

	switch ($num) {
		case '11':
			echo "Onze";
			return false;
			break;
		
		case '12':
			echo "Doze";
			return false;
			break;
		
		case '13':
			echo "Treze";
			return false;
			break;
		
		case '14':
			echo "Quartorze";
			return false;
			break;
		
		case '15':
			echo "Quinze";
			return false;
			break;
		
		case '16':
			echo "Dezesseis";
			return false;
			break;
		
		case '17':
			echo "Dezessete";
			return false;
			break;
		
		case '18':
			echo "Dezoito";
			return false;
			break;
		
		case '19':
			echo "Dezenove";
			return false;
			break;
		

		default:
			# code...
			break;
	}
	
	if(strlen($num) > 1){
		if($num[1] > 0){
			echo $dezenas[$num[0]] . " e " . strtolower($unidade[$num[1]]);
		} else {
			echo $dezenas[$num[0]];
		}
	} else {
		echo $unidade[$num[0]];
	}

}

for($i = 1; $i <= 99; $i++){
	extenso($i);
	echo "<br/>";
}


?>
