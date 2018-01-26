<?php

/*
11 - Data com mês por extenso. Construa uma função que receba uma data no formato DD/MM/AAAA e devolva uma string no formato D de  mesPorExtenso de AAAA. Opcionalmente, valide a data e retorne NULL caso a data seja inválida.
*/
setlocale(LC_TIME, 'pt_BR', 'pt_BR.utf-8', 'pt_BR.utf-8', 'portuguese');
date_default_timezone_set('America/Sao_Paulo');

function mesPorExtenso($data){

	
	$data = (int) str_replace('/', '', $data);
	if(strlen($data) == 8){
	$dia = substr($data, 0,2);
	$mes = (int) substr($data,2,2);
	$ano = (int) substr($data, 4,4);
} else {
	return false;
}


	if($dia > 31 || $dia <= 0){
		echo "entrou aki1";
		return false;
	}

	if($mes > 12 || $mes <= 0){
		echo "entrou aki2";
		return false;
	}

	if($ano <= 0){
		echo "entrou aki3";
		return false;
	}

	echo $dia . " ";

	switch($mes){
		case 1:
			echo "Janeiro";
		break;

		case 2:
			echo "Fevereiro";
		break;
		
		case 3:
			echo "Março";
		break;
		
		case 4:
			echo "Abril";
		break;
		
		case 5:
			echo "Maio";
		break;
		
		case 6:
			echo "Junho";
		break;
		
		case 7:
			echo "Julho";
		break;
		
		case 8:
			echo "Agosto";
		break;
		
		case 9:
			echo "Setembro";
		break;
		
		case 10:
			echo "Outubro";
		break;
		
		case 11:
			echo "Novembro";
		break;
		
		case 12:
			echo "Dezembro";
		break;
		

	}
	echo " de " . $ano;

}


mesPorExtenso('21/02/9999');
?>