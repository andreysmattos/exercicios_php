<?php /* 27 - Uma fruteira está vendendo frutas com a seguinte tabela de preços:
                      Até 5 Kg           Acima de 5 Kg
Morango         R$ 2,50 por Kg          R$ 2,20 por Kg
Maçã            R$ 1,80 por Kg          R$ 1,50 por Kg
Se o cliente comprar mais de 8 Kg em frutas ou o valor total da compra ultrapassar R$ 25,00, receberá ainda um desconto de 10% sobre este total. Escreva um algoritmo para ler a quantidade (em Kg) de morangos e a quantidade (em Kg) de maças adquiridas e escreva o valor a ser pago pelo cliente. */ ?>


<form method="post" action="">
	<label> Quantidades: </label> <br/>
	<label> Maça (em Kg):</label> <br/>
	<input type="number" name="maca" value="0"> <br/>
	<label> Morango (em Kg):</label> <br/>
	<input type="number" name="morango" value="0"> <br/>
<br/>
	<input type="submit" value="Calcular preço">

</form>


<?php
if(isset($_POST['maca']) && isset($_POST['morango'])){
	$maca = $_POST['maca'];
	$morango = $_POST['morango'];
	$totalkg = $maca + $morango;

	if($morango < 5){
		$valormorango = $morango * 2.50;
	} else {
		$valormorango = $morango * 2.20;
	}


	if($maca < 5){
		$valormaca = $maca * 1.80;
	} else {
		$valormaca = $maca * 1.50;
	}

	$totalvalor = $valormaca + $valormorango;

	if($totalvalor >= 25 || $totalkg >= 8){
		$totalvalor -= ($totalvalor * 0.10);
	}
}
?>


<textarea rows="5" cols="30">
Carrinho de compras
<?php echo $maca; ?> Maças
<?php echo $morango; ?> Morangos
Valor total: <?php echo 'R$: ' . $totalvalor; ?>


</textarea>