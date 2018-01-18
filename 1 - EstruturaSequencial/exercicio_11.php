<?php /* 11 - Faça um Programa que peça 2 números inteiros e um número real. Calcule e mostre:
A) o produto do dobro do primeiro com metade do segundo .
B) a soma do triplo do primeiro com o terceiro.
C) o terceiro elevado ao cubo. */?>



<form action="" method="get">
Informe todos os números: <br/>

<input type="text" name="int1" placeholder="Inteiro" value="<?php echo empty($_GET['float']) ? '' : $_GET['int1'];  ?>"> <br/><br/>
<input type="text" name="int2" placeholder="Inteiro" value="<?php echo empty($_GET['float']) ? '' : $_GET['int2'];  ?>"><br/><br/>
<input type="text" name="float" placeholder="Real" value="<?php echo empty($_GET['float']) ? '' : $_GET['float'];  ?>"><br/><br/>
<input type="submit">

<?php
if(!empty($_GET['int1']) && !empty($_GET['int2']) && !empty($_GET['float'])){

	$int1 = (int) $_GET['int1'];
	$int2 = (int) $_GET['int2'];
	$float = (float) $_GET['float'];


	$exA = ($int1 * 2) * ($int2 / 2);
	$exB = ($int1 * 3) + $float;
	$exC = $float ** 3;

	echo '<br/> O produto do dobro do primeiro com metade do segundo é ' . $exA;
	echo '<br/> A soma do triplo do primeiro com o terceiro é ' . $exB;
	echo '<br/> O terceiro elevado ao cubo é ' . $exC;





}


else {
	echo "Você não informou todos os valores";
}

?>
</form>