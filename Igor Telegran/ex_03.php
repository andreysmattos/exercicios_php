<!-- Informe o sistema operacional do seu celular. caso seja windows imprimir "fabricante microsoft", caso seja ios imprimir "fabricante apple" e caso não seja nenhuma das duas imprimir "fabricante google" -->

<form method="get">
<label for="celular"> Informe o Sistema Operacional do celular:  </label> <br/>
<input type="text" name="celular" placeholder="S.O celular" id="celular">
<button type="submit"> Confirmar</button>
</form>



<?php

switch ($_GET['celular']) {
	case 'windows':
		echo "Fabricante Microsoft.";
		break;

	case 'ios':
		echo "Fabricante Apple.";
		break;
	
	default:
		echo "Fabricante Google.";
		break;
}



?>