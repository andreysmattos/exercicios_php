<?php

/* Faça um Programa que peça um número e então mostre a mensagem O número informado foi [número]. */ 



?>





<form method="get" action="">

<label for="numero"> Digite um número: </label>
<input type="number" name="numero" id="numero">

<input type="submit">
<br/>
<br/>
<label for="resposta"> O número informado foi </label>
<input type="text" readonly value="<?php

if(isset($_GET['numero']) && !empty($_GET['numero'])){
echo $_GET['numero'];}?>" size="3" id="resposta">


</form>



