<?php /* 8 - Faça um Programa que pergunte quanto você ganha por hora e o número de horas trabalhadas no mês. Calcule e mostre o total do seu salário no referido mês. */  ?>


<form method="post" action=""> 
	<label for="valor">Valor por hora: </label> <input type="number" name="valor" id="valor">
	<label for="hora"> Horas trabalhadas no mês: </label> <input type="number" name="hora" id="hora">
	<input type="submit">
	<?php
		if(!empty($_POST['valor']) && !empty($_POST['hora'])) {
			echo "<br/>" . 'Total do seu salário mensal: ' . $_POST['valor'] * $_POST['hora'];
		}
	?>
</form>