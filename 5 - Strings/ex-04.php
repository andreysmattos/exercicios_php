<?php
/*
4 - Nome na vertical em escada. Modifique o programa anterior de forma a mostrar o nome em formato de escada.

    F
    FU
    FUL
    FULA
    FULAN
    FULANO
*/

function string_vertical($s){


	for($i = 0, $c = strlen($s); $i < $c; $i++){
		for($j = 0; $j <= $i; $j++){
			echo $s[$j];
		}
		echo "<br/>";
	}
}

?>

<form method="get">
	<label> Nome </label> <br/>
	<input type="text" name="s">
	<br/>
	<input type="submit">
</form>

<?php
if(!empty($_GET['s'])){
	$s = filter_input(INPUT_GET, 's', FILTER_SANITIZE_SPECIAL_CHARS);
	string_vertical($s);
}