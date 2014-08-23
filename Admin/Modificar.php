<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Perfil de Usuario</title>
	<link rel="stylesheet" type="text/css" href="css/base.css">
	<link rel="stylesheet" type="text/css" href="css/skeleton.css">
	<link rel="stylesheet" type="text/css" href="css/jquery.datetimepicker.css"/ >
	<script src="js/jquery.js"></script>
	<script src="js/jquery.datetimepicker.js"></script>
	<?php include ('conexion.php') ?>
</head>
<body>
	<?php include('menu.php') ?>
<br><br>
<div class="container">
	<label>PERFIL DE PACIENTE</label>
	<hr>
</div>
	<form id="Paciente" name="Paciente" method="post" >
<div class="container">
	<br>
	<?php 
	$DatosDePaciente = "select * from citas where ID = ".$_GET['us']."";
	$Datos = $conexion->query($DatosDePaciente);
	while ($columna = $Datos->fetch_array(MYSQLI_ASSOC)) { ?>
	
	<label class="Campos">NOMBRE DEL PACIENTE:</label>
	&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
	<input type="text" name="Nombre" class="InputCrear" value="<?php echo $columna['Nombre'] ?>">
	<br><br>
	<label class="Campos">EDAD:</label>
	&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
	<input type="text" name="Edad" class="InputCrear" value="<?php echo $columna['Edad'] ?>">
	<br><br>
	<label class="Campos">SEXO:</label>
	&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
	<input type="text" name="Sexo" class="InputCrear" value="<?php echo $columna['Sexo'] ?>">
	<br><br>
	<label class="Campos">CORREO ELECTRÓNICO:</label>
	&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
	<input type="text" name="Correo" class="InputCrear" value="<?php echo $columna['Correo'] ?>">
	<br><br>
	<label class="Campos">MODALIDAD DE CONSULTA:</label>
	&nbsp;&nbsp;
	<input type="text" name="Modalidad" class="InputCrear" value="<?php echo $columna['Modalidad_Consulta'] ?>">
	<br><br>
	<label class="Campos">MENSAJE:</label>
	&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
	<input type="text" name="Mensaje" class="InputCrear" value="<?php echo $columna['Notas'] ?>">
	<br><br>
	<label class="Campos" id="label">FECHA PROGRAMADA:</label>
	&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
	<input type="text" id="Fecha_Consulta" name="Fecha_Consulta" value="<?php echo $columna['Fecha_Programada'] ?>"	readonly>&nbsp;
	
	<button type="button" name="Continuar" onclick="mostrar()">Cambiar Fecha</button>
	<script type="text/javascript">
		function mostrar(){
				document.getElementById('lab').style.display = 'block'
				document.getElementById('datetimepicker_mask').style.display = 'block';
				
			}
	</script>
	<br><br>
	<label class="Campos" id="lab" style="display:none">FECHA NUEVA:</label>
	&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
	<input type="text" id="datetimepicker_mask" name="Fecha" style="display:none;"  readonly/>
					<script>
					$('#datetimepicker_mask').datetimepicker({
					mask:'9999/19/39 29:59'
					});

					</script>
	<br><br>				
	<input type="submit" name="Modificar" id="Modificar" value="Modificar Perfil">
	<input type="submit" name="Eliminar" id="Eliminar"  value="Cancelar Cita">

	</div>
	<hr>
	<?php }
		if (isset($_POST['Modificar'])){
	$CadenaModificacion = "Update citas set Nombre = '".$_POST['Nombre']."', Edad = ".$_POST['Edad'].", Sexo = '".$_POST['Sexo']."', 
							Correo = '".$_POST['Correo']."', Modalidad_Consulta = '".$_POST['Modalidad']."', 
							Notas = '".$_POST['Mensaje']."', Fecha_Programada = '".$_POST['Fecha']."' where ID = ".$_GET['us']."";
	$URL = "http://".$_SERVER['HTTP_HOST'].$_SERVER['REQUEST_URI'];
	if($conexion->query($CadenaModificacion)){
		echo "<script>alert('Consulta Actualizado')
			  self.location = '".$URL."'
		</script>";
	}
	else{
		//echo "<script>alert('Ha ocurrido un error, intente nuevamente')
		//		self.location = '".$URL."'
		//	</script>";
			echo "<br> Error: ".$conexion->error."<br>".$CadenaModificacion;
	}
	$conexion->close();
}

if (isset($_POST['Eliminar'])){
	$URL = "http://".$_SERVER['HTTP_HOST'].$_SERVER['REQUEST_URI'];
	$EliminarPaciente = "delete from citas where ID = ".$_GET['us']."";
	if($conexion->query($EliminarPaciente)){
		echo "<script>alert('Consulta Eliminada')
			  self.location = 'Directorio.php'
		</script>";
	}
	else{
		//echo "<script>alert('Ha ocurrido un error, intente nuevamente')
		//		self.location = '".$URL."'
		//	</script>";
		echo "<br> Error: ".$conexion->error;
	}

	$conexion->close();

}


?>
	 
	
</body>
</html>