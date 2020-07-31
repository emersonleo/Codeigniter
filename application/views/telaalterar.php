<?php
defined('BASEPATH') OR exit('No direct script access allowed');
?><!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="utf-8">
	<title>PokéProject</title>
<!-- 	<link rel="stylesheet" type="text/css" href="http://localhost/poke/assets/css/.css"> -->
	<link rel="icon" href="http://localhost/poke/assets/img/icon.png">
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
	<script src="https://cdn.jsdelivr.net/npm/sweetalert2@9"></script>

</head>
<body style="background: #FDF2EC">
	<header>
 		<nav class="navbar navbar-expand-lg navbar-dark bg-dark">
		  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNavAltMarkup" aria-controls="navbarNavAltMarkup" aria-expanded="false" aria-label="Alterna navegação">
		    <span class="navbar-toggler-icon"></span>
		  </button>
		  <div class="collapse navbar-collapse" id="navbarNavAltMarkup">
		    <div class="navbar-nav" align="center">
		    	<ul class="navbar-nav">
		    	<li class="nav-item">
		    		<a class="nav-item nav-link" href=<?php echo '"'.base_url('principal').'"';?>>Inicio</a>
		    	</li>
		    	<li class="nav-item dropdown">
			    	<a class="nav-link dropdown-toggle" href="#" id="navbarDropdownMenuLink" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
			          Conta
			        </a>
			        <div class="dropdown-menu" aria-labelledby="navbarDropdownMenuLink">
			          <a class="dropdown-item" href=<?php echo '"'.base_url('alterar').'"';?> >Alterar Conta</a>
			          <a class="dropdown-item" id="btnDelete" href="#">Excluir Conta</a>
			        </div>
		    	</li>
		    	<li class="nav-item">
		    		<button id='btnSair' name="btnSair" class="btn btn-outline-danger form-inline"> Sair </button>
		    	</li>
				</ul>
		    </div>
		  </div>
		</nav>
 	</header>

<div id="container" class="container" style="width: 35%; margin-top: 10%">
		
		<div id='divButtons' class="container" align="center">
				<button type="button" class="btn btn-warning " id='btnNome' style="margin: 10px"> Alterar Nome </button>
				<br>
				<button class="btn btn-warning " id='btnLogin' style="margin: 10px"> Alterar Login </button>
				<br>
			<button class="btn btn-warning " id='btnSenha' style="margin: 10px"> Alterar Senha </button>
		</div>
		<div id='alterarNome'> 
			<input type="text" id='nome' name="nome" placeholder="Digite seu novo nome" class="form-control" required style="margin-bottom: 5px"> 
		
		</div>
		<div id="alterarLogin"> 
			<input type="text" id='novoLogin' name="novLogin" placeholder="Digite seu novo Login"  class="form-control" required style="margin-bottom: 5px">
		</div>
		<input type="password" id='senha' name="senha" placeholder="Digite sua senha atual"  class="form-control"required style="margin-bottom: 5px">
		<div id="alterarSenha">
			<input type="password" id='novaSenha' name="novaSenha" placeholder="Digite sua nova senha"  class="form-control"required style="margin-bottom: 5px">
			<input type="password" id='confirmarsenha' name="confirmarsenha" placeholder="Confirme sua nova senha"  class="form-control" required style="margin-bottom:  5px">
		</div>
		<div id='divConfirmar'>
			<button type="button" id="btnConfirmar" class="btn btn-success" > Confirmar </button>
			<button type="button" id="btnVoltar"class="btn btn-info"> Voltar </button>
		</div>
</div>

	<footer>
		<script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
		<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
		<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
	</footer>

</body>
</html>
<script src="https://code.jquery.com/jquery-3.5.1.js" integrity="sha256-QWo7LDvxbWT2tbbQ97B53yJnYU3WhH/C8ycbRAkjPDc="crossorigin="anonymous"></script>
<script type="text/javascript">
	$(function(){
		var opcao = null
		$('divButtons').show()
		$('#alterarNome').hide()
		$('#alterarLogin').hide()
		$('#alterarSenha').hide()
		$('#senha').hide()
		$('#divConfirmar').hide()
	})
	$('#btnNome').click(function(data){
		opcao = "nome"
		console.log("entrou")
		$('#divButtons').hide()
		$('#divConfirmar').show()
		$('#alterarNome').show()
		$('#senha').hide()
		$('#alterarLogin').hide()
		$('#alterarSenha').hide()
	})
	$('#btnLogin').click(function(data){
		opcao = "login"
		$('#divConfirmar').show()
		$('#alterarNome').hide()
		$('#senha').show()
		$('#alterarLogin').show()
		$('#alterarSenha').hide()
		$('#divButtons').hide()
	})
	$('#btnSenha').click(function(data){
		opcao = "senha"
		$('#divConfirmar').show()
		$('#senha').show()
		$('#alterarNome').hide()
		$('#alterarLogin').hide()
		$('#alterarSenha').show()
		$('#divButtons').hide()
	})
	$("#btnConfirmar").click(function(data){


	})
	$("#btnVoltar").click(function(data){
		window.location.href =<?php echo "'".base_url('alterar')."'"; ?>
		
	})
</script>
