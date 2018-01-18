<?php /* 36 - Desenvolva um programa que faça a tabuada de um número qualquer inteiro que será digitado pelo usuário, mas a tabuada não deve necessariamente iniciar em 1 e terminar em 10, o valor inicial e final devem ser informados também pelo usuário, conforme exemplo abaixo:
Montar a tabuada de: 5
Começar por: 4
Terminar em: 7

Vou montar a tabuada de 5 começando em 4 e terminando em 7:
5 X 4 = 20
5 X 5 = 25
5 X 6 = 30
5 X 7 = 35
Obs: Você deve verificar se o usuário não digitou o final menor que o inicial.
 */ ?>

 <form method="get" action="">
 <label> Montar a tabuada de: </label><br/><input type="number" name="tabuada"> <br/>
 <label> Começar por: </label> <br/><input type="number" name="comeco"> <br/>
 <label>Terminar em: </label> <br/><input type="number" name="fim"> <br/>
 <br/><input type="submit">

 </form>

<?php
if(!empty($_GET['tabuada']) && !empty($_GET['comeco']) && !empty($_GET['fim'])){
	$tabuada = $_GET['tabuada'];
	$comeco = $_GET['comeco'];
	$fim = $_GET['fim'];
	if($comeco < $fim){
		
		for ($comeco; $comeco <= $fim; $comeco++) { 
			echo $comeco . ' X ' . $tabuada . ' = ' . ($comeco * $tabuada) . '<br/>';
		}
	}
}


?>