<?php /* 42 - Faça um programa que leia uma quantidade indeterminada de números positivos e conte quantos deles estão nos seguintes intervalos: [0-25], [26-50], [51-75] e [76-100]. A entrada de dados deverá terminar quando for lido um número negativo. */ ?>

<form method="get" action="">
<label> Quantidade de números: </label> <br/>
<input type="number" name="qtd"><br/>
<input type="submit">
</form>
<hr>

<?php

if(!empty($_GET['qtd'])){
	echo '<form method="post" action="">';
	$qtd = $_GET['qtd'];

	for ($i=1; $i <= $qtd; $i++) {
		echo '<label> Número '.$i.': </label> <br/>';
		echo '<input type="number" name="num'.$i.'"><br/>';
	}
	echo '<br/>
<input type="submit">
</form>';
}


?>



<?php
$c1 = 0;
$c2 = 0;
$c3 = 0;
$c4 = 0;
if(!empty($_GET['qtd']) && !empty($_POST['num'.($i-1)])){
	foreach ($_POST as $key => $value) {
		//echo $value. "<br/>";

		if($value <= 25){
			$c1 += 1;
		} elseif($value <=50){
			$c2 += 1;
		} elseif($value <=75){
			$c3 += 1;
		} elseif($value <=100){
			$c4 += 1;
		}
	}

	echo "<h4>Entre [0-25]: " . $c1 . '</h4>';
	echo "<h4>Entre [25-50]: " . $c2 . '</h4>';
	echo "<h4>Entre [50-75]: " . $c3 . '</h4>';
	echo "<h4>Entre [75-100]: " . $c4 . '</h4>';
 
}


?>