<?php
$hostname = '127.0.0.1'; 
$user = 'root';
$pass = '';
$dbnombre = 'roomb_users';
$error = '<a href="javascript: window.history.back()"><< Regresar a solucionar el problema</a>';
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
session_start();
// WHERE user='". $_SESSION[usuario] ."'
$sql=mysql_query("SELECT * FROM usuarios");
$dato = mysql_fetch_array($sql);
$rango = $dato['nivel'];
if($rango == 1) {
	$rango = 'Administrador';
}	
elseif($rango == 2) {
	$rango = 'Moderador Global';
}	
elseif($rango == 3) {
	$rango = 'Moderador';
}	
elseif($rango == 4) {
	$rango = 'Usuario';
}	
?>