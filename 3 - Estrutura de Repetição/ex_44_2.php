<?php
$host = "localhost";
$user = "root";
$senha = '';
$banco = 'prova';

if($link = mysqli_connect($host,$user,$senha,$banco)){

} else {
	die();
}


if(isset($_POST['reset'])){
	$sql3 = "DELETE from prova where id > 1";
	mysqli_query($link, $sql3);

	$sql4 = "ALTER TABLE prova AUTO_INCREMENT=2";
	mysqli_query($link, $sql4);

	header("LOCATION: exercicio_45.php");



}


header("LOCATION: exercicio_45.php");


?>