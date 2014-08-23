<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Citas Programadas</title>
		<link rel="stylesheet" type="text/css" href="css/base.css">
	<link rel="stylesheet" type="text/css" href="css/skeleton.css">
	<?php include ('conexion.php') ?>
</head>
<body>
	<?php include('menu.php') ?>
<br><br>
<div class="container">
	<label>DIRECTORIO</label>
	<hr>

</div>

<div class="container">
	<table class="tablas">
		<tr class="Paciente">
			<th><strong>Nombre del Paciente</strong></th>
			<th><strong>Edad</strong></th>
			<th><strong>Sexo</strong></th>
			<th><strong>Correo Electrónico</strong></th>
			<th><strong>Modalidad de Consulta</strong></th>
			<th><strong>Notas</strong></th>
			<th><strong>Fecha Programada</strong></th>
			<th><strong>Modificar</strong></th>
		</tr>

		<?php
			$Registros = "select * from citas";
			$MostrarRegistros = $conexion->query($Registros);

			while($columna = $MostrarRegistros->fetch_array(MYSQLI_ASSOC)){
				echo "<tr>
						<td>".$columna['Nombre']."</td>
						<td>".$columna['Edad']."</td>
						<td>".$columna['Sexo']."</td>
						<td>".$columna['Correo']."</td>
						<td>".$columna['Modalidad_Consulta']."</td>
						<td>".$columna['Notas']."</td>
						<td>".$columna['Fecha_Programada']."</td>
						<td><a href='Modificar.php?us=$columna[ID]'><img src='images/flecha.png'></a></td>
					  </tr>";

			}

		?>
	</table>
	

</div>

	
	
</body>
</html>