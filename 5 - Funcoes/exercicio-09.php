<?php
/*
9 - Reverso do número. Faça uma função que retorne o reverso de um número inteiro informado. Por exemplo: 127 -> 721.
*/

?>

<form method="get">
	<label>Informe um número:</label> <br/>
	<input type="number" name="num">
	<input type="text" disabled value="<?php echo (isset($_GET['num']) ? strrev($_GET['num']) : '' )?>"><br/>
	<input type="submit">
</form>