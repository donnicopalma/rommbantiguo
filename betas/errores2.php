<?php
// Es necesario llamar a config.php para que pueda entrar
// a revisar unas cuantas cosas en la Base de Datos
require_once('config.php');
// Empezamos.... 
/* Esta es la explicacion de cada funcion 
Funcion1 = No dejar espacios en el nick
Funcion 2 = Nick de mas de 3 caracteres
Funcion 3 = No espacios en el nick
Funcion 4 = No repetir nick ya registrado
Funcion 5 = Contraseña con mas de 5 caracteres
Funcion 6 = Contraseña 1 y Contraseña2 deben ser iguales*/
$error = '<a href="javascript: window.history.back()"><< Regresar a solucionar el problema</a>';
/*Funcion 1*/if($_POST[nombre] == "") {
	echo 'Haz dejado el espacio de USER en blanco<br />' . $error . '';
	exit;
}
if($_POST[user] == "") {
	echo 'Haz dejado el espacio de EMAIL en blanco<br />' . $error . '';
	exit;
}
if($_POST[apellidos] == "") {
	echo 'Haz dejado el espacio de APELLIDOS en blanco<br />' . $error . '';
	exit;
}
/*Funcion 2*/if(strlen($_POST[nombre]) < 3){
	echo 'Lo siento pero el nick que escribiste(<b><i>' . $_POST[user] . '</i></b>) contiene menos de 3 carcateres, por favor escribe uno m&aacute;s grande<br />' . $error . '';
	exit;
}
/*Funcion 3*/if(stristr($_POST[nombre], ' ') == TRUE) {
	echo 'Lo siento pero el nick que escribiste(<b><i>' . $_POST[user] . '</i></b>) posee espacios y no puede ser registrado<br />' . $error . '';
	exit;
}
/*Funcion 4*/$sqlnickigual = mysql_query("SELECT * FROM `usuarios` WHERE user='" . $_POST[user] . "'");
if(mysql_num_rows($sqlnickigual)) {
	echo 'Lamentablemente el nombre de usuario que pusiste (<i><b>' . $_POST[user] . '</b></i>), YA est&aacute; siendo usado por otra persona. Por favor reg&iacute;strate con otro nombre.<br />' . $error . '';
	exit;
}
/*Funcion 5*/if(strlen($_POST[pass]) < 5) {
	echo 'Lo siento pero la contrase&ntilde;a que escribiste posee menos de 5 caracteres. Se recomienda poner una m&aacute;s larga<br />' . $error . '';
	exit;
}
/*Funcion 6*/if ($_POST[pass] != $_POST[pass2]) {
	echo 'Lo siento pero las contrase&ntilde;as que escribiste no son iguales. Debes escribirlas igual<br />' . $error . '';  
	exit;
}
?>