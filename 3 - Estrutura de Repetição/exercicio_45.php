<?php
/* 45 - Desenvolver um programa para verificar a nota do aluno em uma prova com 10 questões, o programa deve perguntar ao aluno a resposta de cada questão e ao final comparar com o gabarito da prova e assim calcular o total de acertos e a nota (atribuir 1 ponto por resposta certa). Após cada aluno utilizar o sistema deve ser feita uma pergunta se outro aluno vai utilizar o sistema. Após todos os alunos terem respondido informar:
Maior e Menor Acerto;
Total de Alunos que utilizaram o sistema;
A Média das Notas da Turma.
Gabarito da Prova:

01 - A
02 - B
03 - C
04 - D
05 - E
06 - E
07 - D
08 - C
09 - B
10 - A

Após concluir isto você poderia incrementar o programa permitindo que o professor digite o gabarito da prova antes dos alunos usarem o programa. */

$host = "localhost";
$user = "root";
$senha = '';
$banco = 'prova';

if($link = mysqli_connect($host,$user,$senha,$banco)){

} else {
	die();
}

$sql = "SELECT max(id) FROM prova ";

$resultado = mysqli_query($link, $sql);
$resultado_row = mysqli_fetch_assoc($resultado);
$aluno = $resultado_row['max(id)'];






?>

<h3> Aluno <?php echo $aluno ?></h3>


<form method="post" action="ex_44_3.php">
	<label>Questão 1 </label> <input type="text" maxlength="1" size="1" name="q1"> <br/>
	<label>Questão 2 </label> <input type="text" maxlength="1" size="1" name="q2"> <br/>
	<label>Questão 3 </label> <input type="text" maxlength="1" size="1" name="q3"> <br/>
	<label>Questão 4 </label> <input type="text" maxlength="1" size="1" name="q4"> <br/>
	<label>Questão 5 </label> <input type="text" maxlength="1" size="1" name="q5"> <br/>
	<label>Questão 6 </label> <input type="text" maxlength="1" size="1" name="q6"> <br/>
	<label>Questão 7 </label> <input type="text" maxlength="1" size="1" name="q7"> <br/>
	<label>Questão 8 </label> <input type="text" maxlength="1" size="1" name="q8"> <br/>
	<label>Questão 9 </label> <input type="text" maxlength="1" size="1" name="q9"> <br/>
	<label>Questão 10 </label> <input type="text" maxlength="1" size="1" name="q10"> <br/>
	<input type="submit" value="Enviar" name="enviar">

	<br>
	<br>

	
</form>

<form method="post" action="ex_44_2.php">
<button type="submit" name="reset"> Restar notas. </button>
</form>


<a href="?dados=1"> Ver informações. </a>

</form>

<form method="post" action="ex_44_4.php">
<button type="submit" name="gab"> Mudar gabarito. </button>
</form>

<?php

if(!empty($_GET['dados']) && $_GET['dados'] == 1 && $aluno > 2){
	$sql_novo = "SELECT max(nota) from prova where id != 1";
	$maior_nota = mysqli_query($link, $sql_novo);
	$maior_nota_row = mysqli_fetch_assoc($maior_nota);

	echo "<br/>";
	echo "A maior nota é: " . $maior_nota_row['max(nota)'];
	echo "<br/>";


	$sql_menor = "SELECT min(nota) from prova where id != 1";
	$menor_nota = mysqli_query($link, $sql_menor);
	$menor_nota_row = mysqli_fetch_assoc($menor_nota);

	echo "<br/>";
	echo "A menor nota é: " . $menor_nota_row['min(nota)'];
	echo "<br/>";
}
?>