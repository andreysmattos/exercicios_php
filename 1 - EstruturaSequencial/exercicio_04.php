<?php /* Faça um Programa que peça as 4 notas bimestrais e mostre a média. */ ?>

<form method="get" >
	<label> Informe as notas do aluno: </label> <br/>
		<?php 
 for ($i=1; $i < 5; $i++) { 
 	echo ' <br/> <input type="number" placeholder="Nota ' . $i . '" min="0" max="10" name="nota' . $i .'">';
 }

 $media = 0;
if(isset($_GET['nota1']) && !empty($_GET['nota1']) && isset($_GET['nota2']) && !empty($_GET['nota2']) && isset($_GET['nota3']) && !empty($_GET['nota3']) && isset($_GET['nota4']) && !empty($_GET['nota4'])) {
		$media = ($_GET['nota1'] + $_GET['nota2'] + $_GET['nota3'] + $_GET['nota4']) / 4;
		}
?>
	<input type="submit">

	<label> Média: </label>
	<input type="number" readonly value="<?php echo $media ?>">

</form>