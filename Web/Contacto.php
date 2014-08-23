<?php
	require ('correocontacto.php');

	if (isset($_POST['send'])){
		$Nombre ="Nombre: ".$_POST['nombre'];
		$Email = "Correo: ".$_POST['correo'];
		$Mensaje = "Mensaje: ".$_POST['mensaje'];
		$Todo = $Nombre."<br>".$Email."<br>".$Mensaje."<br>";

		//echo $Todo;
		
		$correo->addAddress($_POST['correo'], $_POST['nombre']);
		$correo->Subject = "Dudas Sobre Mi Psicologa Online";
		$body = $Todo;
		$correo->MsgHTML($body);

		if($correo->send()){
			echo "<script>alert('En breve estare en contacto con usted')
				self.location = 'index.php'
			</script>";

		}	
		else{
			echo "Error ".$correo->ErrorInfo;
		}
		
	}

?>