<?php
/* 47 - Em uma competição de ginástica, cada atleta recebe votos de sete jurados. A melhor e a pior nota são eliminadas. A sua nota fica sendo a média dos votos restantes. Você deve fazer um programa que receba o nome do ginasta e as notas dos sete jurados alcançadas pelo atleta em sua apresentação e depois informe a sua média, conforme a descrição acima informada (retirar o melhor e o pior salto e depois calcular a média com as notas restantes). As notas não são informados ordenadas. Um exemplo de saída do programa deve ser conforme o exemplo abaixo:
Atleta: Aparecido Parente
Nota: 9.9
Nota: 7.5
Nota: 9.5
Nota: 8.5
Nota: 9.0
Nota: 8.5
Nota: 9.7

Resultado final:
Atleta: Aparecido Parente
Melhor nota: 9.9
Pior nota: 7.5
Média: 9,04

*/
require_once 'ex_47.class.php';
?>



	

	<form method="post">
		<label> Nome: </label> <br/>
	<input type="text" name="nome"> <br/><br/>
	<label>Nota 1</label> <input type="number" name="nota[]"> <br/>
	<label>Nota 2</label> <input type="number" name="nota[]"> <br/>
	<label>Nota 3</label> <input type="number" name="nota[]"> <br/>
	<label>Nota 4</label> <input type="number" name="nota[]"> <br/>
	<label>Nota 5</label> <input type="number" name="nota[]"> <br/>
	<label>Nota 6</label> <input type="number" name="nota[]"> <br/>
	<label>Nota 7</label> <input type="number" name="nota[]"> <br/>

	<input type="submit">
</form>

<pre>
<?php
//print_r($_POST);
if(!empty($_POST['nome']) && !empty($_POST['nota'])){
	$nome = filter_input(INPUT_POST, 'nome');

	$nota = $_POST['nota'];



	$atleta = new Atleta($nome, $nota);


	$atleta->mostrarNome();
	$atleta->mostrarNotas();


	$atleta->resultado();
}

?>
</pre>