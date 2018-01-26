<?php
/*
13 - Desenha moldura. Construa uma função que desenhe um retângulo usando os caracteres ‘+’ , ‘−’ e ‘| ‘. Esta função deve receber dois parâmetros, linhas e colunas, sendo que o valor por omissão é o valor mínimo igual a 1 e o valor máximo é 20. Se valores fora da faixa forem informados, eles devem ser modificados para valores dentro da faixa de forma elegante.
*/

function retangulo($linha = 1, $coluna = 1){
	echo "+";
	$l = '';
	for($i=1; $i <= $coluna; $i++){
		$l .= "−";
	}
	echo $l . "+<br/>";


	for($j = 1; $j <= $linha; $j++){
		echo " | " . $l . " |<br/>";
	}

	echo "+" . $l . "+";


}
retangulo(20,2);

?>