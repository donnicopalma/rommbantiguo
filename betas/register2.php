<?php
require_once('config.php');
	include('errores.php');
if(!isset($_POST[registro])) {
	echo 'No puedes entrar directamente a esta pagina, debes registrarte primero<br />' . $error . '';
} else {
$email = stripslashes($_POST[user]);
$email = strip_tags($email);
$pass = stripslashes($_POST[pass]);
$pass = strip_tags($pass);
$nombre = stripslashes($_POST[nombre]);
$nombre = strip_tags($nombre);
$apellidos = stripslashes($_POST[apellidos]);
$apellidos = strip_tags($apellidos);
$sexo = stripslashes($_POST[sexo]);
$sexo = strip_tags($sexo);
$fecha_nac = stripslashes($_POST[fecha_nac]);
$fecha_nac = strip_tags($fecha_nac);
$ocupacion = stripslashes($_POST[ocupacion]);
$ocupacion = strip_tags($ocupacion);
$ocupacion_s = stripslashes($_POST[ocupacion_s]);
$ocupacion_s = strip_tags($ocupacion_s);
$pais = stripslashes($_POST[pais]);
$pais = strip_tags($pais);
$region = stripslashes($_POST[region]);
$region = strip_tags($region);
$zipcode = stripslashes($_POST[zipcode]);
$zipcode = strip_tags($zipcode);
$fecha_registro = date('j F Y');
$hora_registro = date('h:i:s A');
$IP = $_SERVER["REMOTE_ADDR"];
$nivel = 4; 
$sqlusuarios = mysql_query("UPDATE usuarios SET pass='$pass', sexo='$sexo', fecha_nac='$fecha_nac', ocupacion='$ocupacion', ocupacion_s='$ocupacion_s', pais='$pais', region='$region', zipcode='$zipcode' WHERE user='". $_SESSION[usuario] ."'");
	if(!$sqlusuarios) {    
		echo 'Disculpanos ' . $_POST[user] . ' pero en este momento no hemos podido registrarte en ROOMBA!. Por favor notif&iacute;cale esto al administrador.<br />' . $error . '';
		exit;
	} else {
		echo 'Felicidades ' . $_POST[user] . ', ya eres parte de ROOMBA!. Ahora debes entrar con tu MAIL y PASS <a href="index.php">aqu&iacute;</a>';
	}
}
//, email, nombre, apellido, sexo, fecha_nac, ocupacion, ocupacion_s, pais, region, comuna, direccion, zipcode
//'$nombre','$apellido','$sexo','$fecha_nac','$ocupacion','$ocupacion_s','$pais','$region','$comuna','$direccion','$zipcode',
?>