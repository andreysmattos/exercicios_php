<?php /* 39 - Faça um programa que leia dez conjuntos de dois valores, o primeiro representando o número do aluno e o segundo representando a sua altura em centímetros. Encontre o aluno mais alto e o mais baixo. Mostre o número do aluno mais alto e o número do aluno mais baixo, junto com suas alturas. */?>



<form method="post">
<?php
for ($i=1; $i <= 10; $i++) { 
	echo "<label> Numéro do ".$i."º aluno :</label>";
	echo '<input type="number" name="num'.$i.'"> <br/>';
	echo "<label>Altura do ".$i."º aluno :</label>";
	echo '<input type="number" name="altura'.$i.'"> <br/><br/> <hr>';
}

?>

<input type="submit">
</form>


<?php
$lista= [];
$lista2 = [];

if(!empty($_POST['altura1']) && !empty($_POST['num1']) && !empty($_POST['altura2']) && !empty($_POST['num2']) && !empty($_POST['altura3']) && !empty($_POST['num3']) && !empty($_POST['altura4']) && !empty($_POST['num4']) && !empty($_POST['altura5']) && !empty($_POST['num5']) && !empty($_POST['altura6']) && !empty($_POST['num6']) && !empty($_POST['altura7']) && !empty($_POST['num7']) && !empty($_POST['altura8']) && !empty($_POST['num8']) && !empty($_POST['altura9']) && !empty($_POST['num9']) && !empty($_POST['altura10']) && !empty($_POST['num10'])){
	
	for ($i=1; $i <= 10; $i++) {

		$lista[] = $_POST['num'.$i];
		$lista2[] = $_POST['altura'.$i];
	
	}
	

	$maior = max($lista2);
	$menor = min($lista2);

	echo "Maior: ";
	
	$keyMaior = array_search($maior, $lista2);
	echo "Número do maior aluno: " . $lista[$keyMaior];
	echo "<br/><br/>Menor: ";
	$keyMenor = array_search($menor, $lista2);
	echo "Número do menor aluno: " . $lista[$keyMenor];
	


}


