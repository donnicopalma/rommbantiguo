<?
	$host = "localhost";	// el host de la base de datos
	$user = "root";			// usuario de la base de datos
	$pass = "";				// contraseña de la base de datos
	$bbdd = "roomb_users";		// base de datos a usar
	
	/*********** esto crea la conexión a la base de datos **************/
	$conexio = mysql_connect($host,$user,$pass) or die("resultado=".urlencode(mysql_error())); // $conexion es la conexión a usar.
	mysql_select_db($bbdd, $conexio) or die("resultado=".urlencode(mysql_error()));
	

	//Nuestro campo en la base de datos lo hemos creado con la siguiente consulta:
//CREATE TABLE `flash2sql` (
//`ID` INT NOT NULL AUTO_INCREMENT ,
//`CAMPO1` VARCHAR( 255 ) NOT NULL ,
//`CAMPO2` VARCHAR( 255 ) NOT NULL ,
//`CAMPO3` VARCHAR( 255 ) NOT NULL ,
//PRIMARY KEY ( `ID` ) );

	$consulta= "INSERT INTO usuarios (nombre, sexo, pais) VALUES ('a','b','c')";
	
	if($REQUEST_METHOD == "POST"){
		$campo1 = htmlentities($_POST[campo1]);
		$campo2 = htmlentities($_POST[campo2]);
		$campo3 = htmlentities($_POST[campo3]);
		$csql = "INSERT INTO usuarios (nombre, pais, sexo) VALUES ('$campo1','$campo2','$campo3')";
		mysql_query($csql)or die("resultado=".urlencode(mysql_error()));
		echo "resultado=Insertado Correctamente!";
	}
?>