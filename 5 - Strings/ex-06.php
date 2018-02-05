<?php
/*
6 - Data por extenso. Faça um programa que solicite a data de nascimento (dd/mm/aaaa) do usuário e imprima a data com o nome do mês por extenso.

    Data de Nascimento: 29/10/1973
    Você nasceu em  29 de Outubro de 1973.
*/

function data($d){
	if($valida = (substr_count($d, "/") === 2) ? 1 : 0){
		$data = explode('/', $d);
		if((strlen($data[0]) === 2 || strlen($data[1]) === 1) && is_numeric($data[0]) && $data[0] <= 31){
		} else {
			echo "Digite a nata no formato: 19/10/1994";
			return 0;
		}

		if((strlen($data[1]) === 2 || strlen($data[1]) === 1) && is_numeric($data[0]) && $data[1] <= 12){
		} else {
			echo "Digite a nata no formato: 19/10/1994";
			return 0;
		}

		if(strlen($data[2]) === 4 && is_numeric($data[0])){
		} else {
			echo "Digite a nata no formato: 19/10/1994";
			return 0;
		}

		switch($data[1]){
			case 1:
				$mes = "Janeiro";
			break;

			case 2:
				$mes = "Fevereiro";
			break;

			case 3:
				$mes = "Março";
			break;

			case 4:
				$mes = "Abril";
			break;

			case 5:
				$mes = "Maio";
			break;

			case 6:
				$mes = "Junho";
			break;

			case 7:
				$mes = "Julho";
			break;

			case 8:
				$mes = "Agosto";
			break;

			case 9:
				$mes = "Setembro";
			break;

			case 10:
				$mes = "Outubro";
			break;

			case 11:
				$mes = "Novembro";
			break;

			case 12:
				$mes = "Dezembro";
			break;
		}

		echo "Data de Nascimento: ".$d." <br/>";
    	echo "Você nasceu em  ".$data[0]." de ".$mes." de ".$data[2].".";

	}
}


?>

<form method="get">
	<label> Data de nascimento: </label> <br/>
	<input type="text" name="d" placeholder="19/10/1994"> <br/>
	<input type="submit">
</form>

<?php
if(!empty($_GET['d'])){
	$d = filter_input(INPUT_GET, 'd', FILTER_SANITIZE_SPECIAL_CHARS);
	data($d);
}