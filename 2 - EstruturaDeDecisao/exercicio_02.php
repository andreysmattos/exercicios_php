<?php /* 2 - Faça um Programa que peça um valor e mostre na tela se o valor é positivo ou negativo. */ ?>


<?php
if(!empty($_POST['num'])){
	$num = ($_POST['num'] > 0) ? 'Positivo' : 'Negativo';
}

?>


<form method="post" action="">
<input type="number" placeholder="Valor" name="num"> <br/>
<input type="submit" value="               Verificar              "><br/>
<input type="text" disabled="" value="<?php echo (empty($num) ? 'Informe um valor.' : $num);?>">
</form>