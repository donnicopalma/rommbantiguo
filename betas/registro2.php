<?php
require_once('config.php');
if(!isset($_POST[registro])) {
	echo 'No puedes entrar directamente a esta pagina, debes registrarte primero<br />' . $error . '';
} else {
$user = stripslashes($_POST[user]);
$user = strip_tags($user);
$pass = stripslashes($_POST[pass]);
$pass = strip_tags($pass);
$nombre = stripslashes($_POST[nombre]);
$nombre = strip_tags($nombre);
$apellidos = stripslashes($_POST[apellidos]);
$apellidos = strip_tags($apellidos);
$zipcode = stripslashes($_POST[zipcode]);
$zipcode = strip_tags($zipcode);
$fecha_registro = date('j F Y');
$hora_registro = date('h:i:s A');
$IP = $_SERVER["REMOTE_ADDR"];
$nivel = 4; 
$sqlusuarios = mysql_query("INSERT INTO usuarios (user, pass, nombre, apellidos, nivel, fecha_registro, hora_registro, IP) VALUES ('$user','$pass','$nombre','$apellidos','$nivel','$fecha_registro','$hora_registro','$IP')");
	if(!$sqlusuarios) {    
		echo 'Disculpanos ' . $_POST[nombre] . ' pero en este momento no hemos podido registrarte en ROOMBA!. Por favor notif&iacute;cale esto al administrador.<br />' . $error . '';
		exit;
	} else {
		echo 'Felicidades ' . $_POST[nombre] . ', ya eres parte de ROOMBA!. Ahora debes entrar con tu MAIL y PASS <a href="index.php">aqu&iacute;</a>';
	}
}
//, email, nombre, apellido, sexo, fecha_nac, ocupacion, ocupacion_s, pais, region, comuna, direccion, zipcode
//'$nombre','$apellido','$sexo','$fecha_nac','$ocupacion','$ocupacion_s','$pais','$region','$comuna','$direccion','$zipcode',
?>