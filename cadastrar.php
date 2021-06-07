<?php
session_start();
include_once("conexao.php");
include_once "includes/header.php";
?>
<!DOCTYPE html>
  <head>
		<meta name="viewport" content="width=device-width, initial-scale=1" />
		<meta http-equiv="content-type" content="text/html; charset=UTF-8"/>
		<title>Cadastrar</title>
	</head>
	<body>
		
		<?php
		if(isset($_SESSION['msg'])){
			echo $_SESSION['msg'];
			unset($_SESSION['msg']);
		}
		?>
		<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/materialize/1.0.0/css/materialize.min.css">
		<div class="row">
			<div class="col s12 m6 push-m3">
			<h3 class="light">Novo Hospital</h3>
				<form method="POST" action="processa_cad.php">
					<div class="input-field col s12">									
						Nome
						<input type="text" name="name" id="name" >
						<label for="nome"> </label>
					</div>
					
					<div class="input-field col s12">
						Endereço
						<input type="text" name="address" >
						<label for="endereco"> </label>
					</div>

					<div class="input-field col s12">
						Latitude
						<label> </label>
						<input type="text" name="lat" >
					</div>

					<div class="input-field col s12">
						Longitude
						<label> </label>
						<input type="text" name="lng" >	
					</div>

					<div class="input-field col s12">
						Tipo do Hospital
						<label> </label>
						<input type="text" name="type" placeholder="Atendimento comum ou atendimento covid">	
					</div>

					<input type="submit" value="Cadastrar" class="btn">
					<a href="index.php" class="btn green" >Mapa</a><br><br>
			</div>
		</div>
	</body>
</html>
<?php	

include_once "includes/footer.php";
?>