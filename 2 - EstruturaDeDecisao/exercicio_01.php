<?php /* 1 - Faça um Programa que peça dois números e imprima o maior deles. */?>

<?php

if(!empty($_GET['num1']) and !empty($_GET['num2'])){
	if($_GET['num1'] > $_GET['num2']){
		$maior = $_GET['num1'];
	} else {
		$maior = $_GET['num2'];
	}


}

?>

<form method="get" action="">
<label>Informe dois números:</label> <br/>
<input type="number" name="num1">
<input type="number" name="num2">
<br/>
<input type="submit" value="Verificar">
<input type="text" disabled="" value="<?php echo (empty($maior) ? 0 : $maior); ?>" size="36">
</form>

