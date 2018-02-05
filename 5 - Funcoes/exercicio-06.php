<?php
/*
6 -Faça um programa que converta da notação de 24 horas para a notação de 12 horas. Por exemplo, o programa deve converter 14:25 em 2:25 P.M. A entrada é dada em dois inteiros. Deve haver pelo menos duas funções: uma para fazer a conversão e uma para a saída. Registre a informação A.M./P.M. como um valor ‘A’ para A.M. e ‘P’ para P.M. Assim, a função para efetuar as conversões terá um parâmetro formal para registrar se é A.M. ou P.M. 
*/


function converte_hora($h, $m){
	if($h > 12){
		$h -= 12;
		$t = "P";
	} else {
		$t = "A";
	}
	return [$h,$m, $t];
}

function mostrar_hora_convertida($parametro){
	echo $parametro[0] . ":" . $parametro[1] . " - " . $parametro[2];
}




mostrar_hora_convertida(converte_hora(5,55));

?>