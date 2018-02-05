<?php
/*
13 - Jogo da palavra embaralhada. Desenvolva um jogo em que o usuário tenha que adivinhar uma palavra que será mostrada com as letras embaralhadas. O programa terá uma lista de palavras lidas de um arquivo texto e escolherá uma aleatoriamente. O jogador terá seis tentativas para adivinhar a palavra. Ao final a palavra deve ser mostrada na tela, informando se o usuário ganhou ou perdeu o jogo.
*/

session_start();
$_SESSION['t'] = 0;


$arquivo = file('palavras.txt');

$palavra = function() use ($arquivo){
	$qtd = count($arquivo) - 1;
	$linha = rand(0, $qtd);
	return $arquivo[$linha];
};

function embaralhar($str){
	$qtd = strlen($str);
	$nome = '';
	$aleatorio = [];
	while(count($aleatorio) < $qtd){
		$rand = rand(0, $qtd-1);
		if(!in_array($rand, $aleatorio)){
			$aleatorio [] = $rand;
			$nome .= $str[$rand];
		}
	}	
	return [$nome, $str];
}



$on = (embaralhar($palavra()));
$vai = trim($on[1]);

?>

<?php echo trim($on[0]) ?>
<script type="text/javascript" src="https://code.jquery.com/jquery-3.3.1.min.js"></script>

<form method="post" id="form">
	<input type="text" name="tentativa">
	<input type="submit" value="Tentar">
</form>
<div id="d"></div>


<script type="text/javascript">
	$(function(){
	
	$("#form").submit(function(){

		$.ajax({
			method: "POST",
			url: "13.php",
			data: {
				palavra: '<?php echo $vai; ?>',
				tentativa: $(":input[name=tentativa]").val()
			}, success: function (data){
				$("#d").html(data);
			}

		});

		return false;


	});
	

});
</script>