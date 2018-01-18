<?php /* 10 - Faça um Programa que pergunte em que turno você estuda. Peça para digitar M-matutino ou V-Vespertino ou N- Noturno. Imprima a mensagem "Bom Dia!", "Boa Tarde!" ou "Boa Noite!" ou "Valor Inválido!", conforme o caso */ ?>

<h2> Qual turno você estuda? </h2>
<h4> Digite: </h4>
<h5> M-matutino </h5>
<h5> V-Vespertino </h5>
<h5> N- Noturno </h5>


<form method="get" action="">
<input type="text" name="turno" maxlength="1" size="1">
<input type="submit">
</form>


<?php 
if(!empty($_GET['turno'])){
	$turno = strtoupper($_GET['turno']);
	switch ($turno) {
		case 'M':
			echo "Bom Dia!";
			break;
		
		case 'V':
			echo "Boa Tarde!";
			break;
		
		case 'N':
			echo "Boa Noite";
			break;
		

		default:
			echo "Valor Inválido!";
			break;
	}
}
?>