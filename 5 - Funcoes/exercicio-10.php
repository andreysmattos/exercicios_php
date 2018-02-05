<?php

/*
10 - Jogo de Craps. Faça um programa de implemente um jogo de Craps. O jogador lança um par de dados, obtendo um valor entre 2 e 12. Se, na primeira jogada, você tirar 7 ou 11, você um "natural" e ganhou. Se você tirar 2, 3 ou 12 na primeira jogada, isto é chamado de "craps" e você perdeu. Se, na primeira jogada, você fez um 4, 5, 6, 8, 9 ou 10,este é seu "Ponto". Seu objetivo agora é continuar jogando os dados até tirar este número novamente. Você perde, no entanto, se tirar um 7 antes de tirar este Ponto novamente.
*/


$c = 0;
function jogar($c = null){
	$d1 = rand(1,6);
	$d2 = rand(1,6);

	$valor = $d1 + $d2;

	switch($valor){
		case 7:
			return true;
		break;

		case 11:
			return true;
		break;

		case 2:
			return false;
		break;

		case 3:
			return false;
		break;

		case 12:
			return false;
		break;

		default:
			$c +=1;
			jogar($c);
			echo "Dado 1: " . $d1 . "<br/>" . "Dado 2: " . $d2 . "<br/> Valor: " . $valor . "<br/> Tentaiva: " . $c ."<hr>";
 		break;

	}
}

?>



<form method="get">
<button type="submit" value="1" name="btn"> Jogar </button>
</form>

<?ph
pecho (jogar()) ? "<hr> <h4>Você VENCEU!</h4><hr>" : "<hr> <h4>Você PERDEU!</h4><hr>";
