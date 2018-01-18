<?php /* 10 - Faça um Programa que peça a temperatura em graus Celsius, transforme e mostre em graus Farenheit. */ ?>

<style type="text/css">
	
.converter {
	margin-left: 50px;
	background: #696969;
	color: white;
	border: solid 1px black;
}
</style>
<form method="post" action="">

	<input type="number" name="celsius" placeholder="Informe em Celsius"> <br/>
	<input type="submit" value="converter" class="converter"><br/>
	<?php
		if(!empty($_POST['celsius'])){
			$farenheit = $_POST['celsius'] * 1.8 + 32;
		}
	?>


	<input type="text" name="celsius" disabled="" value="<?php echo (empty($farenheit)) ? 'Farenheit' : $farenheit; 
	/* Operador ternario, isso é MUITO FODAAAAAAAAAA*/



	?>"><br/>



</form>