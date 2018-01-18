<?php /* 27  - Faça um programa que calcule o número médio de alunos por turma. Para isto, peça a quantidade de turmas e a quantidade de alunos para cada turma. As turmas não podem ter mais de 40 alunos. */
$lista= [];
?>




<form style="display: <?php echo (!empty($_GET['turma']) ? 'none' : 'block');?>" method="get" action="">
	<label for="turma">Informe a quantidade de turmas: </label><br/>
	<input type="number" name="turma" id="turma"><br/>
	<input type="submit">
</form>




<div style="display: <?php echo (!empty($_GET['turma']) ? 'block' : 'none');?>">
	<form method="post" action="">
	<?php
	if(!empty($_GET['turma'])){
		$turma = $_GET['turma'];

		for ($i=1; $i <= $turma; $i++) { 	
		echo '<label> Quantidade de alunos da '.$i .'º turma: </label>';
		echo '<input type="number" name="num'.$i.'" max="40"><br/>';
		}
		if(!empty($_POST['num'.($i-1)])){
			for ($i=1; $i <= $turma; $i++) { 
				$lista[] = $_POST['num'.($i)];

			}

			$media = array_sum($lista) / count($lista);

//	echo 'A media de alunos por turma é: '. number_format($media,1);

	}
//print_r($lista);

	

	}	


	
	?>
<input type="submit">
</form>

</div>


<?php
if(isset($media)){
echo 'A media de alunos por turma é: '. number_format($media,1);
}

?>