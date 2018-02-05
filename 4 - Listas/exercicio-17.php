<?php
/*

17 - Em uma competição de salto em distância cada atleta tem direito a cinco saltos. O resultado do atleta será determinado pela média dos cinco valores restantes. Você deve fazer um programa que receba o nome e as cinco distâncias alcançadas pelo atleta em seus saltos e depois informe o nome, os saltos e a média dos saltos. A saída do programa deve ser conforme o exemplo abaixo:

Atleta: Rodrigo Curvêllo
 
Primeiro Salto: 6.5 m
Segundo Salto: 6.1 m
Terceiro Salto: 6.2 m
Quarto Salto: 5.4 m
Quinto Salto: 5.3 m

Resultado final:
Atleta: Rodrigo Curvêllo
Saltos: 6.5 - 6.1 - 6.2 - 5.4 - 5.3
Média dos saltos: 5.9 m
*/

?>


<form method="post">
	<label> Nome: </label> <input type="text" name="nome"> <br/>
	<label>1º Salto:  </label> <input type="number" name="salto[]"> <br/>
	<label>2º Salto:  </label> <input type="number" name="salto[]"> <br/>
	<label>3º Salto:  </label> <input type="number" name="salto[]"> <br/>
	<label>4º Salto:  </label> <input type="number" name="salto[]"> <br/>
	<label>5º Salto:  </label> <input type="number" name="salto[]"> <br/>
	<input type="submit">
</form>


<?php
$aux = 1;
if(isset($_POST['salto'])){
	$media = array_sum($_POST['salto']) / count($_POST['salto']);

	echo ucfirst($_POST['nome']) . "<br><br>";
	foreach($_POST['salto'] as $salto){
		switch($aux){
			case 1:
				echo "Primeiro";
			break;

			case 2:
				echo "Segundo";
			break;

			case 3:
				echo "Terceiro";
			break;

			case 4:
				echo "Quarto";
			break;

			case 5:
				echo "Quinto";
			break;

		}
		echo " salto: " . $salto . "<br/>";
		$aux++;

	}

	echo "<br/>Resultado final:<br/>";
	echo "Atleta: " . ucfirst($_POST['nome']) . '<br/> Saltos: ';
	foreach($_POST['salto'] as $pulo){
		$vir = (end($_POST['salto']) != $pulo) ? ' - ' : '';
		echo $pulo . $vir;
	}
	echo "<br/>Média dos saltos: " . $media . "<br>";
}


?>