<?php /* 9 - Faça um Programa que peça a temperatura em graus Farenheit, transforme e mostre a temperatura em graus Celsius.
C = (5 * (F-32) / 9). */ ?>

<style type="text/css">
	
.converter {
	margin-left: 50px;
	background: #696969;
	color: white;
	border: solid 1px black;
}
</style>
<form method="post" action="">

	<input type="number" name="farenheit" placeholder="Informe em Farenheit"> <br/>
	<input type="submit" value="converter" class="converter"><br/>
	<?php
		if(!empty($_POST['farenheit'])){
			$celsius = (5 * ($_POST['farenheit']-32) / 9);
		}
	?>


	<input type="text" name="celsius" disabled="" value="<?php echo (empty($celsius)) ? 'Celsius' : $celsius; 
	/* Operador ternario, isso é MUITO FODAAAAAAAAAA*/



	?>"><br/>



</form>