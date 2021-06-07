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
		if(isset($_GET['id'])){
				$id = mysqli_escape_string($conn, $_GET['id']);
				$sql = "SELECT * FROM hospitais WHERE id='$id'";
				$resultado = mysqli_query($conn,$sql);
				$dados=mysqli_fetch_array($resultado);
		
		}
		?>
		<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/materialize/1.0.0/css/materialize.min.css">
		<div class="row">
			<div class="col s12 m6 push-m3">
			<h3 class="light">Editar Hospital</h3>
				<form method="POST" action="update.php">
					<input type="hidden" name="id" value="<?php echo $id; ?> " >
					<div class="input-field col s12">									
						Nome
						<input type="text" name="name" id="name" value = "<?php echo $dados['name'];?>" >
						<label for="nome"> </label>
					</div>
					
					<div class="input-field col s12">
						Endereço
						<input type="text" name="address" value = "<?php echo $dados['address'];?>" >
						<label for="endereco"> </label>
					</div>

					<div class="input-field col s12">
						Latitude
						<label> </label>
						<input type="text" name="lat" value = "<?php echo $dados['lat'];?>" >
					</div>

					<div class="input-field col s12">
						Longitude
						<label> </label>
						<input type="text" name="lng" value = "<?php echo $dados['lng'];?>" >	
					</div>

					<div class="input-field col s12">
						Tipo do Hospital
						<label> </label>
						<input type="text" name="type" value = "<?php echo $dados['type'];?>" placeholder="Atendimento comum ou atendimento covid">	
					</div>

					<input type="submit" value="Atualizar" name="editar" class="btn">
					<a href="index.php" class="btn green" >Mapa</a><br><br>
			</div>
		</div>
	</body>
</html>
<?php	

include_once "includes/footer.php";
?>