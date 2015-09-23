<?php
require_once('config.php');
if(isset($_SESSION['usuario'])){
	
?><?php
require_once('signup.common.php');

echo '<?xml version="1.0" encoding="UTF-8"?>'
?>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>El Roomba de <?php echo $dato['nombre'];?></title>
<style type="text/css">
<!--
body {
	margin-left: 0px;
	margin-top: 0px;
	margin-right: 0px;
	margin-bottom: 0px;
	background-color: #DEB201;
}
body,td,th {
	color: #FFFFFF;
}
.Estilo1 {color: #000000}
-->
</style>
<script src="Scripts/AC_RunActiveContent.js" type="text/javascript"></script>

<div align="center"><span class="Estilo1">
  <script type="text/javascript">
AC_FL_RunContent( 'codebase','http://download.macromedia.com/pub/shockwave/cabs/flash/swflash.cab#version=9,0,28,0','width','1000','height','700','align','middle','src','room','quality','high','pluginspage','http://www.adobe.com/shockwave/download/download.cgi?P1_Prod_Version=ShockwaveFlash','movie','room' ); //end AC code
</script>
  <noscript>
  <object classid="clsid:D27CDB6E-AE6D-11cf-96B8-444553540000" codebase="http://download.macromedia.com/pub/shockwave/cabs/flash/swflash.cab#version=9,0,28,0" width="1000" height="700" align="middle">
    <param name="movie" value="room.swf" />
    <param name="quality" value="high" />
    <embed src="room.swf" width="1000" height="700" align="middle" quality="high" pluginspage="http://www.adobe.com/shockwave/download/download.cgi?P1_Prod_Version=ShockwaveFlash" type="application/x-shockwave-flash"></embed>
  </object>
  </noscript>
  </span>
</div>
<?php } else {
	echo 'Bienvenido <b>Visitante</b><br />
	Por favor <a href="register.php">reg&iacute;strate</a> o <a href="login.php">logu&eacute;ate</a>';
}
?>