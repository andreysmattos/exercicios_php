<?php /* 25 - Faça um programa que peça para n pessoas a sua idade, ao final o programa devera verificar se a média de idade da turma varia entre 0 e 25,26 e 60 e maior que 60; e então, dizer se a turma é jovem, adulta ou idosa, conforme a média calculada. */
$listaAlunos = [];
$i = 0;
?>



<form style="display: <?php echo (empty($_GET['num']) ? 'block' : 'none'); ?>;" method="get" action="">
	<label>Informe a quantidade de alunos:</label> <br/>
	<input type="number" name="num"><br/>
	<input type="submit">
</form>





<div style="display: <?php echo (!empty($_GET['num']) ? 'block' : 'none'); ?>;">

<form method="post" action="">
<?php
if(!empty($_GET['num'])){
	$num = $_GET['num'];

	for ($i=1; $i <= $num; $i++) { 
		echo '<label for="aluno' . $i . '"> Idade do '. $i .'º aluno:</labe> <br/>';
			echo '<input type="number" name="aluno' . $i . '" id="aluno' . $i . '"> <br/>';
	}
}


?>
<br/>
<input type="submit" value="Calcular media de idade">
</form>
</div>


<?php

if(!empty($_POST['aluno' . ($i -1)])){

	for ($i=1; $i <= $num; $i++) {
		$listaAlunos[] = $_POST['aluno' . $i];

	}

	$media = array_sum($listaAlunos) / ($i -1);

	if($media > 0 && $media <= 25){
		$turma = 'jovem';
	} elseif($media > 26 && $media <= 60){
		$turma = 'adulta';
	} else{
		$turma = 'idosa';
	}

	echo "<h4> A media de idade da turma é $media, podemos dizer que é uma turma $turma.</h4>";


}

?>


