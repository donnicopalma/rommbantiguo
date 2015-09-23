<?php
// Llamamos a config
require_once('config.php');
if($rango == 'Administrador') {
	echo 'Bienvenido <b>' . $_SESSION[usuario] . '</b> eres el Administrador de la web, por lo tanto puedes ver esta p&aacute;gina';
} else {
	echo 'Lo siento <b>' . $_SESSION[usuario] . '</b> pero no eres el administrador de esta web por lo tanto no puedes ver esta secci&oacute;n<br />' . $error .'';
}
?>