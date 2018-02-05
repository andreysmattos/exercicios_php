<?php
/*
5 - Nome na vertical em escada invertida. Altere o programa anterior de modo que a escada seja invertida.

    FULANO
    FULAN
    FULA
    FUL
    FU
    F
 */



function string_escada($s){
	//5 - 4 - 3 - 2 - 1 - 0	
	for($i = strlen($s)-1; $i >= 0; $i--){
		//5 
		for($j = 0; $j <= $i; $j++){
			echo $s[$j];
		}
		echo "<br/>";
	}
}

?>

<form method="get">
	<label>Nome </label> <br/>
	<input type="text" name="string"> <br/>
	<input type="submit">
</form>

<?php
if(!empty($_GET['string'])){
	$s = filter_input(INPUT_GET, 'string', FILTER_SANITIZE_SPECIAL_CHARS);
	string_escada($s);
}
