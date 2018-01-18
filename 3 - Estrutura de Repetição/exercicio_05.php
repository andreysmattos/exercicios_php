<?php /* 5 - Altere o programa anterior permitindo ao usuário informar as populações e as taxas de crescimento iniciais. Valide a entrada e permita repetir a operação. */ ?>


<form method="get" action="">
	<label>Informe a população e a taxa de crescimento da cidade A:</label> <br/>
	<input type="number" name="popA" placeholder="População">
	<input type="text" name="taxaA" placeholder="Taxa de crescimento"><br/><br/><br/>
	<label>Informe a população e a taxa de crescimento da cidade B:</label> <br/>
	<input type="number" name="popB" placeholder="População">
	<input type="text" name="taxaB" placeholder="Taxa de crescimento"><br/>
	<br/><br/>
	<input type="submit" value="					Calcular					">

	




</form>


<?php
if(!empty($_GET['popA']) && !empty($_GET['popB']) && !empty($_GET['taxaA']) && !empty($_GET['taxaB'])){

	$a = $_GET['popA'];
	$b = $_GET['popB'];


	if(is_numeric($_GET['taxaA']) && is_numeric($_GET['taxaB'])){
		$aTaxa =  ($_GET['taxaA'] / 100 );
		$bTaxa = ($_GET['taxaB'] / 100 );

		$i = 0;

		while($a <= $b){
			$a += ($a * $aTaxa);
			$b += ($b * $bTaxa);
			$i++;
		}

		echo '<h4> A ultrapassa ou iguala a população do país B em ' . $i . ' anos.</h4>';
	} else {
		echo "<h4> Informe apenas valores númericos.</h4>";
	}

}





?>





