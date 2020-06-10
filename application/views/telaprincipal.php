<?php
defined('BASEPATH') OR exit('No direct script access allowed');
?><!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="utf-8">
	<title>Bem-vindo</title>
	<link rel="stylesheet" type="text/css" href="http://localhost/poke/assets/css/cadastro.css">
	<link rel="icon" href="http://localhost/poke/assets/img/icon.png">

</head>
<body>

<div id="container" class="painel">
	<input type="text" id='nome' name="nome" placeholder="Seu nome" class="campo" required>
	<input type="text" id='login' name="login" placeholder="Login" class="campo" required>
	<input type="text" id='senha' name="senha" placeholder="Senha" class="campo" required>
	<input type="text" id='senha' name="senha" placeholder="Confirmar" class="campo" required>
	<button type="button" id="btnVoltar" class="botao" > Voltar </button>
	<button type="button" id="btnCadastrar" class="botao"> Cadastrar </button>
</div>

</body>
</html>