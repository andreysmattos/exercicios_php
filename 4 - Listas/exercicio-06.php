<?php
/* 

6 - Faça um Programa que peça as quatro notas de 10 alunos, calcule e armazene num vetor a média de cada aluno, imprima o número de alunos com média maior ou igual a 7.0.

*/

?>


<form method="post">
<?php
	for($i = 1; $i <= 10; $i++){
		echo "Aluno ".$i.": <br/>";
		for($j = 1; $j <= 4; $j++){
			echo "<input type='number' name='aluno[$i][$j]'><br/>";
		}
		echo "<hr/>";
	}
?>
<br>
<br>

<hr>
<input type="submit" value="Enviar notas">
</form>

<?php

if(isset($_POST['aluno'])){

	for($i = 1; $i <= 10; $i++){

		$aluno = array_sum($_POST['aluno'][$i]) / count($_POST['aluno'][$i]);
		if($aluno >= 7){
			echo "O Aluno " . $i . " foi aprovado! Nota :" . $aluno . "<br/><br/>";
		}
	}

	

}


?>