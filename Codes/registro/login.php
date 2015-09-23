<?
$dbhost="127.0.0.1"; //Host del mysql
$dbuser="admin"; //Usuario del mysql
$dbpass="colicoli"; //Password del mysql
$db="/db_userdb_usuarios"; //db donde se creará la tabla users

//conectamos y seleccionamos db
mysql_connect("$db127.0.0.1","$dbuser","$dbpass");
mysql_select_db("$db");

//Comenzamos la sesión, esto se explica despues en el Sistema de Login
session_start();
?>
<?
include('config.php'); //incluimos el config.php que contiene los datos de la conexión a la db

if(!isset($_SESSION[usuario]) ) //comprobamos que no existe la session, es decir, que no se ha logeado, y mostramos el form
{

//Creamos el form k irá a autentificar.php para comprobar los datos con la tabla users
echo '<form action="autentificar.php" method="POST">
Nick: <input type="text" name="nick" size="30"><br>
Password: <input type="password" name="pass" size="30" ><br>
<input type="submit" name="submit" value="Enviar"></form>';

}else{

//SI se ha logeado, mostramos el nick y la opción de deslogearse
//Este sería el menú que saldría a la gente que esta logeada, se puede modificar y añadir cosas
echo 'Bienvenido '.$_SESSION[usuario]; //ej Bienvenido Juan
echo '<br>Tu level es '.$_SESSION[level]; //mostramos el level del user
if($_SESSION[level] == 1)
{
//mostramos el link para ir a la pagina privada porque el user tiene level 1 (*Nota: el level por defecto es 2, por lo tanto no se le mostrará)
//*Nota2: para cambiar el level a 1, se tiene k hacer manualmente por phpmyadmin
echo '<br><a href=paginaprivada.php>Ir a pagina privada</a>';
}

echo '<br><a href=logout.php>Salir</a>'; //link para deslogearse, iría a logout.php

}

?>