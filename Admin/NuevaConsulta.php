<?php
include ('conexion.php');
	if (isset($_POST['Crear'])){
		$UsuarioNuevo = "insert into citas(ID, Nombre, Edad, Sexo, Correo, Modalidad_Consulta, Notas, Fecha_Programada) values ('', '".$_POST['Nombre']."',
						".$_POST['Edad'].", '".$_POST['Sexo']."', '".$_POST['Correo']."', '".$_POST['Modalidad']."', '".$_POST['Mensaje']."',
						'".$_POST['Fecha']."')";

		if($conexion->query($UsuarioNuevo)){
			echo "<script>alert('Consulta Agendada')
					self.location = 'ConsultaNueva.php'	
				  </script>";
		}
		else{
			echo "<script>alert ('Ha ocurrido un error, intente nuevamente')
					self.location = 'ConsultaNueva.php'
			</script>";
			$conexion->close();
		}
	}

?>