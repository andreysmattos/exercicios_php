<?php
$host = "localhost";
$user = "root";
$senha = '';
$banco = 'prova';
$nota = 0;

if($link = mysqli_connect($host,$user,$senha,$banco)){

} else {
	die();
}

if(isset($_POST['gab'])){
	
	$sql = "SELECT * from prova where id = 1";
	$resultado = mysqli_query($link, $sql);

	$resultado_row = mysqli_fetch_assoc($resultado);

	//print_r($resultado_row);


?>


<form method="post" action="">
	<label>Questão 1 </label> <input type="text" maxlength="1" size="1" name="q1" value="<?php echo $resultado_row['q1'];?>"> <br/>
	<label>Questão 2 </label> <input type="text" maxlength="1" size="1" name="q2" value="<?php echo $resultado_row['q2'];?>"> <br/>
	<label>Questão 3 </label> <input type="text" maxlength="1" size="1" name="q3" value="<?php echo $resultado_row['q3'];?>"> <br/>
	<label>Questão 4 </label> <input type="text" maxlength="1" size="1" name="q4" value="<?php echo $resultado_row['q4'];?>"> <br/>
	<label>Questão 5 </label> <input type="text" maxlength="1" size="1" name="q5" value="<?php echo $resultado_row['q5'];?>"> <br/>
	<label>Questão 6 </label> <input type="text" maxlength="1" size="1" name="q6" value="<?php echo $resultado_row['q6'];?>"> <br/>
	<label>Questão 7 </label> <input type="text" maxlength="1" size="1" name="q7" value="<?php echo $resultado_row['q7'];?>"> <br/>
	<label>Questão 8 </label> <input type="text" maxlength="1" size="1" name="q8" value="<?php echo $resultado_row['q8'];?>"> <br/>
	<label>Questão 9 </label> <input type="text" maxlength="1" size="1" name="q9" value="<?php echo $resultado_row['q9'];?>"> <br/>
	<label>Questão 10 </label> <input type="text" maxlength="1" size="1" name="q10" value="<?php echo $resultado_row['q10'];?>"> <br/>
	<input type="submit" value="Enviar" name="enviar2">

	<br>
	<br>

	
</form>


<?php




} 


if(!empty($_POST['enviar2'])){

	$sql_up = 'UPDATE prova SET q1 = \''. $_POST['q1'] .'\', q2 = \''. $_POST['q2'] .'\', q3 = \''. $_POST['q3'] .'\', q4 = \''. $_POST['q4'] .'\', q5 = \''. $_POST['q5'] .'\', q6 = \''. $_POST['q6'] .'\', q7 = \''. $_POST['q7'] .'\', q8 = \''. $_POST['q8'] .'\', q9 = \''. $_POST['q9'] .'\', q10 = \''. $_POST['q10'] .'\' where id = 1';
	//echo $sql_up;



	if(mysqli_query($link, $sql_up)){
		echo "Gabarito alterado com sucesso.";
		echo "<a href='exercicio_45.php'> Voltar</a>";
	}

}


?>