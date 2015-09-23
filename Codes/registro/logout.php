//AQUI ESTA logout.php
<?php // Inicio de sessión
session_start();

include("conect-bdd.php")

// Cambiamos de la base de datos el valor aleatorio de la cookie por si acaso fue robada
$sql = "UPDATE usuarios SET
sid = '".md5(rand(0,time()))."',
identificador = '".md5(rand(0,time()))."',
ultima_visita = NOW()
Where
id = "'".$_SESSION['id']."'";
mysql_query($sql) or die (mysql_error())";

//Destruimos las cookies.
setcookie("usNick","x",time()-3600);
setcookie("usPass","x",time()-3600);
setcookie("Acepta","x",time()-3600);

// Destruimos la sesión
session_destroy();
?>