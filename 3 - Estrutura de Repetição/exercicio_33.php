<?php /* 33 - O Departamento Estadual de Meteorologia lhe contratou para desenvolver um programa que leia as um conjunto indeterminado de temperaturas, e informe ao final a menor e a maior temperaturas informadas, bem como a média das temperaturas. */$dsp = "block";
	$lista = []; 
if(!empty($_GET['qtd'])){
	$dsp = "none";
}

?>

<form method="get" action="" style="display: <?= $dsp?>;">
	<label for="qtd"> Informe a quantidade de temperaturas:</label><br/>
	<input type="number" name="qtd" id="qtd"> <input type="submit">
</form>


<form method="post" action="" style="display: <?= (!empty($_GET['qtd']) ? 'block' : 'none')?>">
<?php
if(!empty($_GET['qtd'])){
	for ($i=1; $i <= $_GET['qtd']; $i++) { 
		echo '<input type="number" name="num'.$i.'" placeholder="Temperaturas">';
		echo "<br/>";
		echo "<br/>";
	}
}

?>

<input type="submit">

</form>
<h4>
<?php
if(!empty($_POST['num'.($i-1)])){
	for ($i=1; $i <= $_GET['qtd']; $i++) {
		$lista[] = $_POST["num".$i];

	}

	$media = array_sum($lista) / count($lista);
	$maior = max($lista);
	$menor = min($lista);
	echo "A media das temperaturas é " . $media . '<br/>';
	echo "A maior temperatura registrada é " . $maior . '<br/>';
	echo "A menor temperatura registrada é " . $menor . '<br/>';

	// print_r($lista);
}


?>
</h4>

