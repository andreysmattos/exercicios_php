<?php /* 13 - Faça um programa que peça dois números, base e expoente, calcule e mostre o primeiro número elevado ao segundo número. Não utilize a função de potência da linguagem. */ 


if(!empty($_GET['expoente']) && !empty($_GET['base'])){
	$expoente = $_GET['expoente'];
	$base = $_GET['base'];
	$resultado = $_GET['base'];
	for ($i=1; $i < $expoente; $i++) { 
		
		$resultado *= $base;
}
	}
	

?>


<form method="get" action="">
	<input type="number" name="base" placeholder="Informe a base"> <br/>
	<input type="number" name="expoente" placeholder="Informe o expoente"> <br/>
	<input type="submit" value="    Clique para calcular	  "><br/>
	<input type="text" disabled value="<?= !empty($resultado) ? $resultado : 'Informe ambos valores.'?>">

</form>