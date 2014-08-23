<?php

date_default_timezone_set('Etc/UTC');

require 'phpmailer/PHPMailerAutoload.php';

$correo = new PHPMailer();
$correo->isSMTP();
$correo->Host = "mercury.websitewelcome.com";
$correo->SMTPAuth = true;
$correo->SMTPSecure = "ssl";
$correo->Username = "administracion@mipsicologaonline.com.mx";
$correo->Password = "@Psicologa.Admin.Online";
$correo->Port = 465;
$correo->setFrom('administracion@mipsicologaonline.com.mx', 'Mi Psicologa Online');
$correo->addReplyTo('administracion@mipsicologaonline.com.mx', 'Mi Psicologa Online');

?>