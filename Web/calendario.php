<!DOCTYPE html>
<html lang="es">
<head>
	<meta charset="UTF-8">
	<title>Mi Psicóloga Online</title>
	<meta charset="UTF-8">
	<meta name="apple-mobile-web-app-capable" content="yes">
    <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">
    <meta name="author" content="">
    <meta name="description" content="">
    <meta name="keywords" content="">
    <link rel="icon" href="images/favicon.ico" type="image/x-icon">
	<link rel="stylesheet" type="text/css" href="css/base.css">
	<link rel="stylesheet" type="text/css" href="css/skeleton.css">
<link rel="stylesheet" type="text/css" href="fonts/fonts.css">
<script src="http://ajax.googleapis.com/ajax/libs/jquery/1/jquery.min.js"></script>
<script src="js/jquery.slicknav.js"></script>
<script src="http://cdnjs.cloudflare.com/ajax/libs/modernizr/2.6.2/modernizr.min.js"></script>

<link href='http://fonts.googleapis.com/css?family=Roboto:400,100,300,500,700,900' rel='stylesheet' type='text/css'>
<link rel="stylesheet" type="text/css" href="css/jquery.datetimepicker.css"/ >
	<script src="js/jquery.js"></script>
	<script src="js/jquery.datetimepicker.js"></script>
</head>
<body class="consultasfondo">
<?php include("menu.php");?>
<div class="container consulta consultas">
	
<div class="seven columns offset-by-one"><h2>Bienvenido</h2>
	<p>Nos interesa conocerte.</p>
	<br>
	<form method="post" action="confirmacion.php">
		<label>Nombre del paciente:</label><input type="text" name="Nombre" required>
		<label>Edad:</label><input type="number" name="Edad" required>
		<label>Sexo:</label><input type="text" name="Sexo" required>
		<label>Correo electónico:</label><input type="email" name="Correo" required>
		<label>Modalidad de consulta:</label>
<select name="Modalidad">
  <option value="mail">E-mail</option>
  <option value="chat">Chat</option>
    <option value="videoconferencia">Video Conferencia</option>
  <option value="presencial">Presencial</option>
</select>
		<label>Mensaje:</label><textarea name="Mensaje"></textarea>
		<button type="button" name="Continuar" onclick="mostrar()">Continuar</button>
		<script type="text/javascript">
			function mostrar(){
				document.getElementById('datetimepicker_mask').style.display = 'block';
			}
		</script>

		<input type="text" value="" id="datetimepicker_mask" style="display:none;" onchange="mostrarsubmit()" name="Fecha" readonly/>
					<script>

					function mostrarsubmit(){
						document.getElementById('AgendarCita').style.display = 'block';
					}

					$('#datetimepicker_mask').datetimepicker({
					mask:'9999/19/39 29:59',
					lang:'es'
					});



					</script>
		<button type="submit" name="AgendarCita" id="AgendarCita" style="display:none">Agendar Cita</button>			

	</form>	
</div>

</div>
</body>
</html>