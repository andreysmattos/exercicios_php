<?php /* 31 - O Sr. Manoel Joaquim expandiu seus negócios para além dos negócios de 1,99 e agora possui uma loja de conveniências. Faça um programa que implemente uma caixa registradora rudimentar. O programa deverá receber um número desconhecido de valores referentes aos preços das mercadorias. Um valor zero deve ser informado pelo operador para indicar o final da compra. O programa deve então mostrar o total da compra e perguntar o valor em dinheiro que o cliente forneceu, para então calcular e mostrar o valor do troco. Após esta operação, o programa deverá voltar ao ponto inicial, para registrar a próxima compra. A saída deve ser conforme o exemplo abaixo:
Lojas Tabajara 
Produto 1: R$ 2.20
Produto 2: R$ 5.80
Produto 3: R$ 0
Total: R$ 9.00
Dinheiro: R$ 20.00
Troco: R$ 11.00 */
$qtd = !empty($_GET['qtd']) ? 'none' : 'block';
$quantidade = $_GET['qtd'];
$valor = [];
?>

<form method="get" action="" style="display: <?= $qtd?>">
	<label for="qtd"> Quantidade de produtos: </label>
	<input type="number" name="qtd" id="qtd"> 
	<input type="submit">
</form>



<div style="display: <?= !empty($_GET['qtd']) ? 'block' : 'none'?>">
<form method="post" action="">

<?php
for ($i=1; $i <= $quantidade; $i++) { 
	echo '<label for="p'.$i.'"> Valor '.$i.'º produto: </label>';
	echo '<input type="number" name="p'.$i.'" id="p'.$i.'"> <br/><hr>';
}

?>

<br/><br/>
<label> Dinheiro: </label>
<input type="number" name="dinheiro">
<input type="submit" value="Calcular">
</form>

</div>


<?php
//echo $i;
if(!empty($_POST['p'.($i-1)])){
	for ($i=1; $i <= $quantidade; $i++) { 
	$valor[] = $_POST['p'.$i];

	}
}

$total = array_sum($valor);

if(!empty($total) && !empty($_POST['dinheiro'])){
	//echo "ambos existem";
	$dinheiro = $_POST['dinheiro'];
	if($dinheiro > $total){
		echo "Troco R$: " . ($dinheiro - $total);
	} else{
		echo "Dinheiro insuficiente.";
	}
}




?>


