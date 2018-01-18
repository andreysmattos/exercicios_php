<?php /* Faça um Programa que peça as 4 notas bimestrais e mostre a média. */ ?>

<form method="get" >
	<label> Informe as notas do aluno: </label> <br/>
		<?php 
 for ($i=1; $i < 5; $i++) { 
 	echo ' <br/> <input type="number" placeholder="Nota ' . $i . '" min="0" max="10" name="nota' . $i .'">';
 }
$nota1 = filter_input(INPUT_GET, 'nota1');
$nota2 = filter_input(INPUT_GET, 'nota2');
$nota3 = filter_input(INPUT_GET, 'nota3');
$nota4 = filter_input(INPUT_GET, 'nota4');
$media = "Informe todas as notas";
if($nota1 && $nota2 && $nota3 && $nota4){
$media = ($nota1 + $nota2 + $nota3 + $nota4) / 4;
}
?>
	<input type="submit">
	<label> Média: </label>
	<input type="text" readonly value="<?php echo $media;?>">

</form>