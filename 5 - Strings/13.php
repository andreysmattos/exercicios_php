<?php

session_start();
$_SESSION['t'] += 1;

if($_SESSION['t'] >= 6){
	echo "Você perdeu! Atualize a página pra jogar novamente";
	die();
}


echo "Tentativa: " . $_SESSION['t'] . "<br/>";


if(!empty($_POST['tentativa'])){
	if($_POST['palavra'] == $_POST['tentativa']){
		echo "Parabéns você ganhou! Atualize a página pra jogar novamente";
	} else {
		echo "Você ERROU! :( Tente novamente.";
	}
}

?>