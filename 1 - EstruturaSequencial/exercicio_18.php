<?php /* 18 - Faça um programa que peça o tamanho de um arquivo para download (em MB) e a velocidade de um link de Internet (em Mbps), calcule e informe o tempo aproximado de download do arquivo usando este link (em minutos). */ ?>



<form method="get" action="">
		<label for="arq"> Tamanho: </label>
		<input type="number" name="arq" id="arq" placeholder="MBs">
		<label for="vel"> Velocidade: </label>
		<input type="number" name="vel" id="vel" placeholder="MBs">
		<input type="submit" value="Calcular">
</form>


<?php

if(!empty($_GET['arq']) and !empty($_GET['vel'])){

	$tempo = ($_GET['arq'] * 1024 * 8) / ($_GET['vel'] * 1024) / 60;

	echo number_format($tempo,2) . ' minutos.';

}


?>