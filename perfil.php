<?php
require_once('config.php');
if(isset($_SESSION['usuario'])) {
	echo include("room.php");
} else {
	echo 'Bienvenido <br>Visitante</br>
	Por favor <a href="register.php">reg&iacute;strate</a> o <a href="login.php">logu&eacute;ate</a>';
} 
?>