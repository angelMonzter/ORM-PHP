<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8" />
	<meta name="viewport" content="width=device-width, initial-scale=1.0" />
	<title></title>
	<link rel="stylesheet" href="https://dhbhdrzi4tiry.cloudfront.net/cdn/sites/foundation.min.css">
	<link href='https://cdnjs.cloudflare.com/ajax/libs/foundicons/3.0.0/foundation-icons.css' rel='stylesheet' type='text/css'>
	<link href="https://fonts.googleapis.com/css?family=Josefin+Slab" rel="stylesheet">
	<link rel="stylesheet" href="css/styles1.css">
</head>
<body>
	<style>
		.box{
			height: 400px;
			width: 500px;
			background-color: orange;
			border-radius: 15px;
		}
		div{
			padding-top: 100px;
		}
		#acciones{
			display: none;
		}
	</style>
	<script>
		function display(){
			var a = parseInt(document.getElementById("php").value);
			if (1==a){
				document.getElementById("acciones").style.display="block";
			}
		}
	</script>
	<div align="center">
		<h1>Script</h1>
		<div class="box">
			<form action="script1.php" method="POST">
				<div class="large-6 columns">
					<label for="">Nombre de Proyecto:
						<input type="text" name="nombre">
					</label>
				</div>
				<br>
				<div class="large-6 columns">
					<label for="">Elije tus archivos<br>
						<input type="checkbox" value="1" id="php" name="php" onclick="display();">php
						<input type="checkbox" name="css">css
						<input type="checkbox" name="js">js
						<input type="checkbox" name="html">html
						<input type="checkbox" name="correo">correo
						<input type="checkbox" name="pdf">pdf
						<input type="checkbox" name="img">img
					</label>
					<br>
					<div id="acciones">
						<label for="">Elige que quieres hacer<br>
							<input type="checkbox" name="alta">alta
							<input type="checkbox" name="baja">baja
							<input type="checkbox" name="consulta">consulta
							<input type="checkbox" name="modificacion">modificacion
						</label>
					</div>
				</div>
				<br>
				<button>Enviar</button>
			</form>
		</div>
	</div>

</body>
</html>
