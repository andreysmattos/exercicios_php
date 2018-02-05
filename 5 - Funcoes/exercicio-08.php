<?php
/*
8 - Faça uma função que informe a quantidade de dígitos de um determinado número inteiro informado.
*/

?>



<form mehtod="get">
	<label>Informe um número: </label> <br>
	<input type="number" name="n"> <br/>
	<button type="submit"> Enviar dado </button>
</form>

<?php


$num = filter_input(INPUT_GET, 'n', FILTER_VALIDATE_INT);


function qtd ($num){
	return ($num != 0) ? mb_strlen($num) : "";
}

echo qtd($num);