<?php /* 18 - Faça um Programa que peça uma data no formato dd/mm/aaaa e determine se a mesma é uma data válida. */

	if(!empty($_GET['date'])){

	$data = explode('-', $_GET['date']);

	if(checkdate($data['1'], $data['2'], $data['0'])){
		$check = "Data valida";
	} else {
		$check = "Data invalida.";
	}
}
?>



<form method="get" action="">
<label for="data">Informe a data: </label>
	<input type="date" name="date" id="date">
	<input type="submit">
	<br/>
	<input type="text" disabled value="<?php echo (!empty($check) ? $check : 'Informe uma data.') ?>">
</form>


