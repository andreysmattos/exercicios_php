<?php /*  
26 - Numa eleição existem três candidatos. Faça um programa que peça o número total de eleitores. Peça para cada eleitor votar e ao final mostrar o número de votos de cada candidato. */
	$teste = "none";
	$candidato1 = 0;
	$candidato2 = 0;
	$candidato3 = 0;
?>


<form method="get" action="" style="display:<?php echo ((!empty($_GET['eleitores'])) ? 'none' : 'block')?>;">
<label>Informe a quantidade de eleitores: </label> <br/>
<input type="number" name="eleitores"> <br/>
<input type="submit">
</form>



<div style="display:<?php echo ((!empty($_GET['eleitores'])) ? 'block' : 'none')?>;">

<form method="post" action="">
<h2> Informe os votos:</h2>

<?php
if(!empty($_GET['eleitores'])){
	$eleitores = $_GET['eleitores'];

	for ($i=1; $i <= $eleitores; $i++) { 
		echo "<label for='ele".$i. "'> ".$i. "º Eleitor: </label> ";
			echo "<input type='radio' name='ele".$i. "' value='1'>";
			echo "<input type='radio' name='ele".$i. "' value='2'>";
			echo "<input type='radio' name='ele".$i. "' value='3'>";
		echo "<br/>";
	}
}

?>
<input type="submit">
</form>

</div>


<?php
foreach ($_POST as $key => $value) {
	switch ($value) {
		case '1':
			$candidato1 += 1;
			break;
		
		case '2':
			$candidato2 += 1;
			break;

		case '3':
			$candidato3+= 1;
			break;
	}


}

echo "O primeiro candidato recebeu: " . $candidato1 . " votos.";
echo "<br/>";
echo "O segundo candidato recebeu: " . $candidato2 . " votos.";
echo "<br/>";
echo "O terceiro candidato recebeu: " . $candidato3 . " votos.";

?>

