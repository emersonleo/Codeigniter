<?php
defined('BASEPATH') OR exit('No direct script access allowed');
?><!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="utf-8">
	<title>PokéProject</title>
	<link rel="stylesheet" type="text/css" href="http://localhost/poke/assets/css/home.css">

</head>
<body>

<div id="container" class="painel">
	<input type="text" id='login' name="login" placeholder="Login" class="campo">
	<input type="text" id='senha' name="senha" placeholder="Senha" class="campo">
	<input type="text" id='senha' name="senha" placeholder="Confirmar" class="campo">
	<button type="button" id="btnVoltar" class="botao" > Voltar </button>
	<button type="button" id="btnCadastrar" class="botao"> Cadastrar </button>
</div>

</body>
</html>
<script src="https://code.jquery.com/jquery-3.5.1.js" integrity="sha256-QWo7LDvxbWT2tbbQ97B53yJnYU3WhH/C8ycbRAkjPDc="crossorigin="anonymous"></script>
<script>
	$("#btnVoltar").click(function(){
		window.location.href = <?php echo '"'.base_url('home').'"'; ?>
	})

</script>
