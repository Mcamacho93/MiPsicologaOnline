<?php
include ('conexion.php');
if (isset($_POST['Modificar'])){
	$CadenaModificacion = "Update citas set Nombre = '".$_POST['Nombre']."', Edad = ".$_POST['Edad'].", Sexo = '".$_POST['Sexo'].", 
							Correo = '".$_POST['Correo']."', Modalidad_Consulta = '".$_POST['Modalidad']."', 
							Notas = '".$_POST['Mensaje']."', Fecha_Programada = '".$_POST['Fecha']."'";
	$URL = "http://".$_SERVER['HTTP_HOST'].$_SERVER['REQUEST_URI'];
	if($conexion->query($CadenaModificacion)){
		echo "<script>alert('Perfil Actualizado')
			  self.location = '".$URL."'
		</script>";
	}
	else{
		echo "<script>alert('Ha ocurrido un error, intente nuevamente')
				self.location = '".$URL."'
			</script>";
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
		echo "<script>alert('Ha ocurrido un error, intente nuevamente')
				self.location = '".$URL."'
			</script>";
	}

	$conexion->close();

}


?>