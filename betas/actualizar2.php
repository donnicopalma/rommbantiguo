<?php
require_once('config.php');
//	include('errores.php');
if(!isset($_POST[registro])) {
	echo 'No puedes entrar directamente a esta pagina, debes registrarte primero<br />' . $error . '';
} else {
$nick = stripslashes($_POST[user]);
$nick = strip_tags($nick);
$sexo = stripslashes($_POST[sexo]);
$sexo = strip_tags($sexo);
$d =stripslashes($_POST[dia_nac]);
$d = strip_tags($d);
$m =stripslashes($_POST[mes_nac]);
$m = strip_tags($m);
$a =stripslashes($_POST[ano_nac]);
$a = strip_tags($a);
$fecha_nac = stripslashes($_POST[fecha_nac]);
$fecha_nac = strip_tags("$d/$m/$a");
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
$sqlusuarios = mysql_query("UPDATE usuarios SET sexo='$sexo', fecha_nac='$fecha_nac', ocupacion='$ocupacion', ocupacion_s='$ocupacion_s', pais='$pais', region='$region', zipcode='$zipcode' WHERE user='". $_SESSION[usuario] ."'");
	if(!$sqlusuarios) {    
		echo 'Disculpanos ' . $_POST[user] . ' pero en este momento no hemos podido registrarte en ROOMBA!. Por favor notif&iacute;cale esto al administrador.<br />' . $error . '';
		exit;
	} else {
		echo 'Felicidades ' . $_POST[user] . ', por completar tus datos serás premiado con 1000 roombox <a href="index2.php">aqu&iacute;</a>';
	}
}
//, email, nombre, apellido, sexo, fecha_nac, ocupacion, ocupacion_s, pais, region, comuna, direccion, zipcode
//'$nombre','$apellido','$sexo','$fecha_nac','$ocupacion','$ocupacion_s','$pais','$region','$comuna','$direccion','$zipcode',
?>