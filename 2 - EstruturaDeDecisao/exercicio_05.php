<?php /* 5 - Faça um programa para a leitura de duas notas parciais de um aluno. O programa deve calcular a média alcançada por aluno e apresentar:
A mensagem "Aprovado", se a média alcançada for maior ou igual a sete;
A mensagem "Reprovado", se a média for menor do que sete;
A mensagem "Aprovado com Distinção", se a média for igual a dez. */ ?>

<?php

if(!empty($_POST['nota1']) && !empty($_POST['nota2']) && is_numeric($_POST['nota1']) && is_numeric($_POST['nota2'])){
	$nota1 = $_POST['nota1'];
	$nota2 = $_POST['nota2'];

	if($nota1 > 10 || $nota1 < 0 || $nota2 > 10 || $nota2 < 0){
		echo "Informe os valores corretamente.";
	} else {

		$media = ($nota1 + $nota2) / 2;
		if($media == 10){
			$msg = "Aprovado com Distinção";
		} elseif($media >= 7){
			$msg = "Aprovado";
		} elseif($media < 7){
			$msg = "Reprovado";

		}

	}

}
?>
<form method="post" action="">
	<label for="nota1"> Nota 1: </label> <input type="number" name="nota1" id="nota1"> <br/>
	<label for="nota2"> Nota 2: </label> <input type="number" name="nota2" id="nota2">
	<input type="submit" value="Enviar"><br/>
	Parecer: 
	<input type="text" disabled="" value="<?php echo (empty($msg) ? '0' : $msg);?>">
</form>

