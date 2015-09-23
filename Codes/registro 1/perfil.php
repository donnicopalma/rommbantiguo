<?php
//Llamamos a config
require_once('config.php');
// Si la sesión existe continúa 
if(!isset($_SESSION[usuario])) {
	echo 'Por favor <a href="login.php">logu&eacute;ate</a> para que puedas ver tu perfil<br />' . $error . '';
} else {
	echo '
  <table align="center" border="1" cellpadding="0" cellspacing="0" width="00" >
   <tr><th><font color="green">Perfil de Usuario</font>:</th>
   </tr><tr>
    <td><b>Nombre:</b> </td>
   </tr><tr>
    <td align="center">' . $_SESSION[usuario] . '</td>
   </tr><tr>
    <td><b>Rango:</b> </td>
   </tr><tr>
    <td align="center">' . $rango . '</td>
   </tr><tr>
    <td><b>IP:</b> </td>
   </tr><tr>
    <td align="center">' . $_SERVER[REMOTE_ADDR] . '</td>
   </tr>
  </table>';
}	
?>
