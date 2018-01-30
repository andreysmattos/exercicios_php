<?php
/*
9 - Verificação de CPF. Desenvolva um programa que solicite a digitação de um número de CPF no formato xxx.xxx.xxx-xx e indique se é um número válido ou inválido através da validação dos dígitos verificadores edos caracteres de formatação.
*/



// VOU FAZER COM AJAX APENAS PQ QUERO PRATICAR AJAX!






?>

<script type="text/javascript" src="https://code.jquery.com/jquery-3.3.1.min.js"></script>

<form method="post" id="envia_cpf">
	<label> CPF</label><br/>
	<input type="text" name="cpf" placeholder="xxx.xxx.xxx-xx">
	<input type="submit">
</form>

<div id="XD">

</div>

<script type="text/javascript">
	
	$(function(){
		$('#envia_cpf').submit(function(){
			

			$.ajax({
				method: "POST",
				url: "9.php",
				data: {
					cpf:$(":input[name=cpf]").val()
				},	success: function(data){
					$('#XD').html(data);
				}

			});



			return false;


		});

	});
</script>