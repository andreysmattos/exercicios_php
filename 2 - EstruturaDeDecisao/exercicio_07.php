<?php /* 7 - Faça um Programa que leia três números e mostre o maior e o menor deles. */ ?>


<?php

$maior = array();

if(!empty($_POST['num']) && is_numeric($_POST['num']) && strlen($_POST['num']) == 3){
	$num = $_POST['num'];

	for ($i=0; $i < 3; $i++) {
		array_push($maior, $num[$i]);
		

	}

	//echo max($maior);
	//var_dump($maior);





} elseif(!empty($_POST['num']) && strlen($_POST['num']) != 3) {
	echo "O valor informado está incorreto. Digite apenas TRÊS valores.";
}


?>



<form method="post" action="">
	<label for="num"> Digite três números</label>
	<input type="number" name="num" id="num">
	<input type="submit" value="Verificar">
</form>


<?php

echo (empty($maior) ? '' : "O maior valor é: " . max($maior));

echo "<br/>";

echo (empty($maior) ? '' : "O menor valor é: " . min($maior));

?>