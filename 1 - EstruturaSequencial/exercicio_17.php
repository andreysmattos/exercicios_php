<?php /* 17 - Faça um Programa para uma loja de tintas. O programa deverá pedir o tamanho em metros quadrados da área a ser pintada. Considere que a cobertura da tinta é de 1 litro para cada 6 metros quadrados e que a tinta é vendida em latas de 18 litros, que custam R$ 80,00 ou em galões de 3,6 litros, que custam R$ 25,00.
Informe ao usuário as quantidades de tinta a serem compradas e os respectivos preços em 3 situações:
comprar apenas latas de 18 litros;
comprar apenas galões de 3,6 litros;
misturar latas e galões, de forma que o preço seja o menor. Acrescente 10% de folga e sempre arredonde os valores para cima, isto é, considere latas cheias. */ ?>




<?php

if(!empty($_GET['metros']) && is_numeric($_GET['metros'])){
	$metros = ceil($_GET['metros'] * 1.1); // + 10%
	//$valorTotal = tintas($metros);
	$totaltinta = ceil($metros / 6);
	echo $metros . '<br/>';

	echo '<br/>' . "O total de tinta necessário é " . number_format($totaltinta, 2) . ' <br/>';
	echo 'Com latas de 18 litros você irá precisar de ' . latas($metros) . ' latas. Preço: ' . latas($metros) * 80 . '<br/>';
	echo 'Com galões de 3.6 litros você irá precisar de ' . galoes($metros) . ' galões. . Preço: ' . galoes($metros) * 25 . '<br/>';

	echo ((mistura($metros)['galao'] < 4) ? "<br/> Mais economico: <br/> " . mistura($metros)['lata'] . ' Latas de 18 litros e ' .  mistura($metros)['galao'] . ' de 3.6 litros. Preço: ' . ((mistura($metros)['lata'] * 80) + (mistura($metros)['galao'] * 25)) : ' <br/> Mais economico: <br/> Com latas de 18 litros você irá precisar de ' . latas($metros) . ' latas. Preço: ' . latas($metros) * 80 . '<br/>');

}


function latas($metros, $rendimento = 6, $qntd = 18){
	$quantidadeLataTinta = $rendimento * $qntd;
	$quantidadeLatas = ceil($metros / $quantidadeLataTinta);

	return $quantidadeLatas;
}

function galoes($metros, $rendimento = 6, $qntd = 3.6){
	$quantidadegalaoTinta = $rendimento * $qntd;

	$quantidadegalao = ceil($metros / $quantidadegalaoTinta);

	return $quantidadegalao;
	
}

function mistura($metros, $rendimento = 6){
	$quantidadeLataTinta = $rendimento * 18; // 108
	$quantidadeLatas = floor($metros / $quantidadeLataTinta); // 6 //  arredonda o número pra baixo.
	


	$total1 = $metros - ($quantidadeLatas * $quantidadeLataTinta); //84.4
	


	$quantidadegalaoTinta = $rendimento * 3.6; //21.6


	$quantidadegalao = ceil($total1 / $quantidadegalaoTinta); //4
	

	$fim['lata'] = $quantidadeLatas;
	$fim['galao'] = $quantidadegalao;

	return $fim;
	
}


?>




<br/>
<br/>
<br/>
<br/>
<br/>
<br/>
<form method="get" action="">

	<label for="metros"> Metros quadrados: </label>
	<br />
	<input type="number" name="metros" id="metros"> 
	<input type="submit" value="Enviar">
	<input type="text" disabled="" value="<?php echo (empty($valorTotal) ? 'R$: 0,00' : 'R$: ' . $valorTotal . ',00');  ?>">
</form>
