<?php /* 40 - Foi feita uma estatística em cinco cidades brasileiras para coletar dados sobre acidentes de trânsito. Foram obtidos os seguintes dados:
Código da cidade;
Número de veículos de passeio (em 1999);
Número de acidentes de trânsito com vítimas (em 1999). Deseja-se saber:
Qual o maior e menor índice de acidentes de transito e a que cidade pertence;
Qual a média de veículos nas cinco cidades juntas;
Qual a média de acidentes de trânsito nas cidades com menos de 2.000 veículos de passeio. */ ?>


<form method="post" action="">
<?php
	for ($i=1; $i <= 5; $i++) { 
	
	echo '<br/><label> Código da cidade: </label>';
		echo '<input type="text" name="codigo'.$i.'"> <br/>';

	echo '<label> Número de veículos de passeio: </label>';
		echo '<input type="text" name="veiculos'.$i.'"><br/>';

	echo '<label> Número de acidentes de trânsito com vítimas: </label>';
		echo '<input type="text" name="acidentes'.$i.'"><br/><br/> <hr>';
	}
?>
<input type="submit">
</form>


<?php
$codigo = [];
$veiculos = [];
$acidentes = [];
$lista = [];
$medialista = [];

if(!empty($_POST['codigo1']) && !empty($_POST['veiculos1']) && !empty($_POST['acidentes1']) && !empty($_POST['codigo2']) && !empty($_POST['veiculos2']) && !empty($_POST['acidentes2']) && !empty($_POST['codigo3']) && !empty($_POST['veiculos3']) && !empty($_POST['acidentes3']) && !empty($_POST['codigo4']) && !empty($_POST['veiculos4']) && !empty($_POST['acidentes4']) && !empty($_POST['codigo5']) && !empty($_POST['veiculos5']) && !empty($_POST['acidentes5'])){
	//echo "teste";

	for ($i=1; $i <= 5; $i++) {
		$codigo[] = $_POST['codigo'.$i];
		$veiculos[] = $_POST['veiculos'.$i];
		$acidentes[] = $_POST['acidentes'.$i];

	}

$maior = max($acidentes);
$menor = min($acidentes);
$keyMaior = array_search($maior, $acidentes);
$keyMenor = array_search($menor, $acidentes);

$cidadeMaior = $codigo[$keyMaior];
$cidadeMenor = $codigo[$keyMenor];

$media = array_sum($veiculos) / count($veiculos);


echo "<h4>O maior e menor índice de acidentes de transito e a que cidade pertence: <br/>";
echo " Maior: $maior . Cidade: $cidadeMaior <br/> Menor: $menor . Cidade: $cidadeMenor</h4>";




echo "<h4>A média de veículos nas cinco cidades juntas: $media</h4>";

echo "<br/>";

	for ($i=0; $i <= 4; $i++) {
		if($veiculos[$i] < 2000){
			//echo $veiculos[$i] . "<br>";
			$lista [] = array_search($veiculos[$i], $veiculos);
		}



	}


	foreach ($lista as $key => $value) {
		$medialista[] = $acidentes[$value];

	}

	$mediaFim = array_sum($medialista) / count($medialista);

	echo "<h4>A média de acidentes de trânsito nas cidades com menos de 2.000 veículos de passeio: $mediaFim</h4>";

echo "<br/>";

}
?>