<?php
require_once('config.php');
$username = $_POST['username'];
$password = $_POST['password'];
if(isSet($_POST['entrar'])) {
	if(($username == "") or ($password == "")) {
		echo 'No haz escrito tus datos, por favor escribe tus datos para poder entrar a la Web.<br />' .  $error . '';
		exit;
	} else {
		$sqlnoreguser = mysql_query("SELECT * FROM `usuarios` WHERE user='" . $_POST['username'] . "'");
		if(!mysql_num_rows($sqlnoreguser)) {
			echo 'Lo siento pero el E-mail que escribiste(<b><i>' . $_POST[usuario] . '</i></b>) a&uacute;n no ha sido registrado en la web<br />' . $error . '';
			exit;
		}
		$sqlnoregpass = mysql_query("SELECT * FROM `usuarios` WHERE pass='" . $_POST['password'] . "'");
		if(!mysql_num_rows($sqlnoregpass)) {
			echo 'Contrase&ntilde;a inv&aacute;lida, por favor revisa la contrase&ntide;a que escribiste<br />' . $error . '';
			exit;
		}
		$sqllogin = mysql_query("SELECT * FROM usuarios WHERE user='$username' AND pass='$password'");
		if($user_ok = mysql_fetch_array($sqllogin)) {
			$_SESSION['usuario'] = $user_ok["user"]; //damos el nick a la variable usuario
			$_SESSION['id'] = $user_ok['idusuario']; //damos la id del user a la variable idusuario
			$_SESSION['nivel'] = $user_ok["nivel"]; //damos el nivel del usuario a la variable nivel
			
		} else {
			echo 'Datos incorrectos. <br />' . $error . '';
		}
	}		
		mysql_free_result($sqllogin);
		echo '<script language="JavaScript">window.location.href = "home.php";</script>';
} else {
	echo 'Ha ocurrido un error mientras ingresabas, por favor int&eacute;ntalo de nuevo.<br />' . $error . '';
}	
mysql_close(); 
?>
