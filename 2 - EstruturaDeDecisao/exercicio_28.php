<?php /* 28 - 
                      Até 5 Kg           Acima de 5 Kg
File Duplo      R$ 4,90 por Kg          R$ 5,80 por Kg
Alcatra         R$ 5,90 por Kg          R$ 6,80 por Kg
Picanha         R$ 6,90 por Kg          R$ 7,80 por Kg
Para atender a todos os clientes, cada cliente poderá levar apenas um dos tipos de carne da promoção, porém não há limites para a quantidade de carne por cliente. Se compra for feita no cartão Tabajara o cliente receberá ainda um desconto de 5% sobre o total a compra. Escreva um programa que peça o tipo e a quantidade de carne comprada pelo usuário e gere um cupom fiscal, contendo as informações da compra: tipo e quantidade de carne, preço total, tipo de pagamento, valor do desconto e valor a pagar. */ ?>


<h2><center> O Hipermercado Tabajara está com uma promoção de carnes que é imperdível. Confira: </center></h2>

<center>
	<textarea readonly="" cols="60" rows="5">
 		Até 5 Kg                Acima de 5 Kg
File Duplo      R$ 4,90 por Kg          R$ 5,80 por Kg
Alcatra         R$ 5,90 por Kg          R$ 6,80 por Kg
Picanha         R$ 6,90 por Kg          R$ 7,80 por Kg</textarea>



</center>

<h4> Apenas um tipo de carne por cliente.</h4>

<form method="post" action="">
	<label>Escolha o tipo de carne: </label> <br/>
	<select name="tipo">
		<option value="1">File Duplo </option>
		<option value="2">Alcatra </option>
		<option value="3">Picanha </option>
	</select><br/><br/>
<label>Quantidade: </label><br/>
<input type="number" name="number">

<br/><br/>

<label>Forma de pagamento: </label><br/>
<input type="radio" name="pag" value="1"> Dinheiro <br/>
<input type="radio" name="pag" value="2"> Cartão Tabajara <br/>
<br/><br/><br/>
<input type="submit" value="Finalizar compra">
</form>

<?php
if(!empty($_POST['number']) && isset($_POST['pag'])){
	$quantidade = $_POST['number'];

	switch ($_POST['tipo']) {
		case '1':
			$carne = 'File Duplo';
			if($quantidade >= 5){
				$valortotal = $quantidade * 5.80;
			} else {
				$valortotal = $quantidade * 4.90;
			}
			break;

		case '2':
			$carne = 'Alcatra';
			if($quantidade >= 5){
				$valortotal = $quantidade * 6.80;
			} else {
				$valortotal = $quantidade * 5.90;
			}
			break;

		case '3':
			$carne = 'Picanha';
			if($quantidade >= 5){
				$valortotal = $quantidade * 7.80;
			} else {
				$valortotal = $quantidade * 6.90;
			}
			break;
	}

	if($_POST['pag'] == '2'){
		$valortotal -= ($valortotal * 0.05);
		//5% de desconto no cartão
	} 
}


?>

<!-- tipo e quantidade de carne, preço total, tipo de pagamento, valor do desconto e valor a pagar. -->
<div style="display: <?php echo (!empty($_POST['number']) && isset($_POST['pag']) ? 'block' : 'none')?>;">
<center> <h3>Nota fiscal</h3>
<textarea cols="80" rows="10" disabled="">______________________________________________________________________________
Nota Fiscal
______________________________________________________________________________

<?php echo "Carne: " . $carne . '.'; ?>

<?php echo "Quantidade: " . $quantidade . 'KG.'; ?>

<?php echo "Preço total: R$: " . $valortotal; ?>

<?php echo "Tipo de pagamento:  "; ?>
<?php echo (($_POST['pag'] == 2) ? 'Cartão Tabajara com 5% de desconto.' : 'Dinheiro');?>
</textarea>
</center>

</div>