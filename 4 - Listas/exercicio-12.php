<?php

/*
12 - Foram anotadas as idades e alturas de 30 alunos. Faça um Programa que determine quantos alunos com mais de 13 anos possuem altura inferior à média de altura desses alunos.
*/

?>



<form method="post">

<?php
for($i = 1; $i <= 30; $i++){
	?>
<label>Idade </label> <br>
<input type="number" name="idade[]"> <br/>
<label>Altura </label> <br>
<input type="number" name="altura[]"> <hr>
<?php
}//fim do for
?>
<input type="submit">
</form>



<?php
$array_novo = [];
if(isset($_POST['idade']) && isset($_POST['altura'])){
	$media = array_sum($_POST['altura']) / count($_POST['altura']);

	foreach($_POST['idade'] as $key=>$value){
		if($value > 13 && $_POST['altura'][$key] >= $media){
			$array_novo [$key] = $value;
		}
	}



	echo "<pre>";
print_r($array_novo);
echo "</pre>";
echo "A media é: " .$media;
}



?>