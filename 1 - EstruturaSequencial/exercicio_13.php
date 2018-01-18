<?php /* 13 - Tendo como dados de entrada a altura e o sexo de uma pessoa, construa um algoritmo que calcule seu peso ideal, utilizando as seguintes fórmulas:
Para homens: (72.7*h) - 58
Para mulheres: (62.1*h) - 44.7 (h = altura)
Peça o peso da pessoa e informe se ela está dentro, acima ou abaixo do peso. */ ?>



<form method="get" action="">
<label for="altura">Altura: </label>
<input type="text" name="altura" id="altura"> 
<label for="altura">Sexo: </label>

<select name="sexo">
	<option value="1"> Masculino</option>
	<option value="2"> Feminino</option>

</select>

<input type="submit">
</form>



<?php

if(!empty($_GET['altura']) && !empty($_GET['sexo'])){
	switch ($_GET['sexo']) {
		case 1:
		$pesoIdeal = (72.7 * $_GET['altura']) - 58;
			echo "Seu peso ideal é: " . $pesoIdeal . " kg.";

			break;
		
		case 2:
		$pesoIdeal = (62.1 * $_GET['altura']) - 44.7;
			echo "Seu peso ideal é: " . $pesoIdeal . " kg.";
			break;
	}
}


?>