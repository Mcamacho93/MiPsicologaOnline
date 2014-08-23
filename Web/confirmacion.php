<?php
	require ('configdecorreo.php');
	if (isset($_POST['AgendarCita'])){
		$Nombre ="Nombre: ".$_POST['Nombre'];
		$Edad = "Edad: ".$_POST['Edad'];
		$Sexo = "Sexo: ".$_POST['Sexo'];
		$Email = "Correo: ".$_POST['Correo'];
		$Modalidad = "Modalidad: ".$_POST['Modalidad'];
		$Mensaje = "Mensaje: ".$_POST['Mensaje'];
		$Fecha = "Fecha Elegida: ".$_POST['Fecha'];
		$Fecha_Programada = str_replace("/", "-", $_POST['Fecha']);

		$Todo = $Nombre."<br>".$Edad."<br>".$Sexo."<br>".$Email."<br>".$Modalidad."<br>".$Mensaje."<br>".$Fecha."<br>";

		//echo $Todo;
		
		$correo->addAddress($_POST['Correo'], $_POST['Nombre']);
		$correo->Subject = "Peticion de Consulta";
		$body = $Todo;
		$correo->MsgHTML($body);

		if($correo->send()){
			echo "<script>alert('Gracias por su confianza, sera redirigido para realizar el pago')
				self.location = 'pago.php'
			</script>";

		}	
		else{
			echo "Error ".$correo->ErrorInfo;
		}
		
	}
	
		
		?>

