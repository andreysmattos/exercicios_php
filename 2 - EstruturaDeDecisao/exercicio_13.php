<?php /* 13 - Faça um Programa que leia um número e exiba o dia correspondente da semana. (1-Domingo, 2- Segunda, etc.), se digitar outro valor deve aparecer valor inválido. */ 

if(!empty($_GET['dia']) && is_numeric($_GET['dia'])){
	$dia = $_GET['dia'];
	switch ($dia) {
		case '1':
			$diasemana = 'Domingo';
			break;
		case '2':
			$diasemana = 'Segunda';
			break;
		case '3':
			$diasemana = 'Terça';
			break;
		case '4':
			$diasemana = 'Quarta';
			break;
		case '5':
			$diasemana = 'Quinta';
			break;
		case '6':
			$diasemana = 'Sexta';
			break;
		case '7':
			$diasemana = 'Sabado';
			break;

		
		default:
			$diasemana = 'Valor inválido';
			break;

		
	}
	


} elseif (!empty($_GET['dia']) && !is_numeric($_GET['dia'])){
	echo "ERROR APENAS VALORES NÚMERICOS";
}


?>




<form method="get" action="">
<label>Digite um número equivalente ao dia da semana:</label> <br/>
<input type="text" name="dia" maxlength="1" size="1">
<input type="submit"> <br/>
<input type="text" disabled value="<?php echo (!empty($diasemana) ? $diasemana : 'Dia da semana.');?>">
</form>