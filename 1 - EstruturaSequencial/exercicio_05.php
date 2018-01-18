<?php /* 5 - Faça um Programa que converta metros para centímetros. */ ?>


<style type="text/css">
	.marg {
		margin-left: 100px;
	}
</style>

<form method="post" action=""> 
	<label for="metros"> Metros: </label>
	<input type="number" name="metros" id="metros">
	<input type="submit">
	
	<?php
	$centimetros = "Centimetros";
	$metros = 0;
	if(!empty($_POST['metros'])){
	$metros = $_POST['metros'];
	$centimetros = $metros * 100;
	}
	?>
	<input type="text" disabled="" class="marg" value="<?php echo $centimetros . ' centimetros.';?>">
</form>