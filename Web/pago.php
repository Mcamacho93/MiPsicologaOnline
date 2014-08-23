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
</head>
<body class="consultasfondo">
<?php include("menu.php");?>
<div class="container  consultas">
	
<div class="seven columns"><h2>Favor de realizar el pago</h2><br>
	<p>Seleccione la modalidad de su consulta.</p>
	<br>
	<form target="_blank" action="https://www.paypal.com/cgi-bin/webscr" method="post" target="_top">
<input type="hidden" name="cmd" value="_s-xclick">
<input type="hidden" name="hosted_button_id" value="MZUB47DBVBXBJ">
<table>
<tr><td><input type="hidden" name="on0" value="Modalidad de consulta">Modalidad de consulta</td></tr><tr><td><select name="os0">
	<option value="Consulta E-mail">Consulta E-mail $200.00 MXN</option>
	<option value="Consulta Live Chat">Consulta Live Chat $250.00 MXN</option>
	<option value="Consulta Videollamada">Consulta Videollamada $300.00 MXN</option>
	<option value="Consulta Presencial">Consulta Presencial $300.00 MXN</option>
</select> </td></tr>
</table>
<input type="hidden" name="currency_code" value="MXN">
<input type="image" src="https://www.paypalobjects.com/es_XC/MX/i/btn/btn_buynowCC_LG.gif" border="0" name="submit" alt="PayPal, la forma más segura y rápida de pagar en línea.">
<img alt="" border="0" src="https://www.paypalobjects.com/es_XC/i/scr/pixel.gif" width="1" height="1">
</form>

</div>
<div class="seven columns">
	<h2>Gracias por su confianza</h2>
	<p>Me pondré en contacto con usted en un lapso no mayor a 2 días hábiles. En unos instantes será redirigifo a la página principal del sitio.</p>
</div>

</div>
</body>
</html>