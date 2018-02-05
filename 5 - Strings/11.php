<?php
session_start();
$palavra = filter_input(INPUT_POST, 'palavra', FILTER_SANITIZE_SPECIAL_CHARS);
$letra = strtolower(filter_input(INPUT_POST, 'letra', FILTER_SANITIZE_SPECIAL_CHARS));






if($_SESSION['tentativa'] > 6){
	echo "Você perdeu. Atualize a página pra tentar novamente. <br/> A palavra era: ". $palavra;
	die();
} else {
	echo "Tentaiva:" . $_SESSION['tentativa'] . "<br/>";
	$_SESSION['tentativa'] += 1;

}


if(strlen($letra) == 1){

	for($i = 0, $qtd = strlen($palavra); $i < $qtd; $i++){

		if(in_array($palavra[$i], $_SESSION['letras'])){
				foreach($_SESSION['letras'] as $l){
					echo ($l == $palavra[$i]) ? $l : "";
				}
		
		} elseif($letra == $palavra[$i]){
				echo $letra;
				if(!(in_array($letra, $_SESSION['letras']))){
					$_SESSION['letras'][] = $letra;
				}

		}



		 else {
			echo " _ ";
		}
	}
}
echo "<br/>";
//print_r($_SESSION['letras']);
?>
<br/>
<form method="get">
	<input type="text" name="tenta" placeholder="Uma tentativa apenas"> <br/>
	<input type="submit">
</form>