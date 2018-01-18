<?php /* 8 - Faça um programa que pergunte o preço de três produtos e informe qual produto você deve comprar, sabendo que a decisão é sempre pelo mais barato. */ 

if(!empty($_GET['p1']) && !empty($_GET['p2']) && !empty($_GET['p3'])){
	$produtos = array();
	array_push($produtos, $_GET['p1']);
	array_push($produtos, $_GET['p2']);
	array_push($produtos, $_GET['p3']);
}
?>
<form method="get" action="">

<label> Produto 1: </label> <input type="number" name="p1"> <br/>
<label> Produto 2: </label> <input type="number" name="p2"><br/>
<label> Produto 3: </label> <input type="number" name="p3"><br/>
<input type="submit" name=""><br/>
<label> Produto mais barato: </label><input type="text" readonly="" value="<?php echo (empty($produtos) ? '' : min($produtos));?>">
</form>

