<?php /* 19 - Faça um Programa que leia um número inteiro menor que 1000 e imprima a quantidade de centenas, dezenas e unidades do mesmo.
Observando os termos no plural a colocação do "e", da vírgula entre outros. Exemplo:
326 = 3 centenas, 2 dezenas e 6 unidades
12 = 1 dezena e 2 unidades Testar com: 326, 300, 100, 320, 310,305, 301, 101, 311, 111, 25, 20, 10, 21, 11, 1, 7 e 16 */ 


?>


<form method="get" action="">
<label> Informe um número: </label> <br/>
<input type="number" max="1000" name="num">
<input type="submit">
</form>

<?php
if(!empty($_GET['num'])){
	$num = $_GET['num'];
	$centena = '';
	$dezena = '';
	$unidade = '';

	$msgCentena = '';
	$msgDezena = '';
	$msgUnidade = '';


	if($num > 99){
		$centena = floor($num / 100);
		$num = $num % 100;
		if($centena > 1){
			$msgCentena = ' centenas';
		} elseif ($centena == 1){
			$msgCentena = ' centena';
		} elseif ($centena == 0){
			$msgCentena = '';
		}

	}

	if($num > 9){
		$dezena = floor($num / 10);
		$num = $num % 10;
		if($dezena > 1){
			$msgDezena = ' dezenas';
		} elseif ($dezena == 1){
			$msgDezena = ' dezena';
		} elseif ($dezena == 0){
			$msgDezena = '';
		}
	}

	if($num > -1){
		$unidade = floor($num);
		if($unidade > 1){
			$msgUnidade = ' unidades';
		} elseif ($unidade == 1){
			$msgUnidade = ' unidade';
		} elseif ($unidade == 0){
			$unidade = '';
			$msgUnidade = '';
		}
	}



if(empty($centena) && empty($dezena)){
	echo $unidade . $msgUnidade;
} elseif (empty($centena) && !empty($dezena) && !empty($unidade)) {
	echo $dezena . $msgDezena . ' e ' . $unidade . $msgUnidade;
}  elseif (empty($dezena) && !empty($centena) && !empty($unidade)) {
	echo $centena . $msgCentena . ' e ' . $unidade . $msgUnidade;
} elseif (!empty($centena) && empty($dezena) && empty($unidade)) {
	echo $centena . $msgCentena;
} elseif (empty($centena) && !empty($dezena) && empty($unidade)) {
	echo $dezena . $msgDezena;
} elseif (!empty($centena) && !empty($dezena) && !empty($unidade)) {
	echo $centena . $msgCentena . ', ' . $dezena . $msgDezena . ' e ' . $unidade . $msgUnidade;
} elseif (!empty($centena) && !empty($dezena) && empty($unidade)) {
	echo $centena . $msgCentena . ' e ' . $dezena . $msgDezena;
}






/* echo "<br/>";
echo "<br/>";
echo $centena . $msgCentena;
echo "<br/>";
echo "<br/>";
echo $dezena . $msgDezena;
echo "<br/>";
echo "<br/>";
echo $unidade . $msgUnidade; */


}





?>