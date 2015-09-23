<?
	$host = "localhost";	// el host de la base de datos
	$user = "root";			// usuario de la base de datos
	$pass = "";				// contraseña de la base de datos
	$bbdd = "roomb_users";		// base de datos a usar
	
	/*********** esto crea la conexión a la base de datos **************/
	$conexio = mysql_connect($host,$user,$pass) or die(mysql_error()); // $conexion es la conexión a usar.
	mysql_select_db($bbdd, $conexio) or die(mysql_error());
	
	/////////////////////////////////////////////////////////////////////
	
	$consulta = "SELECT * FROM `usuarios` ORDER BY `ID` DESC  LIMIT 0 , 4";
	$res = mysql_query($consulta)or die(mysql_error());
	echo "<palaueb>";
	while($val=mysql_fetch_array($res)){
		echo "<datos campo1=\"".$val[pais]."\" campo2=\"".$val[sexo]."\" campo3=\"".$val[nombre]."\" />";
	}
	echo "</palaueb>";
?><script src="../Scripts/AC_RunActiveContent.js" type="text/javascript"></script>
<script type="text/javascript">
AC_FL_RunContent( 'codebase','http://download.macromedia.com/pub/shockwave/cabs/flash/swflash.cab#version=9,0,28,0','width','250','height','250','src','flash2php','quality','high','pluginspage','http://www.adobe.com/shockwave/download/download.cgi?P1_Prod_Version=ShockwaveFlash','movie','flash2php' ); //end AC code
</script>
<script type="text/javascript">
AC_FL_RunContent( 'codebase','http://download.macromedia.com/pub/shockwave/cabs/flash/swflash.cab#version=9,0,28,0','width','250','height','250','src','flash2php','quality','high','pluginspage','http://www.adobe.com/shockwave/download/download.cgi?P1_Prod_Version=ShockwaveFlash','movie','flash2php' ); //end AC code
</script>
<noscript>
<object classid="clsid:D27CDB6E-AE6D-11cf-96B8-444553540000" codebase="http://download.macromedia.com/pub/shockwave/cabs/flash/swflash.cab#version=9,0,28,0" width="250" height="250">
  <param name="movie" value="flash2php.swf" />
  <param name="quality" value="high" />
  <embed src="flash2php.swf" quality="high" pluginspage="http://www.adobe.com/shockwave/download/download.cgi?P1_Prod_Version=ShockwaveFlash" type="application/x-shockwave-flash" width="250" height="250"></embed>
</object>
</noscript>
