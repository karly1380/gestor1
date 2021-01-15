<!DOCTYPE html>
<html>
<head>
	<title>Registro</title>

  <style>
    img{
      width: 100%;
    }
    body {
      background: url(img/de.jpg)  ; 
      background-size: cover;
      background-repeat: no-repeat;
      margin: 0;
      height: 50vh;
    }
  </style>

	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
	<link rel="stylesheet" type="text/css" href="librerias/bootstrap/bootstrap.min.css">
	<link rel="stylesheet" type="text/css" href="librerias/jquery-ui-1.12.1/jquery-ui.theme.css">
	<link rel="stylesheet" type="text/css" href="librerias/jquery-ui-1.12.1/jquery-ui.css">
</head>
<body>
	<div class="container">
		<h1 class="text-center">Registro de Usuarios</h1>
			</body>
		<hr>
		<div class="row">
			<div class="col-sm-4"></div>
			<div class="col-sm-4">
			</body>
				<br>
				<form id="frmRegistro" method="POST" onsubmit="return agregarUsuarioNuevo()" autocomplete="off">
				<center>
					<label><b>Nombre Personal</b></label>
					<input type="text" name="nombre" id="nombre" class="form-control" required="">
					<br>
					<label><b>Fecha de Nacimiento</b></label>
					<input type="text" name="fechaNacimiento" id="fechaNacimiento" class="form-control" required="" readonly="">
					<br>
					<label><b>Email o Correo</b></label>
					<input type="email" name="correo" id="correo" class="form-control" required="">
					<br>
					<label><b>Nombre de Usuario</b></label>
					<input type="text" name="usuario" id="usuario" class="form-control" required="">
					<br>
					<label><b>Password o Contraeña</b></label>
					<input type="password" name="password" id="password" class="form-control" required="">
				</center>
					<br>
					<div class="row">
						<div class="col-sm-6 text-left">
							<button class="btn btn-primary">Registrar</button>
						</div>
						<div class="col-sm-6 text-right">
							<a href="index.php" class="btn btn-success">Login</a>
						</div>
					</div>
				</form>
			</div>
			<div class="col-sm-4"></div>
		</div>
	</div>

	<script src="librerias/js/jquery-3.5.1.min.js"></script>
	<script src="librerias/jquery-ui-1.12.1/jquery-ui.js"></script>
	<script src="librerias/sweetalert.min.js"></script>

	<script type="text/javascript">
		$(function(){
			var fechaA = new Date();
			var yyyy = fechaA.getFullYear();

			$("#fechaNacimiento").datepicker({

				changeMonth: true,
				changeYear: true,
				yearRange: '1990:' + yyyy,
				dateFormat: "dd-mm-yy"
			});
		});
	

		function agregarUsuarioNuevo() {
			$.ajax({
				method: "POST",
				data: $('#frmRegistro').serialize(),
				url: "procesos/usuario/registro/agregarUsuario.php",
				success:function(respuesta){
					console.log(respuesta);
					respuesta = respuesta.trim();
					if (respuesta == 1) {
						swal("Existe un Error al Ingresar, Intentelo despues :(");
					}else if (respuesta == 2) {
						swal("Este Usuario ya existe, ingrese otro :S");
					}else {
						$('#frmRegistro')[0].reset();
						swal("Se Agrego con Exito!! :D");
					}
				}
			});

			return false;
		}
	</script>
</body>
</html>
