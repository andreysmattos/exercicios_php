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

if(isset($_POST['enviar'])){
	$q= [];
	for ($i=1; $i <= 10; $i++) { 
		$q[] = strtolower(filter_input(INPUT_POST, 'q' .$i.''));
	}


	


	$sqln = "SELECT * FROM prova where id = 1";
	$resultado_gab = mysqli_query($link, $sqln);
	$resulado_gab_row = mysqli_fetch_assoc($resultado_gab);
	if($resulado_gab_row['q1'] == $q[0]){
		$nota += 1;
	}
	if($resulado_gab_row['q2'] == $q[1]){
		$nota += 1;
	}

	if($resulado_gab_row['q3'] == $q[2]){
		$nota += 1;
	}

	if($resulado_gab_row['q4'] == $q[3]){
		$nota += 1;
	}

	if($resulado_gab_row['q5'] == $q[4]){
		$nota += 1;
	}

	if($resulado_gab_row['q6'] == $q[5]){
		$nota += 1;
	}

	if($resulado_gab_row['q7'] == $q[6]){
		$nota += 1;
	}

	if($resulado_gab_row['q8'] == $q[7]){
		$nota += 1;
	}

	if($resulado_gab_row['q9'] == $q[8]){
		$nota += 1;
	}

	if($resulado_gab_row['q10'] == $q[9]){
		$nota += 1;
	}
$sql2 = "INSERT INTO prova (q1,q2,q3,q4,q5,q6,q7,q8,q9,q10,nota) values ('$q[0]','$q[1]','$q[2]','$q[3]','$q[4]','$q[5]','$q[6]','$q[7]','$q[8]','$q[9]', '$nota')";

	mysqli_query($link, $sql2);

	
	echo "<h4>Sua nota é: <b>" .$nota. "</b></h4> <br/>";
	echo "<a href='exercicio_45.php'> Deseja usar o sistema novamente.</a>";

} else {
	header("LOCATION: exercicio_45.php");
}










?>