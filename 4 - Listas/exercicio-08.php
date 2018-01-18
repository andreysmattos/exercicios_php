<?php
/*
8 - Faça um Programa que peça a idade e a altura de 5 pessoas, armazene cada informação no seu respectivo vetor. Imprima a idade e a altura na ordem inversa a ordem lida.
*/

?>


<form method="post">

	<label> Idade <label> <br/>
	<input type="number" name="idade[]"> <br/>
	<label> Altura <label> <br/>
	<input type="number" name="altura[]">
	<br/>
	<label> Idade <label> <br/>
	<input type="number" name="idade[]"> <br/>
	<label> Altura <label> <br/>
	<input type="number" name="altura[]">
	<br/>
	<label> Idade <label> <br/>
	<input type="number" name="idade[]"> <br/>
	<label> Altura <label> <br/>
	<input type="number" name="altura[]">
	<br/>
	<label> Idade <label> <br/>
	<input type="number" name="idade[]"> <br/>
	<label> Altura <label> <br/>
	<input type="number" name="altura[]">
	<br/>
	<label> Idade <label> <br/>
	<input type="number" name="idade[]"> <br/>
	<label> Altura <label> <br/>
	<input type="number" name="altura[]">
	<br/>

	<input type="submit">
</form>

<hr/>

<?php
if(isset($_POST['altura']) && isset($_POST['idade'])){
	$tot = count($_POST['altura']);

	for($i=0; $i < $tot; $i++){
		echo "Altura: " . $_POST['altura'][$i] . " <br/> Idade: " . $_POST['idade'][$i] . "<hr/>";
	}



}
?>