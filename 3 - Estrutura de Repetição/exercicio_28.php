<?php /* 28 - Faça um programa que calcule o valor total investido por um colecionador em sua coleção de CDs e o valor médio gasto em cada um deles. O usuário deverá informar a quantidade de CDs e o valor para em cada um. */ 
$lista= [];
?>




<form style="display: <?php echo (!empty($_GET['cd']) ? 'none' : 'block');?>" method="get" action="">
	<label for="cd">Informe a quantidade de CDs: </label><br/>
	<input type="number" name="cd" id="cd"><br/>
	<input type="submit">
</form>




<div style="display: <?php echo (!empty($_GET['cd']) ? 'block' : 'none');?>">
	<form method="post" action="">
	<?php
	if(!empty($_GET['cd'])){
		$cd = $_GET['cd'];

		for ($i=1; $i <= $cd; $i++) { 	
		echo '<label> Valor medio do '.$i .'º CD: </label>';
		echo '<input type="number" name="num'.$i.'"><br/>';
		}
		if(!empty($_POST['num'.($i-1)])){
			for ($i=1; $i <= $cd; $i++) { 
				$lista[] = $_POST['num'.($i)];

			}

			$total = array_sum($lista);
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
echo "O valor total gasto foi aproximadamente de " . $total . '<br/>';
echo "O valor medio de cada CD aproximadamente de " . $media . '<br/>';
//echo 'A media de alunos por turma é: '. number_format($media,1);
}

?>


