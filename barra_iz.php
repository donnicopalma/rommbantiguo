<?php
require_once('signup.common.php');
echo '<?xml version="1.0" encoding="UTF-8"?>'
?>
<?php $xajax->printJavascript(''); ?>
<meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1" />
<meta name="description" content="" />
<meta name="keywords"    content="" />

<link rel="stylesheet" type="text/css" href="sample.css" />

<script type="text/javascript" src="popup-window.js"></script>
<script type="text/javascript">
function submitSignup()
		{
			xajax.$('submitButton').disabled=true;
			xajax.$('submitButton').value="porfavor espere...";
			xajax_processForm(xajax.getFormValues("signupForm"));
			return false;
		}
        </script>
<link href="estilo.css" rel="stylesheet" type="text/css">

<style type="text/css">
<!--
a:link {
	text-decoration: none;
}
a:visited {
	text-decoration: none;
}
a:hover {
	text-decoration: underline;
}
a:active {
	text-decoration: none;
}
body {
	margin-top: 0px;
	margin-left: 0px;
	margin-right: 0px;
	margin-bottom: 0px;
	background-repeat: no-repeat;
}
.Estilo27 {color: #0000FF}
-->
</style>
<table width="325" border="0" cellpadding="0" cellspacing="0" class="barra_iz">
  <!--DWLayoutTable-->
  <tr>
    <td height="209" colspan="5" valign="top"><table width="100%" border="0" cellpadding="0" cellspacing="0">
      <!--DWLayoutTable-->
      <tr>
        <td width="43" height="173">&nbsp;</td>
        <td width="247">&nbsp;</td>
        <td width="35">&nbsp;</td>
      </tr>
      <tr>
        <td height="32">&nbsp;</td>
        <td valign="top"><span class="Titulos">&iexcl;Reg&iacute;strate en Roomba!
              Es GRATIS
            <br />
            y de
          libre acceso para todos.</span></td>
          <td>&nbsp;</td>
      </tr>
      
      
      
      
      
      
      
      
      
      
      
      
      
      
      
      
      
      
      
      
      
      
      
      
      
      
      
      
      
      
      
      
      
      
      
      
      
      
      
      
      
      
      
      
      
      
      
      
      
      
      
      
      
      
      
      
      
      
      
      
      
      
      
      
      
      
      
      
      
      
      
      
      
      
      
      
      
      
      
      
      
      
      
      
      
      
      
      
      
      
      
      
      
      
      
      
      
      
      
    </table></td>
  </tr>
  <tr>
    <td width="15" height="19">&nbsp;</td>
    <td width="8">&nbsp;</td>
    <td width="80">&nbsp;</td>
    <td width="213">&nbsp;</td>
    <td width="9">&nbsp;</td>
  </tr>
  <tr>
    <td height="290">&nbsp;</td>
    <td>&nbsp;</td>
    <td colspan="2" rowspan="3" valign="top"><div id="formDiv"><form id="signupForm" action="javascript:void(null);" onSubmit="submitSignup();"><table width="100%" border="0" cellpadding="0" cellspacing="0" class="principal" >
      <!--DWLayoutTable-->
      <tr><td height="6" colspan="7" valign="top"><img src="imagenes_index/linea.png" width="290" height="6" /></td>
              <!--DWLayoutTable-->
        <tr>
          <td width="22" height="3"></td>
              <td width="82"></td>
              <td width="34"></td>
              <td width="122"></td>
              <td width="12"></td>
              <td width="16"></td>
              <td width="5"></td>
            <tr>
              <td height="28"></td>
              <td colspan="4" align="right" valign="top">Email:
              <input name="user" type="text" class="b-casillas" id="user"/></td>
              <td></td>
              <td></td>
            <tr>
              <td height="6" colspan="7" valign="top"><img src="imagenes_index/linea.png" width="290" height="6" /></td>
            <tr>
              <td height="3"></td>
              <td></td>
              <td></td>
              <td></td>
              <td></td>
              <td></td>
              <td></td>
            <tr>
              <td height="28"></td>
              <td colspan="4" align="right" valign="top">Nombre:
              <input name="nombre" type="text" class="b-casillas" id="nombre"/></td>      
              <td></td>
              <td></td>
            <tr>
              <td height="6" colspan="7" valign="top"><img src="imagenes_index/linea.png" width="290" height="6" /></td>
            <tr>
              <td height="3"></td>
              <td></td>
              <td></td>
              <td></td>
              <td></td>
              <td></td>
              <td></td>
            <tr>
              <td height="28"></td>
              <td colspan="4" align="right" valign="top">
                Apellidos:
              <input name="apellidos" type="text" class="b-casillas" id="apellidos"/></td>      
              <td></td>
              <td></td>
            <tr>
                <td height="6" colspan="7" valign="top"><img src="imagenes_index/linea.png" width="290" height="6" /></td>
            <tr>
              <td height="3"></td>
              <td></td>
              <td></td>
              <td></td>
              <td></td>
              <td></td>
              <td></td>
            <tr>
              <td height="28"></td>
              <td colspan="4" align="right" valign="top">Password:
              <input name="pass" type="password" class="b-casillas" id="pass"/></td>
              <td></td>
              <td></td>
            <tr>
              <td height="40" colspan="6" align="right" valign="top" background="imagenes_index/linea_g.png" class="Estilo27"><label id="pos_right" onclick="popup_show('popup', 'popup_drag', 'popup_exit', 'mouse',               -10, -10);" ><br />
                  <a href="#">&iquest;Por qu&eacute; toda esta informaci&oacute;n es importante?</a>&nbsp;&nbsp;&nbsp;&nbsp;</label></td>
              <td>&nbsp;</td>
            <tr>
              <td height="9"></td>
              <td></td>
              <td></td>
              <td></td>
              <td></td>
              <td></td>
              <td></td>
            <tr>
              <td height="41"></td>
              <td>&nbsp;</td>
              <td>&nbsp;</td>
              <td valign="top"><span>
                <input type="image" id="submitButton"  value="continue ->;" src="imagenes_index/registrar.png"/>
              </span></td>
              <td></td>
              <td></td>
              <td></td>
            <tr>
              <td height="12"></td>
              <td></td>
              <td></td>
              <td></td>
              <td></td>
              <td></td>
              <td></td>
            <tr>
              <td height="60"></td>
              <td></td>
              <td colspan="3" align="left" valign="top" class="Blancas"> <div align="justify">Al pulsar &quot;Registrarse&quot;, est&aacute;s indicando que has le&iacute;do y est&aacute;s de acuerdo con las Condiciones de Uso y la Pol&iacute;tica de Privacidad.</div></td>
              <td></td>
              <td></td>
            <tr>
              <td height="1"></td>
              <td></td>
              <td></td>
              <td></td>
              <td></td>
              <td></td>            
              <td></td>
            </table>
                                                                                                                                      </form>
    </div></td>
    <td>&nbsp;</td>
  </tr>
  
  <tr>
    <td height="15" valign="top"><div class="sample_popup" id="popup" style="display: none;">
        
        <div class="menu_form_header" id="popup_drag">
          <img class="menu_form_exit"   id="popup_exit" src="form_exit.png" alt="" />
        &nbsp;&nbsp;&nbsp;  </div>
    <div class="menu_form_body">
        <table><div class="importantes">
          Es importante entregarnos toda esta informaci&oacute;n porque de esta forma podras iniciar tu sesi&oacute;n de usuario, y nosotros y tus amigos, saber qui&eacute;n eres y de que forma poder contactarte.</table>
    </div>
    </div></td>
    <td></td>
    <td></td>
  </tr>
  <tr>
    <td height="28"></td>
    <td></td>
    <td></td>
  </tr>
  
  <tr>
    <td height="127" colspan="5" valign="top"><table width="100%" border="0" cellpadding="0" cellspacing="0">
      <!--DWLayoutTable-->
      <tr>
        <td width="325" height="127">&nbsp;</td>
      </tr>
    </table>    </td>
  </tr>
  <tr>
    <td height="60"></td>
    <td></td>
    <td>&nbsp;</td>
    <td>&nbsp;</td>
    <td></td>
  </tr>
  <tr>
    <td height="19"></td>
    <td></td>
    <td></td>
    <td colspan="2" valign="top" class="Estilo10">&copy; 2008 Roomba, M.R.</td>
  </tr>
  <tr>
    <td height="6"></td>
    <td></td>
    <td></td>
    <td></td>
    <td></td>
  </tr>
</table>
