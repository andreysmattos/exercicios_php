<?php /* 1 - Faça um programa que peça uma nota, entre zero e dez. Mostre uma mensagem caso o valor seja inválido e continue pedindo até que o usuário informe um valor válido. */ ?>




<form method="get" action="">
<label for="num"> Informe um número:</label>
	<br/>
	<input type="number" name="num" id="num">
	<br/>
	<input type="submit"> 
</form>



<?php
if(!empty($_GET['num'])){
	$num = $_GET['num'];

	if($num < 0 || $num > 10){
		echo "<h4>O número digtado está incorreto, favor informe um valor entre ZERO e DEZ.</h4>";
	} else {
		echo "<h4>O número digtado está correto.</h4>";
	}
}

?>