<?php /* 22 - Faça um Programa que peça um número inteiro e determine se ele é par ou impar. Dica: utilize o operador módulo (resto da divisão).
 */ 

if(!empty($_GET['num'])){
	$num = ($_GET['num'] % 2 == 0) ? "Número informado é PAR." : "Número informado é IMPAR.";
}



?>



 <form method="get" action=""> <br/>
 	<input type="text" readonly="" value="Informe um número:"><br/>
 	<input type="number" name="num"><br/>
 	<input type="submit" style="width: 173px;"><br/>
 	<input type="text" disabled="" value="<?php echo (!empty($_GET['num']) ? $num : "Informe um valor.")?>">
 </form>