<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Agregar Consulta</title>
	<link rel="stylesheet" type="text/css" href="css/base.css">
	<link rel="stylesheet" type="text/css" href="css/skeleton.css">
	<link rel="stylesheet" type="text/css" href="css/jquery.datetimepicker.css"/ >
	<script src="js/jquery.js"></script>
	<script src="js/jquery.datetimepicker.js"></script>
</head>
<body>

	<?php include('menu.php') ?>
<br><br>
<div class="container">
	<label>CONSULTA NUEVA</label>
	<hr>
</div>
	
	<div class="container">
		<form action="NuevaConsulta.php" method="post" name="Nueva">
			<label class="Campos">NOMBRE DEL PACIENTE:</label>
				&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
				<input type="text" name="Nombre" class="InputCrear">
				<br><br>
				<label class="Campos">EDAD:</label>
				&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
				<input type="text" name="Edad" class="InputCrear" onkeypress="numero(this)">
				<br><br>
				<label class="Campos">SEXO:</label>
				&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
				<input type="text" name="Sexo" class="InputCrear">
				<br><br>
				<label class="Campos">CORREO ELECTRÓNICO:</label>
				&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
				<input type="email" name="Correo" class="InputCrear" >
				<br><br>
				<label class="Campos">MODALIDAD DE CONSULTA:</label>
				&nbsp;&nbsp;
				<input type="text" name="Modalidad" class="InputCrear">
				<br><br>
				<label class="Campos">MENSAJE:</label>
				&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
				<input type="text" name="Mensaje" class="InputCrear">
				<br><br>
				<label class="Campos" id="label">FECHA PROGRAMADA:</label>
				&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
				<input type="text" id="datetimepicker_mask" name="Fecha" class="InputCrear" onlyread/>
								<script>
								$('#datetimepicker_mask').datetimepicker({
								mask:'9999/19/39 29:59'
								});

								</script>
				<br><br>				
				<input type="submit" name="Crear" id="Crear" value="Agendar Cita">				
				<hr>
		</form>		
	</div>	
	
</body>
</html>