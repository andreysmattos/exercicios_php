<?php

/* 3 - Faça um Programa que leia 4 notas, mostre as notas e a média na tela. */

?>


<form method="post">

	<label> Nota 1: </label> <br/>
	<input type="number" name="notas[]"> <br/>
	<label> Nota 2: </label> <br/>
	<input type="number" name="notas[]"> <br/>
	<label> Nota 3: </label> <br/>
	<input type="number" name="notas[]"> <br/>
	<label> Nota 4: </label> <br/>
	<input type="number" name="notas[]"> <br/>

	<input type="submit">

</form>


<?php

if(isset($_POST['notas'])){

	$media = array_sum($_POST['notas']) / count($_POST['notas']);

	foreach($_POST['notas'] as $key => $nota){
		echo "Nota " . ($key +1) .": " . $nota . "<br/>";
	}

	echo "Média: " . $media; 

}



?>