<?php /* 4 - Faça um Programa que verifique se uma letra digitada é vogal ou consoante. */ ?>

<?php
if(!empty($_GET['letra']) && !is_numeric($_GET['letra']) && strlen($_GET['letra']) == 1){

	$letra = strtolower($_GET['letra']);

	if($letra == 'a' || $letra == 'e' || $letra == 'i' || $letra == 'o' || $letra == 'u'){
		echo "Vogal";
	} else {
		echo "Consoante";
	}
	

}else {
		echo "O valor informado não está correto.";}



?>



<form method="get" action="">
	<input type="text" name="letra" placeholder="Verificar se a letra é vogal.">
	<input type="submit">
</form>