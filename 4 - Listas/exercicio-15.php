<?php
/*
15 - Faça um programa que leia um número indeterminado de valores, correspondentes a notas. Após esta entrada de dados, faça:

    Mostre a quantidade de valores que foram lidos;
    Exiba todos os valores na ordem em que foram informados, um ao lado do outro;
    Exiba todos os valores na ordem inversa à que foram informados, um abaixo do outro;
    Calcule e mostre a soma dos valores;
    Calcule e mostre a média dos valores;
    Calcule e mostre a quantidade de valores acima da média calculada;
    Calcule e mostre a quantidade de valores abaixo de sete;
    Encerre o programa com uma mensagem; 

*/

    ?>

    <form method="get" style="display: block;">
    	<label> Quantidade de campos</label> <br/>
    	<input type="number" name="qtd">
    	<input type="submit">
    </form>

    <form method="post">
    	<?php
    	if(!empty($_GET['qtd'])){
    		for($i = 1; $i <= $_GET['qtd']; $i++){

    			?>

    			<input type="number" name="valor[]"> <br>

    			<?php
	}//fim do for

	echo '<input type="submit"> </form>';
}


if(isset($_POST['valor'])){
	$medias = [];
	echo "Quantidade de valores: " . count($_POST['valor']) . "<br/>";
	$media = array_sum($_POST['valor']) / count($_POST['valor']);
	$b7 = [];

	foreach($_POST['valor'] as $value){
		$vir = (end($_POST['valor']) != $value) ? ", " : '<br/>';
		echo $value . $vir;
		if($value > $media){
			$medias [] = $value;
		}
		if($value < 7){
			$b7[]=$value;
		}
	}

	echo "A soma dos valores: " . array_sum($_POST['valor']) . "<br>";

	echo "A média dos valores: " . $media . "<br>";

	echo "Quantidade de valores acima da média: " . count($medias) . "<br/>";

	echo "Valores acima da média: <br/>";

	foreach($medias as $key=>$value){
		$vir = (end($medias) != $value) ? ", " : '<br/>';
		echo ($key + 1) . " - " . $value . "<br/>";
	}

	echo "Quantidade de valores abaixo de 7: " . count($b7) . "</br>";
	echo "Valores abaixo de 7: <br/>"; 
	



	if(is_array($b7)){
		foreach($b7 as $key=>$value){
			$vir = (end($b7) != $value) ? ", " : '<br/>';
			echo ($key + 1) . " - " . $value . $vir . "<br/>";

		}
	} else {
		echo $b7 . "<br/>";
	}

	
	echo "<hr> Programa encerrado.";
}

?>

