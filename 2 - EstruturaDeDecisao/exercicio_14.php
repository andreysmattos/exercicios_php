<?php /* 14 - Faça um programa que lê as duas notas parciais obtidas por um aluno numa disciplina ao longo de um semestre, e calcule a sua média. A atribuição de conceitos obedece à tabela abaixo:
  Média de Aproveitamento  Conceito
  Entre 9.0 e 10.0        A
  Entre 7.5 e 9.0         B
  Entre 6.0 e 7.5         C
  Entre 4.0 e 6.0         D
  Entre 4.0 e zero        E
O algoritmo deve mostrar na tela as notas, a média, o conceito correspondente e a mensagem “APROVADO” se o conceito for A, B ou C ou “REPROVADO” se o conceito for D ou E. */

if(!empty($_POST['nota1']) && !empty($_POST['nota2']) && is_numeric($_POST['nota1']) && is_numeric($_POST['nota2']) && $_POST['nota1'] <= 10 && $_POST['nota1'] >= 0 && $_POST['nota2'] <= 10 && $_POST['nota2'] >= 0){
	$nota1 = $_POST['nota1'];
	$nota2 = $_POST['nota2'];
	$media = ($nota1 + $nota2) / 2;
	if($media >= 9){
		$aproveitamento = 'A';
	} elseif($media >= 7.5){
		$aproveitamento = 'B';
	} elseif($media >= 6){
		$aproveitamento = 'C';
	} elseif($media >= 4){
		$aproveitamento = 'D';
	} elseif($media >= 0){
		$aproveitamento = 'E';
	}

	switch ($aproveitamento) {
		case 'A':
			$suficiencia = "Aprovado";
			break;
		case 'B':
			$suficiencia = "Aprovado";
			break;
		case 'C':
			$suficiencia = "Aprovado";
			break;
		case 'D':
			$suficiencia = "Reprovado";
			break;
		case 'E':
			$suficiencia = "Reprovado";
			break;
	}

	
}

?>


<form method="post" action="" style="float: left;">
<label>Digite as notas do semestre. </label> <br/>
<label for="nota1"> Nota 1: </label> <input type="text" name="nota1" id="nota1" maxlength="2"> <br/>
<label for="nota2"> Nota 2: </label> <input type="text" name="nota2" id="nota2" maxlength="2"> <br/>
<input type="submit" value="Enviar">
</form>

<textarea cols="25" rows="6">
<?php
if(!empty($_POST['nota1']) && !empty($_POST['nota2']) && is_numeric($_POST['nota1']) && is_numeric($_POST['nota2']) && $_POST['nota1'] <= 10 && $_POST['nota1'] >= 0 && $_POST['nota2'] <= 10 && $_POST['nota2'] >= 0){
	echo 'Nota 1: ' . $nota1 . '&#10';
	echo 'Nota 2: ' . $nota2 . '&#10';
	echo 'Média: ' . $media . '&#10';
	echo 'Aproveitamente: ' . $aproveitamento .'&#10';
	echo $suficiencia . '&#10';
}


?></textarea>