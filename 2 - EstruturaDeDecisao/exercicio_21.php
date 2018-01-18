<?php /*  21 - Faça um Programa para um caixa eletrônico. O programa deverá perguntar ao usuário a valor do saque e depois informar quantas notas de cada valor serão fornecidas. As notas disponíveis serão as de 1, 5, 10, 50 e 100 reais. O valor mínimo é de 10 reais e o máximo de 600 reais. O programa não deve se preocupar com a quantidade de notas existentes na máquina.
Exemplo 1: Para sacar a quantia de 256 reais, o programa fornece duas notas de 100, uma nota de 50, uma nota de 5 e uma nota de 1;
Exemplo 2: Para sacar a quantia de 399 reais, o programa fornece três notas de 100, uma nota de 50, quatro notas de 10, uma nota de 5 e quatro notas de 1. */

if(!empty($_POST['num']) && $_POST['num'] >= 10 && $_POST['num'] <= 600 ){
	$valor = $_POST['num'];

	echo "VALOR TOTAL: " . $valor . '<br/><br/>';

	if($valor >= 100){
		$notaCem = floor($valor / 100);
		$valor = $valor % 100;
		//echo $notaCem . '<- nota 100<br/>';
		$msg100 = ($notaCem == 1) ? $notaCem . ' nota de 100' : $notaCem . ' notas de 100';
		//echo '<br/><br/><br/>' . $msg100 . '<br/><br/>';
		//echo $valor . '< - resto <br/>';
	}

	if($valor >= 50){
		$notaCin = floor($valor / 50);
		$valor = $valor % 50;
		//echo $notaCin . '<- nota 50<br/>';
		//echo $valor . '< - resto <br/>';
		$msg50 = ($notaCin == 1) ? $notaCin . ' nota de 50' : $notaCin . ' notas de 50';
		//echo '<br/><br/><br/>' . $msg50 . '<br/><br/>';
	}

	if($valor >= 10){
		$notaDez = floor($valor / 10);
		$valor = $valor % 10;
		//echo $notaDez . '<- nota 10<br/>';
		//echo $valor . '< - resto <br/>';
		$msg10 = ($notaDez == 1) ? $notaDez . ' nota de 10' : $notaDez . ' notas de 10';
		//echo '<br/><br/><br/>' . $msg10 . '<br/><br/>';
	}

	if($valor >= 5){
		$nota5 = floor($valor / 5);
		$valor = $valor % 5;
		//echo $nota5 . '<- nota 5<br/>';
		//echo $valor . '< - resto <br/>';
		$msg5 = ($nota5 == 1) ? $nota5 . ' nota de 5' : $nota5 . ' notas de 5';
		//echo '<br/><br/><br/>' . $msg5 . '<br/><br/>';
	}

	if($valor >= 1){
		$nota1 = floor($valor / 1);
		//echo $nota1 . '<- nota 1<br/>';
		$msg1 = ($nota1 == 1) ? $nota1 . ' nota de 1' : $nota1 . ' notas de 1';
		//echo '<br/><br/><br/>' . $msg1 . '<br/><br/>';
	}




if(!empty($msg100) && !empty($msg50) && !empty($msg10) && !empty($msg5) && !empty($msg1)){
	echo "<br>";
	echo "<br>";
	echo $msg100 . ', ' . $msg50. ', ' . $msg10. ', ' . $msg5. ' e ' . $msg1;
	echo "<br>";
	echo "<br>";
} elseif (empty($msg100) && !empty($msg50) && !empty($msg10) && !empty($msg5) && !empty($msg1)){
	echo "<br>";
	echo "<br>";
	echo $msg50. ', ' . $msg10. ', ' . $msg5. ' e ' . $msg1;
	echo "<br>";
	echo "<br>";	
} elseif (!empty($msg100) && empty($msg50) && !empty($msg10) && !empty($msg5) && !empty($msg1)){
	echo "<br>";
	echo "<br>";
	echo $msg100 . ', ' . $msg10. ', ' . $msg5. ' e ' . $msg1;
	echo "<br>";
	echo "<br>";	
} elseif(!empty($msg100) && !empty($msg50) && empty($msg10) && !empty($msg5) && !empty($msg1)){
	echo "<br>";
	echo "<br>";
	echo $msg100 . ', ' . $msg50 . ', ' . $msg5. ' e ' . $msg1;
	echo "<br>";
	echo "<br>"; 
} elseif(!empty($msg100) && !empty($msg50) && !empty($msg10) && empty($msg5) && !empty($msg1)){
	echo "<br>";
	echo "<br>";
	echo $msg100 . ', ' . $msg50. ', ' . $msg10 . ' e ' . $msg1;
	echo "<br>";
	echo "<br>";
} elseif(!empty($msg100) && !empty($msg50) && !empty($msg10) && !empty($msg5) && empty($msg1)){
	echo "<br>";
	echo "<br>";
	echo $msg100 . ', ' . $msg50. ', ' . $msg10. ' e ' . $msg5;
	echo "<br>";
	echo "<br>";
} elseif(empty($msg100) && empty($msg50) && !empty($msg10) && !empty($msg5) && !empty($msg1)){
	echo "<br>";
	echo "<br>";
	echo $msg10. ', ' . $msg5. ' e ' . $msg1;
	echo "<br>";
	echo "<br>";
} elseif(empty($msg100) && !empty($msg50) && empty($msg10) && !empty($msg5) && !empty($msg1)){
	echo "<br>";
	echo "<br>";
	echo $msg50. ', ' . $msg5. ' e ' . $msg1;
	echo "<br>";
	echo "<br>";
} elseif(empty($msg100) && !empty($msg50) && !empty($msg10) && empty($msg5) && !empty($msg1)){
	echo "<br>";
	echo "<br>";
	echo $msg50. ', ' . $msg10. ' e ' . $msg1;
	echo "<br>";
	echo "<br>";
} elseif(empty($msg100) && !empty($msg50) && !empty($msg10) && !empty($msg5) && empty($msg1)){
	echo "<br>";
	echo "<br>";
	echo $msg50. ', ' . $msg10. ' e ' . $msg5;
	echo "<br>";
	echo "<br>";
} elseif(!empty($msg100) && empty($msg50) && empty($msg10) && !empty($msg5) && !empty($msg1)){
	echo "<br>";
	echo "<br>";
	echo $msg100 . ', ' . $msg5. ' e ' . $msg1;
	echo "<br>";
	echo "<br>";
} elseif(!empty($msg100) && empty($msg50) && !empty($msg10) && empty($msg5) && !empty($msg1)){
	echo "<br>";
	echo "<br>";
	echo $msg100 . ', ' . $msg10. ' e ' . $msg1;
	echo "<br>";
	echo "<br>";
}  elseif(!empty($msg100) && empty($msg50) && !empty($msg10) && !empty($msg5) && empty($msg1)){
	echo "<br>";
	echo "<br>";
	echo $msg100 . ', ' . $msg10. ' e ' . $msg5;
	echo "<br>";
	echo "<br>";
} elseif(!empty($msg100) && !empty($msg50) && empty($msg10) && empty($msg5) && !empty($msg1)){
	echo "<br>";
	echo "<br>";
	echo $msg100 . ', ' . $msg50. ' e ' . $msg1;
	echo "<br>";
	echo "<br>";
} elseif(!empty($msg100) && !empty($msg50) && empty($msg10) && !empty($msg5) && empty($msg1)){
	echo "<br>";
	echo "<br>";
	echo $msg100 . ', ' . $msg50. ' e ' . $msg5;
	echo "<br>";
	echo "<br>";
} elseif(!empty($msg100) && !empty($msg50) && !empty($msg10) && empty($msg5) && empty($msg1)){
	echo "<br>";
	echo "<br>";
	echo $msg100 . ', ' . $msg50. ' e ' . $msg10;
	echo "<br>";
	echo "<br>";
} elseif(!empty($msg100) && !empty($msg50) && empty($msg10) && empty($msg5) && empty($msg1)){
	echo "<br>";
	echo "<br>";
	echo $msg100 . ' e ' . $msg50;
	echo "<br>";
	echo "<br>";
} elseif(!empty($msg100) && empty($msg50) && !empty($msg10) && empty($msg5) && empty($msg1)){
	echo "<br>";
	echo "<br>";
	echo $msg100 . ' e ' . $msg10;
	echo "<br>";
	echo "<br>";
} elseif(!empty($msg100) && empty($msg50) && empty($msg10) && !empty($msg5) && empty($msg1)){
	echo "<br>";
	echo "<br>";
	echo $msg100 . ' e ' . $msg5;
	echo "<br>";
	echo "<br>";
} elseif(!empty($msg100) && empty($msg50) && empty($msg10) && empty($msg5) && !empty($msg1)){
	echo "<br>";
	echo "<br>";
	echo $msg100 . ' e ' . $msg1;
	echo "<br>";
	echo "<br>";
} elseif(empty($msg100) && !empty($msg50) && !empty($msg10) && empty($msg5) && empty($msg1)){
	echo "<br>";
	echo "<br>";
	echo $msg50 . ' e ' . $msg10;
	echo "<br>";
	echo "<br>";
} elseif(empty($msg100) && !empty($msg50) && empty($msg10) && !empty($msg5) && empty($msg1)){
	echo "<br>";
	echo "<br>";
	echo $msg50 . ' e ' . $msg5;
	echo "<br>";
	echo "<br>";
} elseif(empty($msg100) && !empty($msg50) && empty($msg10) && empty($msg5) && !empty($msg1)){
	echo "<br>";
	echo "<br>";
	echo $msg50 . ' e ' . $msg1;
	echo "<br>";
	echo "<br>";
} elseif(empty($msg100) && empty($msg50) && !empty($msg10) && !empty($msg5) && empty($msg1)){
	echo "<br>";
	echo "<br>";
	echo $msg10 . ' e ' . $msg5;
	echo "<br>";
	echo "<br>";
} elseif(empty($msg100) && empty($msg50) && !empty($msg10) && empty($msg5) && !empty($msg1)){
	echo "<br>";
	echo "<br>";
	echo $msg10 . ' e ' . $msg1;
	echo "<br>";
	echo "<br>";
} // APARTIR DAKI VAI SER DE 1 SÓ
elseif(!empty($msg100) && empty($msg50) && empty($msg10) && empty($msg5) && empty($msg1)){
	echo "<br>";
	echo "<br>";
	echo $msg100;
	echo "<br>";
	echo "<br>";
} elseif(empty($msg100) && !empty($msg50) && empty($msg10) && empty($msg5) && empty($msg1)){
	echo "<br>";
	echo "<br>";
	echo $msg50;
	echo "<br>";
	echo "<br>";
} elseif(empty($msg100) && empty($msg50) && !empty($msg10) && empty($msg5) && empty($msg1)){
	echo "<br>";
	echo "<br>";
	echo $msg10;
	echo "<br>";
	echo "<br>";
} elseif(empty($msg100) && empty($msg50) && empty($msg10) && !empty($msg5) && empty($msg1)){
	echo "<br>";
	echo "<br>";
	echo $msg5;
	echo "<br>";
	echo "<br>";
} elseif(empty($msg100) && empty($msg50) && empty($msg10) && empty($msg5) && !empty($msg1)){
	echo "<br>";
	echo "<br>";
	echo $msg1;
	echo "<br>";
	echo "<br>";
} 



/*
	$notaCem = (!empty($notaCem) ? $notaCem : 0);
	$notaCin = (!empty($notaCin) ? $notaCin : 0);
	$notaDez = (!empty($notaDez) ? $notaDez : 0);
	$nota5 = (!empty($nota5) ? $nota5 : 0);
	$nota1 = (!empty($nota1) ? $nota1 : 0);

	echo $notaCem . ' notas de 100, ' . $notaCin . ' notas de 50, ' . $notaDez . ' notas de 10, ' . $nota5 . ' notas de 5, ' . $nota1 . ' notas de 1';*/
}



?>

<form method="post" action="">
	<label> Valor do saque: </label> <br/>
	<input type="number" name="num" min="10" max="600">
	<input type="submit">
</form>