<!--informe um número. enquanto esse número não for divisível por 10, o número deve ser exibido e acrescentado de 1 -->



<form method="get">
<label for="num"> Informe um número:  </label> <br/>
<input type="number" name="num" placeholder="Número" id="num">
<button type="submit"> Confirmar</button>
</form>

<?php 




if(isset($_GET['num'])){
	$numero = (int) $_GET['num'];


	while($numero % 10 != 0){
		echo '<br/>' . $numero;
		$numero++; 
	}





}








?>