<?php
/* 
48 - Faça um programa que peça um numero inteiro positivo e em seguida mostre este numero invertido.
Exemplo:
  12376489
  => 98467321
  */


?>



<form method="get">
	<label> Informe um número:</label><br/>
	<input type="number" name="num"><br/>
	<button type="submit"> Enviar</button>
</form>


<?php

function inverter($numero){
	$total = strlen($numero);

	for($i = $total; $i >= 1; $i--){
		echo $numero[$i-1];
	}
}

inverter($_GET['num']);

?>