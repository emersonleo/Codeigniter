<?php
defined('BASEPATH') OR exit('No direct script access allowed');
?><!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="utf-8">
	<title>PokéProject</title>
	<link rel="stylesheet" type="text/css" href="http://localhost/poke/assets/css/home.css">
	<link rel="icon" href="http://localhost/poke/assets/img/icon.png">

</head>
<body>

<div id="container" class="painel">
	<form method="post" action= <?php echo '"'.base_url('acessar').'"'?>>
		<input type="text" id='login' name="login" placeholder="Login" class="campo" required>
		<input type="text" id='senha' name="senha" placeholder="Senha" class="campo" required>
		<div class="divbtn">
			<button type="submit" id="btnLogin" class="botao"> Logar </button>
			<button type="button" id="btnCadastro" class="botao" formnovalidate> Cadastre-se </button>
		</div>
	</form>
</div>

</body>
</html>
<script src="https://code.jquery.com/jquery-3.5.1.js" integrity="sha256-QWo7LDvxbWT2tbbQ97B53yJnYU3WhH/C8ycbRAkjPDc="crossorigin="anonymous"></script>
<script>
	$("#btnCadastro").click(function(){
		window.location.href = <?php echo '"'.base_url('cadastro').'"'; ?>
	})
</script>