<?php
// Este register2 es el que interactúa con la Base de Datos,
// por eso se debe llamar a config.php
require_once('config.php');
//Ahora llamamaos a la página de errores
include('errores.php');
//Evitamos el hackeo , si enviaron el form trabajamos sino mensaje de error 
if(!isset($_POST[registro])) {
	echo 'No puedes entrar directamente a esta pagina, debes registrarte primero<br />' . $error . '';
} else {
$nick = stripslashes($_POST[user]);
$nick = strip_tags($nick);
$password = stripslashes($_POST[password]);
$password = strip_tags($password);
$fecha_registro = date('j F Y');
$hora_registro = date('h:i:s A');
$IP = $_SERVER["REMOTE_ADDR"];
$nivel = 4; // El nivel determina el rango de la persona, si quieres 
// ser administrador solo debes cambiar el nivel 4 por nivel 1 aquí o en PHPMyAdmin 

// Proceso de insersión de datos, si es correcto te da el mensaje aprobado, si no es correcto, te manda mensaje de error
$sqlusuarios = mysql_query("INSERT INTO usuarios (user, pass, nivel, fecha_registro, hora_registro, IP) VALUES ('$nick','$password','$nivel','$fecha_registro','$hora_registro','$IP') ");
	if(!$sqlusuarios) {    
		echo 'Disculpanos ' . $_POST[user] . ' pero en este momento no hemos podido registrarte en la web. Por favor notif&iacute;cale esto al administrador.<br />' . $error . '';
		exit;
	} else {
		echo 'Felicidades ' . $_POST[user] . ', ya est&aacute;s registrado en la web. Ahora debes entrar con tu USER y PASS <a href="login.php">aqu&iacute;</a>';
	}	
}
?>