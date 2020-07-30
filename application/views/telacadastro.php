<?php
defined('BASEPATH') OR exit('No direct script access allowed');
?><!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="utf-8">
	<title>PokéProject</title>
	<link rel="stylesheet" type="text/css" href="http://localhost/poke/assets/css/cadastro.css">
	<link rel="icon" href="http://localhost/poke/assets/img/icon.png">
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
	<script src="https://cdn.jsdelivr.net/npm/sweetalert2@9"></script>

</head>
<body style="background: #72726E;">
<?php 
	if($this -> session -> flashdata('status_cadastro') == 'erro no cadastro'){
	 echo "<script> Swal.fire('Não foi possível cadastrar', 'Já existe uma conta registrada com esse login','error'); </script>";
		
	}


?>
<div id="container" class="container" style="width: 35%; margin-top: 10%">
	<img src="http://localhost/poke/assets/img/pokemon2.png" style="margin-bottom:25px; padding-left: 20% " >
		<input type="text" id='nome' name="nome" placeholder="Seu nome" class="form-control" required style="margin-bottom: 5px"> 
		<input type="text" id='login' name="login" placeholder="Login"  class="form-control" required style="margin-bottom: 5px">
		<input type="password" id='senha' name="senha" placeholder="Senha"  class="form-control"required style="margin-bottom: 5px">
		<input type="password" id='confirmarsenha' name="confirmarsenha" placeholder="Confirmar senha"  class="form-control" required style="margin-bottom:  5px">
		<button type="button" id="btnVoltar" class="btn" style="background: #DC1C18;" > Voltar </button>
		<button type="submit" id="btnCadastrar"class="btn" style="background: #DC1C18;"> Cadastrar </button>
</div>

	<footer>
		<script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
		<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
		<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
	</footer>

</body>
</html>
<script src="https://code.jquery.com/jquery-3.5.1.js" integrity="sha256-QWo7LDvxbWT2tbbQ97B53yJnYU3WhH/C8ycbRAkjPDc="crossorigin="anonymous"></script>
<script>
	$("#btnVoltar").click(function(){
		window.location.href = <?php echo '"'.base_url('home').'"'; ?>
	})
	$('#btnCadastrar').click(function(){
		var nome = $('#nome')[0].value
		var login = $('#login')[0].value
		var senha = $('#senha')[0].value
		var confirmarsenha = $('#confirmarsenha')[0].value
		if(senha != confirmarsenha){
			Swal.fire("Confirmação de senha e senha não estão iguais","Para o prosseguimento do cadastro as duas precisam ser iguais",'error')
		}else{
			$.post(<?php echo "'".base_url('cadastrar')."'" ?>, {"nome":nome, "login":login, "senha": senha}, function(data){
				window.location.href = data
			})
		}
	})
</script>
