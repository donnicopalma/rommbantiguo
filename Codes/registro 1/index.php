<?php
require_once('config.php');
if(isset($_SESSION[usuario])) {
	echo 'Bienvenido <b>' . $_SESSION[usuario] . '</b><br />';
	if($rango == 'Administrador') {
		echo '<a href="pagAdmin.php">P&aacute;gina de Administrador</a>&nbsp;|&nbsp;';
	} 
	echo '<a href="perfil.php">Ir a tu Perfil</a>&nbsp;|&nbsp;<a href="logout.php">Cerrar Sesi&oacute;n</a>';
} else {
	echo 'Bienvenido <b>Visitante</b><br />
	Por favor <a href="register.php">reg&iacute;strate</a> o <a href="login.php">logu&eacute;ate</a>';
}
?>