<?
$dbhost="127.0.0.1"; //Host del mysql
$dbuser="admin"; //Usuario del mysql
$dbpass="colicoli"; //Password del mysql
$db="/db_userdb_usuarios"; //db donde se creará la tabla users

//conectamos y seleccionamos db
mysql_connect("$dbhost","$dbuser","$dbpass");
mysql_select_db("$db");

//Comenzamos la sesión, esto se explica despues en el Sistema de Login
session_start();
?>
<?
include('config.php'); //incluimos el config.php que contiene los datos de la conexión a la db

//Creamos el form k irá a registrar.php para comprobar y introducir los datos a la tabla users
echo '<form action="registrar.php" method="POST">
Nick: <input type="text" name="nick" size="30"><br>
Password: <input type="password" name="pass" size="30" ><br>
Repetir Password: <input type="password" name="pass1" size="30" ><br>
email: <input type="text" name="email" size="50"><br>
Rollo: <textarea name="rollo" cols="30" rows="10"></textarea><br>
<input type="submit" name="submit" value="Enviar"></form>';
?>