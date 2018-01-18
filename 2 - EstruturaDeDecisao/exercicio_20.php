<?php /* 20 - Faça um Programa para leitura de três notas parciais de um aluno. O programa deve calcular a média alcançada por aluno e presentar:
A mensagem "Aprovado", se a média for maior ou igual a 7, com a respectiva média alcançada;
A mensagem "Reprovado", se a média for menor do que 7, com a respectiva média alcançada;
A mensagem "Aprovado com Distinção", se a média for igual a 10. */ 

if(!empty($_POST['num1']) && $_POST['num1'] >= 0 && $_POST['num1'] <= 10 && !empty($_POST['num2']) && $_POST['num2'] >= 0 && $_POST['num2'] <= 10 && !empty($_POST['num3']) && $_POST['num3'] >= 0 && $_POST['num3'] <= 10){

	$media = round(($_POST['num1'] + $_POST['num2'] + $_POST['num3']) / 3, 1);
	
	if($media == 10) {
		$resultado = 'Aprovado com Distinção';
	} elseif ($media >= 7) {
		$resultado = 'Aprovado com nota ' . $media;
	} elseif ($media < 7) {
		$resultado = 'Reprovado com nota ' . $media;
	}

	echo $resultado;

}

?>


<form method="post" action="">
<label>Informe as notas: </label><br/>
<input type="number" name="num1">  <br/>
<input type="number" name="num2"> <br/>
<input type="number" name="num3"> <br/>
<input type="submit"><br/><br/>

<label> Resultado: </label>
<input type="text" readonly="" value="<?php echo (!empty($resultado) ? $resultado : 'Informe os valores');?>">
</form>