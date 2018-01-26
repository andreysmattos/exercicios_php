<?php
/*
12 - Embaralha palavra. Construa uma função que receba uma string como parâmetro e devolva outra string com os carateres embaralhados. Por exemplo: se função receber a palavra python, pode retornar npthyo, ophtyn ou qualquer outra combinação possível, de forma aleatória. Padronize em sua função que todos os caracteres serão devolvidos em caixa alta ou caixa baixa, independentemente de como foram digitados.
*/



function string_rand($s){
	$aleatorios = [];
	$c = strlen($s); 
	$s = strtolower($s);
	$r = '';

	do {
		$aleatorio = rand(0, $c-1);

		if(array_search($aleatorio, $aleatorios) === false){	
			$aleatorios[] = $aleatorio;
			$r .= $s[$aleatorio];
		}

	} while(count($aleatorios) < $c);
return $r;

}

echo string_rand('andrEy maMtos');


?>