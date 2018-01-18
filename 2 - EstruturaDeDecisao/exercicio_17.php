<?php /* 17 - Faça um Programa que peça um número correspondente a um determinado ano e em seguida informe se este ano é ou não bissexto. */

if(!empty($_GET['ano'])){
	$ano = $_GET['ano'];
	$bi = "Não é bissexto";

	if(($ano % 4 == 0) && ($ano % 100 != 0 || ($ano % 400 == 0))){
		$bi = "É bissexto";
	}
}



?>


<form method="get" action="">
<label for="ano"> Ano: </label>
<input type="number" name="ano" id="ano"> 
<input type="submit"> <br/>
<input type="text" disabled="" value="<?php echo (!empty($bi) ? $bi : "");?>">



</form>