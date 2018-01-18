<?php /* 12 - Desenvolva um gerador de tabuada, capaz de gerar a tabuada de qualquer número inteiro entre 1 a 10. O usuário deve informar de qual numero ele deseja ver a tabuada. A saída deve ser conforme o exemplo abaixo:
Tabuada de 5:
5 X 1 = 5
5 X 2 = 10
...
5 X 10 = 50 */ ?>


<form method="get" action="">
	<label> Informe o número: </label><br>
	<input type="number" name="num1"> <br/>
	<input type="submit">
</form>


<?php
if(!empty($_GET['num1'])){
	$num1 = $_GET['num1'];


	for ($i=1; $i <= 10; $i++) { 
		echo $i . ' x ' . $num1 . ' = ' . $i * $num1 . '<br/>';
	}		
}

?>