<?php
require_once('config.php');
if(isset($_SESSION[usuario])) {
	if($rango == 'Administrador') {
		echo '<a href="pagAdmin.php">P&aacute;gina de Administrador</a>&nbsp;|&nbsp;';
	} 
	echo '<style type="text/css">
<!--
.Estilo2 {
	font-family: Arial;
	font-weight: bold;
	font-size: 18px;
}
.Estilo4 {
	font-size: 12px;
	font-family: Arial;
}
.Estilo6 {font-family: Arial; font-weight: bold; font-size: 14px; }
.Estilo7 {
	font-size: 12px;
	color: #0000FF;
}
-->
</style>

<table width="958" border="0" align="center" cellpadding="0" cellspacing="0" background="home/fondo.png">
  <!--DWLayoutTable-->
  <tr>
    <td height="118" colspan="4" valign="top"><table width="100%" border="0" cellpadding="0" cellspacing="0">
      <!--DWLayoutTable-->
      <tr>
        <td width="958" height="118">&nbsp;</td>
      </tr>
    </table>    </td>
  </tr>
  <tr>
    <td width="158" height="199" valign="top"><table width="100%" border="0" cellpadding="0" cellspacing="0">
      <!--DWLayoutTable-->
      <tr>
        <td width="29" height="34">&nbsp;</td>
          <td width="11">&nbsp;</td>
          <td width="102"></td>
          <td width="17"></td>
        </tr>
      <tr>
        <td height="130">&nbsp;</td>
          <td colspan="3" valign="top"><img src="'. $dato [foto] .'" width="130" height="130" /></td>
        </tr>
      
      
      
      
      
      
      
      
      
      
      
      
      
      
      
      
      
        <tr>
          <td height="15"></td>
          <td></td>
          <td valign="top"><span class="Estilo7">Cambiar imagen</span></td>
          <td></td>
        </tr>
      <tr>
        <td height="20"></td>
          <td></td>
          <td></td>
          <td></td>
        </tr>
      
      
      
      
      
      
      
      
      
      
      
      
      
      
      
      
      
      
      
      
      
      
    </table></td>
    <td width="7">&nbsp;</td>
    <td width="167" valign="top"><table width="100%" border="0" cellpadding="0" cellspacing="0">
              <!--DWLayoutTable-->
              <tr>
                <td width="92" height="25"></td>
                <td width="68"></td>
              </tr>
              <tr>
                <td height="19" colspan="2" valign="top"><span class="Estilo2">' . $dato [nombre] .'</span></td>
              </tr>
              <tr>
                <td height="8"></td>
                <td></td>
              </tr>
              <tr>
                <td height="15" colspan="2" valign="top"><span class="Estilo4">Ocupacion Roomba:</span></td>
              </tr>
              <tr>
                <td height="3"></td>
                <td></td>
              </tr>
              <tr>
                <td height="16" colspan="2" valign="top"><span class="Estilo6">' . $dato [ocup_s] .'</span></td>
              </tr>
              <tr>
                <td height="8"></td>
                <td></td>
              </tr>
              <tr>
                <td height="15" colspan="2" valign="top"><span class="Estilo4">Antig&uuml;edad:</span></td>
              </tr>
              <tr>
                <td height="3"></td>
                <td></td>
              </tr>
              <tr>
                <td height="16" colspan="2" valign="top"><span class="Estilo6">' . $dato [fecha_registro] .'</span></td>
              </tr>
              <tr>
                <td height="8"></td>
                <td></td>
              </tr>
              <tr>
                <td height="15" colspan="2" valign="top"><span class="Estilo4">Cumplea&ntilde;os:</span></td>
              </tr>
              <tr>
                <td height="3"></td>
                <td></td>
              </tr>
              <tr>
                <td height="16" colspan="2" valign="top"><span class="Estilo6">' . $dato [fecha_nac] .'</span></td>
              </tr>
              <tr>
                <td height="9"></td>
                <td></td>
              </tr>
              <tr>
                <td height="15" valign="top"><span class="Estilo7">Perfil completo</span></td>
                <td></td>
              </tr>
              <tr>
                <td height="4"></td>
                <td></td>
              </tr>
              <tr>
                <td height="1"></td>
                <td></td>
              </tr>
              
              
              
              
              
              
              
              
              
              
              
              
              
              
              
              
              
              
              
              
              
              
              
              
              
              
              
              
              
              
              
              
              
              
              
              
              
              
              
              
              
              
              
              
              
              
              
              
              
              
              
              
              
              
              
              
              
              
              
              
              
              
              
              
              
              
              
              
              
              
              
              
              
            
            
            
    </table></td>
    <td width="626">&nbsp;</td>
  </tr>
  
  <tr>
    <td height="471">&nbsp;</td>
    <td>&nbsp;</td>
    <td>&nbsp;</td>
    <td>&nbsp;</td>
  </tr>
</table>
';
} else {
	echo 'Bienvenido <b>Visitante</b><br />
	Por favor <a href="register.php">reg&iacute;strate</a> o <a href="login.php">logu&eacute;ate</a>';
}
?>