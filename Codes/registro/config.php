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
CREATE TABLE `users` (
`id` INT( 4 ) NOT NULL AUTO_INCREMENT,
`nick` VARCHAR(30) NOT NULL ,
`pass` VARCHAR(30) NOT NULL ,
`email` VARCHAR(50) NOT NULL ,
`fecha` INT(15) NOT NULL ,
`level` INT(2) NOT NULL ,
`rollo` LONGTEXT NOT NULL ,
INDEX ( `id` )
);
?>