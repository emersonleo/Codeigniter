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
		    <div class="navbar-nav">
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
		    	<li class="nav-item">
		    		<button id='btnSair' name="btnSair" class="btn btn-outline-danger form-control"> Sair </button>
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
		console.log(pokemon)
		var numeroFormatado = "#" + ("0000" + (numero + 1)).slice(-4);
		var nome = pokemon.name[0].toUpperCase() + pokemon.name.substring(1,pokemon.name.length)
		var imagemLink = '"https://raw.githubusercontent.com/PokeAPI/sprites/master/sprites/pokemon/' + (numero + 1).toString() + '.png"'
		var strCard = "<div lass='card' style='width:10%; height:10%; margin:5px; text-align:center; padding-top:0px;'>" + 
		"<img class='pb-0' src= " + imagemLink +  ">" + nome + "<br>" + numeroFormatado + "</div>"
		return strCard;
	}
	$(function(){
			$.get("https://pokeapi.co/api/v2/pokemon/?offset=0&limit=151", function(data){
				var pokemons = data.results;
				var strBody = "";
				for (var i = 0; i < 151; i++) {
					console.log(i)
					var pokemon = pokemons[i];
					strBody += construirCard(pokemon,i);
				}
				$('#divcollection')[0].innerHTML = strBody
			})
	})
	$('#btnSair').click(function(){
		window.location.href = <?php echo '"'.base_url('sair').'"'; ?>
	})
	

</script>
