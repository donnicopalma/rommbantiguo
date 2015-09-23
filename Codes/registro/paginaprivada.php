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
include('config.php'); //incluimos el config.php que contiene los datos de la conexión a la db y la sesión

if($_SESSION[level] == 1)
{
echo 'Tienes level 1 y puedes ver esta página';

}else{
Header("Location: index.php");
}

?>