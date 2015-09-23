<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Documento sin t&iacute;tulo</title>
<link href="Proptex.css" rel="stylesheet" type="text/css" />
</head>

<body><?php
// Config.php es la página que nos va a conectar al Servidor y luego a la Base de Datos
$hostname = 'localhost'; // Host (generalmente es localhost)
$user = 'root'; // Usuario de la base de datos (por defecto en MySQL es root)
$pass = ''; // Contraseña de la base de datos (por defecto en MySQL se deja en blanco)
$dbnombre = 'roomb_users'; // Nombre de la Base de Datos en la que vas a trabajar 
$error = '<a href="javascript: window.history.back()"><< Regresar a solucionar el problema</a>';// Mensaje de error y nos devuelve atrás
$rango = $_SESSION[nivel];
// Conexión. Esta es la forma en que vamos a hacer la conexión.

$conexion = mysql_connect($hostname, $user, $pass);
	if(!$conexion) {
		echo 'Ha sido imposible conectarse con el servidor, por favor llena los datos de <b>config.php</b> e int&eacute;ntalo de nuevo';
		exit;
	}	
$db = mysql_select_db($dbnombre);
	if(!$db) {
		echo 'Ha sido imposible conectarse a la Base de Datos que proporcionaste, favor verifica si existe o si es correcta la que escribiste';
		exit;
	}
// Aqui comenzamos la sesión
session_start();
// Funciones
if($rango == 2) {
	$rango = 'Moderador Global';
}	
elseif($rango == 1) {
	$rango = 'Administrador';
}	
elseif($rango == 3) {
	$rango = 'Moderador';
}	
elseif($rango == 4) {
	$rango = 'Usuario';
}	
?>
</body>
</html>
