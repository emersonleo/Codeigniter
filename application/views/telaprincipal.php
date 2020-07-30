<?php
defined('BASEPATH') OR exit('No direct script access allowed');
		if(!$this -> session -> userdata("usuario_autorizado") -> nome){
			redirect('home');
		}
?>
<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="utf-8">
	<title>Bem-vindo</title>
	<link rel="icon" href="http://localhost/poke/assets/img/icon.png" >
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
		    		<a class="nav-item nav-link" href="#">Inicio</a>
		    	</li>
		    	<li class="nav-item dropdown">
			    	<a class="nav-link dropdown-toggle" href="#" id="navbarDropdownMenuLink" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
			          Conta
			        </a>
			        <div class="dropdown-menu" aria-labelledby="navbarDropdownMenuLink">
			          <a class="dropdown-item" href="#">Alterar Conta</a>
			          <a class="dropdown-item" id="btnDelete" href="#">Excluir Conta</a>
			        </div>
		    	</li>
		    	<li class="nav-item dropdown">
			        <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
			          Região
			        </a>
			        <div class="dropdown-menu" aria-labelledby="navbarDropdown">
			          <a class="dropdown-item" href="#" id='btnKanto' > Kanto </a>
			          <a class="dropdown-item" href="#" id='btnJohto' > Johto </a>
			          <a class="dropdown-item" href="#" id="btnHoenn" > Hoenn </a>
			          <a class="dropdown-item" href="#" id="btnSinnoh" > Sinnoh </a>
			          <a class="dropdown-item" href="#" id="btnUnova" > Unova </a>
			          <a class="dropdown-item" href="#" id="btnKalos" > Kalos </a>
			          <a class="dropdown-item" href="#" id="btnAlola" > Alola </a>
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

	<div id="container" class="container">
		<div id='divcollection' class="row">
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
	function construirCard(pokemon,numero){
		var numeroFormatado = "#" + ("0000" + (numero + 1)).slice(-4);
		var nome = pokemon.name[0].toUpperCase() + pokemon.name.substring(1,pokemon.name.length)
		var imagemLink = '"https://raw.githubusercontent.com/PokeAPI/sprites/master/sprites/pokemon/' + (numero + 1).toString() + '.png"'
		var strCard = "<div lass='card' style='width:10%; height:10%; margin:5px; text-align:center; padding-top:0px;'>" + 
		"<img style='max-height:96px;'class='pb-0' src= " + imagemLink +  ">" + nome + "<br>" + numeroFormatado + "</div>"
		return strCard;
	}
	function exibirCatalogo(data,inicio,fim){
				var pokemons = data.results;
				var strBody = "";
				for (var i = inicio; i <= fim; i++) {
					var pokemon = pokemons[i];
					strBody += construirCard(pokemon,i);
				}
				$('#divcollection')[0].innerHTML = strBody
	}

	$(function(){
		$.get("https://pokeapi.co/api/v2/pokemon/?offset=0&limit=954", function(data){
			exibirCatalogo(data,0,150)
			$('#btnKanto').click(function(newData){
				exibirCatalogo(data,0,150)
			})
			$('#btnJohto').click(function(newData){
				exibirCatalogo(data,151,250)
			})
			$('#btnHoenn').click(function(newData){
				exibirCatalogo(data,251,385)
			})
			$('#btnSinnoh').click(function(newData){
				exibirCatalogo(data,386,492)
			})
			$('#btnUnova').click(function(newData){
				exibirCatalogo(data,493, 649)
			})
			$('#btnKalos').click(function(newData){
				exibirCatalogo(data,650, 721)
			})
			$('#btnAlola').click(function(newData){
				exibirCatalogo(data, 721, 806)
			})


		})
	})
	$('#btnSair').click(function(){
		window.location.href = <?php echo '"'.base_url('sair').'"'; ?>
	})
	$("#btnDelete").click(function(){
		Swal.fire({
		  icon: 'error',
		  title: 'Deseja excluir sua conta?',
		  text: 'Confirme sua senha para prosseguir com a exclusão',
		  input: 'password',
		  showConfirmButton: true,
		  confirmButtonText: "Continuar",
		  confirmButtonColor: "#d33",
		  showCancelButton: true,
		  cancelButtonText: "Voltar",
		  cancelButtonColor: "#3085d6",
		}).then((result) => {
		  if(result.value){
		   	$.post(<?php echo "'".base_url("excluir")."'";?>,{"senha":result.value},function(data){
		   		if(data == false){
		   			Swal.fire('Não foi possível prosseguir com a exclusão', 'possivelmente a senha digitada difere da senha da conta','error');
		   		}
		   		else{
					window.location.href = data	   			
		   		}
		   	})
		  }
		})
	})
	

</script>
