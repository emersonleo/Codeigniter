<?php
defined('BASEPATH') OR exit('No direct script access allowed');
?><!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="utf-8">
	<title>PokéProject</title>

</head>
<body>

<div id="container">
	<input type="text" id='login' name="login" placeholder="Login">
	<input type="text" id='senha' name="senha" placeholder="Senha">
	<button type="button" id="btnLogin"> Logar </button>
	<button type="button" id="btnCadastro"> Cadastre-se </button>
</div>

</body>
</html>

<script>
	$("#btnLogin").click(function(){
		window.location.href = <?php echo '"'.base_url('home').'"'; ?>
	})

</script>