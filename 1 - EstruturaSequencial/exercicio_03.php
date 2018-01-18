<?php
/* Faça um Programa que peça dois números e imprima a soma. */


?>


<form method="get" action="">

<label for="num11"> Informe o primeiro número: </label>
<input type="number" name="num1" id="num11">
<br/>
<label for="num22"> Informe o segundo número: </label>
<input type="number" name="num2" id="num22">
<br/>
<input type="submit" value="Somar">

<br/>
<br/>

<p> O resultado é: <u> <?php
if(isset($_GET['num1']) and !empty($_GET['num1'])) {
echo $_GET['num1'] + $_GET['num1'];}?></u></p>





</form>