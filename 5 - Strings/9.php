<?php
//fiz apenas pra treinar ajax
function valida_cpf($cpf){
	if(strlen($cpf) == 14 && $cpf[3] == '.' && $cpf[7] == '.' && $cpf[-3] == '-'){
		return true;
	} else {
		return false;
	}
}

echo (valida_cpf($_POST['cpf'])) ? "É um CPF valido." : "Não é um CPF.";

?>