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

//Comprobamos que los campos nick, pass y pass1 se han rellenado en el form de reg.php, sino volvemos al form
if(($_POST[nick] == ' ') or ($_POST[pass] == ' ') or ($_POST[pass1] == ' ') )
{
Header("Location: reg.php"); //enviamos al form de registro que esta en reg.php
}else{

//Comprobamos que la pass y pass1 son iguales, sino, volvemos a reg.php
if($_POST[pass] != $_POST[pass1])
{
echo 'Las passwords no son iguales';
}else{

//quitamos el codigo malicioso de $_POST[nick] y $_POST[pass]
$user = stripslashes($_POST["nick"]);
$user = strip_tags($user);
$pass = stripslashes($_POST["pass"]);
$pass = strip_tags($pass);
//comprobamos que el usuario no existe en la db
$usuarios=mysql_query("SELECT nick FROM users WHERE nick='$user' ");
if($user_ok=mysql_fetch_array($usuarios))
{
echo 'El usuario ya esta registrado';
mysql_free_result($usuarios); //liberamos la memoria del query a la db
}else{
//quitamos todo el codigo malicioso de las demas variables del form de registro
$email = stripslashes($_POST["email"]);
$email = strip_tags($email);

$rollo = stripslashes($_POST["rollo"]);
$rollo = strip_tags($rollo);
$rollo = str_replace("\n\r","<br>",$rollo); //se cambian los saltos de linea por <br>
$rollo = str_replace("\r\n","<br>",$rollo);
$rollo = str_replace("\n","<br>",$rollo);

$fecha = time();
$level = "2"; //usaremos level 1 para admins, level 2 para los demas (se cambia manualmente desde phpmyadmin)

//introducimos el nuevo registro en la tabla users
mysql_query("INSERT INTO users (nick,pass,email,fecha,level,rollo) values ('$user','$pass','$email','$fecha','$level','$rollo') ");
echo 'Usuario registrado con éxito';
}

}

}
?>