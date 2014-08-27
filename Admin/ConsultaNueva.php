<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Agregar Consulta</title>
	<link rel="stylesheet" type="text/css" href="css/base.css">
	<link rel="stylesheet" type="text/css" href="css/skeleton.css">
	<link rel="stylesheet" type="text/css" href="css/jquery.datetimepicker.css"/ >
	<link rel="stylesheet" type="text/css" href="fonts/fonts.css">
	<script src="js/jquery.js"></script>
	<script src="js/jquery.datetimepicker.js"></script>
</head>
<body>

	<?php include('menu.php') ?>
<br><br>
<div class="container consulta">
	<h1>CONSULTA NUEVA</h1>
	<hr>
</div>
	
	<div class="container conss">
		<div class="five columns">
		<form action="NuevaConsulta.php" method="post" name="Nueva">
			<label class="Campos">NOMBRE DEL PACIENTE:</label>
				<input type="text" name="Nombre" class="InputCrear">
				<br>
				<label class="Campos">EDAD:</label>
				<input type="text" name="Edad" class="InputCrear" onkeypress="numero(this)">
			    <br>
				<label class="Campos">SEXO:</label>
				<input type="text" name="Sexo" class="InputCrear">
				<br>
				<label class="Campos extra">CORREO ELECTRÓNICO:</label>
				<input type="email" name="Correo" class="InputCrear" >
				<br>
				<label class="Campos extra">MODALIDAD DE CONSULTA:</label>
				<input type="text" name="Modalidad" class="InputCrear">
				<br>
				<label class="Campos">MENSAJE:</label>
				<input type="text" name="Mensaje" class="InputCrear">
				<br>
				<label class="Campos" id="label">FECHA PROGRAMADA:</label>
				<input type="text" id="datetimepicker_mask" name="Fecha" class="InputCrear" onlyread/>
								<script>
								$('#datetimepicker_mask').datetimepicker({
								mask:'9999/19/39 29:59'
								});

								</script>
				<br><br>				
				<input type="submit" name="Crear" id="Crear" value="Agendar Cita" class="crear">				
		</form>	
	   </div>	
	</div>	
	
</body>
</html>