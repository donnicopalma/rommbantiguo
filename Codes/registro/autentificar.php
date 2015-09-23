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

if( ($_POST[nick] == ' ') or ($_POST[pass] == ' ') )//comprobamos que las variables enviadas por el form de login.php tienen contenido
{
Header("Location: login.php"); //estan vacías, volvemos al index
}else{

//comprobamos en la db si existe ese nick con esa pass
$usuarios=mysql_query("SELECT * FROM users WHERE nick='$_POST[nick]' and pass='$_POST[pass]' ");
if($user_ok = mysql_fetch_array($usuarios)) //si existe comenzamos con la sesion, si no, al index
{

session_register("usuario"); //registramos la variable usuario que contendrá el nick del user
session_register("idusuario"); //registramos la variable idusuario que contendrá la id del user
session_register("level"); //registramos la variable level que contendrá el level del user
//damos valores a las variables de la sesión
$_SESSION[usuario] = $user_ok["nick"]; //damos el nick a la variable usuario
$_SESSION[idusuario] = $user_ok["id"]; //damos la id del user a la variable idusuario
$_SESSION[level] = $user_ok["level"]; //damos el level del user a la variable level
Header("Location: login.php"); //volvemos al login donde nos saldrá nuestro menú de usuario

}else{
echo 'Nick y pass incorrectos';
}

}
?>