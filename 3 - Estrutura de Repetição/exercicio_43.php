<?php /* 43 - O cardápio de uma lanchonete é o seguinte:
Especificação   Código  Preço
Cachorro Quente 100     R$ 1,20
Bauru Simples   101     R$ 1,30
Bauru com ovo   102     R$ 1,50
Hambúrguer      103     R$ 1,20
Cheeseburguer   104     R$ 1,30
Refrigerante    105     R$ 1,00
Faça um programa que leia o código dos itens pedidos e as quantidades desejadas. Calcule e mostre o valor a ser pago por item (preço * quantidade) e o total geral do pedido. Considere que o cliente deve informar quando o pedido deve ser encerrado. */


?>

<style type="text/css">
	table, th, td {
    border: 1px solid black;
}
</style>

<table>
<tr>
	<th>Especificação</	th>
	<th>Código</th>
	<th>Preço </th>


</tr>

<tr>
	<th>Cachorro Quente</th>
	<th>100</th>
	<th>R$ 1,20</th>
</tr>

<tr>
	<th>Bauru Simples</th>
	<th>101</th>
	<th>R$ 1,30</th>
</tr>

<tr>
	<th>Bauru com ovo</th>
	<th>102</th>
	<th>R$ 1,50</th>
</tr>

<tr>
	<th>Hambúrguer</th>
	<th>103</th>
	<th>R$ 1,20</th>
</tr>

<tr>
	<th>Cheeseburguer</th>
	<th>104</th>
	<th>R$ 1,30</th>
</tr>

<tr>
	<th>Refrigerante</th>
	<th>105</th>
	<th>R$ 1,00</th>
</tr>

</table>
<br/>
<br/>
<form method="post" action="">
<label> Código do produto: <label> <input type="number" maxlength="3" name="p1" min="100" max="105">  <label> Quantidade: <label><input type="number" value="1" name="q1"><br/>

<input type="submit" value="Calcular total"> 

<br/><br/><br/>



<?php
if(!empty($_POST['p1']) && !empty($_POST['q1'])){
	$produto = $_POST['p1'];
	$quantidade = $_POST['q1'];

	switch ($produto) {
		case 100:
			$valor = $quantidade * 1.2;
			break;
		case 101:
			$valor = $quantidade * 1.3;
			break;
		case 102:
			$valor = $quantidade * 1.5;
			break;
		case 103:
			$valor = $quantidade * 1.2;
			break;
		case 104:
			$valor = $quantidade * 1.3;
			break;
		case 105:
			$valor = $quantidade * 1;
			break;		
		default:
			echo "Código incorreto!";
			break;
	}


	echo "Valor total: R$: " . $valor;
}

?>



