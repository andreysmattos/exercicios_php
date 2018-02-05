<?php
/*
3 - Nome na vertical. Faça um programa que solicite o nome do usuário e imprima-o na vertical.

    F
    U
    L
    A
    N
    O
*/
function string_vertical($s){


	for($i = 0, $c = strlen($s); $i < $c; $i++){
		echo $s[$i] . "<br/>";
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