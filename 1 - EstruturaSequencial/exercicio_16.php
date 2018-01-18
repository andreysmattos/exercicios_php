<?php /* 16 - Faça um programa para uma loja de tintas. O programa deverá pedir o tamanho em metros quadrados da área a ser pintada. Considere que a cobertura da tinta é de 1 litro para cada 3 metros quadrados e que a tinta é vendida em latas de 18 litros, que custam R$ 80,00. Informe ao usuário a quantidades de latas de tinta a serem compradas e o preço total. */?>

<?php

if(!empty($_GET['metros']) && is_numeric($_GET['metros'])){
	$metros = $_GET['metros'];
	$valorTotal = tintas($metros);
}

function tintas($metros, $galao = 18, $metros_por_litro = 3){

	$quantidadeGalao = $metros / ($galao * 3);

	$quantidadeGalao = ceil($quantidadeGalao); // HAHHAHA ESSA FUSÃO É FODAAA, PASSEI TRABALHANDO TENTNADO FAZER SEM ELA.

	$valorTotal = $quantidadeGalao * 80;


	return $valorTotal;

}


?>


<form method="get" action="">

	<label for="metros"> Metros quadrados: </label>
	<br />
	<input type="number" name="metros" id="metros"> 
	<input type="submit" value="Enviar">
	<input type="text" disabled="" value="<?php echo (empty($valorTotal) ? 'R$: 0,00' : 'R$: ' . $valorTotal . ',00');  ?>">
</form>

