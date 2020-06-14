<?php
defined('BASEPATH') OR exit('No direct script access allowed');
?>
<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="utf-8">
	<title>Bem-vindo</title>
	<link rel="stylesheet" type="text/css" href="http://localhost/poke/assets/css/base.css">
	<link rel="icon" href="http://localhost/poke/assets/img/icon.png">

</head>
<body>

<div id="container" class="painel">
	<h1> Bem vindo, <?php echo $this -> session -> userdata("usuario_autorizado") -> nome;?> </h1>
	<button id='btnSair' name="btnSair" > sair </button>
</div>

</body>
</html>
<script src="https://code.jquery.com/jquery-3.5.1.js" integrity="sha256-QWo7LDvxbWT2tbbQ97B53yJnYU3WhH/C8ycbRAkjPDc="crossorigin="anonymous"></script>
<script type="text/javascript">
	$('#btnSair').click(function(){
		window.location.href = <?php echo '"'.base_url('sair').'"'; ?>
	})
</script>