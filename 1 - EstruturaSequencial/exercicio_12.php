<?php /* 12 - Tendo como dados de entrada a altura de uma pessoa, construa um algoritmo que calcule seu peso ideal, usando a seguinte fórmula: (72.7*altura) - 58 */ ?>
<form method="get" action="">
	<label for="altura"> Altura: </label>
	<input type="text" name="altura" id="altura" placeholder="exemplo: 1.50">
	<input type="submit">
	<br/>
	<?php
	$pesoIdeal = 'Valor informado está incorreto.';
	if(!empty($_GET['altura']) && is_numeric($_GET['altura'])){
		$verifica = strpos($_GET['altura'], '.');
		if($verifica && strlen($_GET['altura']) == 4){
			$altura = $_GET['altura'];
			$pesoIdeal = (72.7 * $altura) - 58;
		} 
	}
	?>
	<input disabled="" value="<?php echo $pesoIdeal;?>" size="27px">
</form>



