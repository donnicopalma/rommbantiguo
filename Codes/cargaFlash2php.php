<?
	$host = "localhost";	// el host de la base de datos
$user = 'roomb';
$pass = '166427290vplovplo';
	$bbdd = "roomb_users";		// base de datos a usar
	
	/*********** esto crea la conexión a la base de datos **************/
	$conexio = mysql_connect($host,$user,$pass) or die(mysql_error()); // $conexion es la conexión a usar.
	mysql_select_db($bbdd,$conexio) or die(mysql_error());
	
	/////////////////////////////////////////////////////////////////////
	session_start();

	$consulta = "SELECT * FROM usuarios WHERE user='". $_SESSION[usuario] ."'";
	$res = mysql_query($consulta)or die(mysql_error());
	echo "<palaueb>";
	while($val=mysql_fetch_array($res)){
		echo "<datos campo1=\"".$val[zipcode]."\" campo2=\"".$val[user]."\" campo3=\"".$val[id]."\" />";
	}
	echo "</palaueb>";
?>