<?php
session_start(); // Inicio de sessión

include("conect-bdd.php"); // conexion a la base de datos

function quitar($mensaje) {
$mensaje = str_replace("<","&lt;",$mensaje);
$mensaje = str_replace(">","&gt;",$mensaje);
$mensaje = str_replace("\'","'",$mensaje);
$mensaje = str_replace("\'","&quot;",$mensaje);
$mensaje = str_replace("\\\\'","\;",$mensaje);
return $mensaje;
}

if(trim($_POST["nick"]) != "" && trim($_POST["email"]) != "") {
$sql = "SELECT id FROM usuarios WHERE nick='".quitar($_POST["nick"])."'";
$result = mysql_query($sql);
if($row = mysql_fetch_array($result)) {
echo 'Error, nick escogido por otro usuario <br> <a href="registrar.html?'. SID .'">Registro</a>';
} else {
$sql = "INSERT INTO usuarios (nick,password,nombre,email) VALUES (";
$sql .= "'".quitar($_POST["nick"])."'";
$sql .= ",md5('".quitar($_POST["password"])."')";
$sql .= ",'".quitar($_POST["nombre"])."'";
$sql .= ",'".quitar($_POST["email"])."'";
$sql .= ")";
mysql_query($sql);
echo 'Registro exitoso! <br> <a href="inicio.html?'. SID .'">Index</a>';
}
mysql_free_result($result);
} else {
echo 'Debe llenar como minimo los campos de email y password <br> <a href="registrar.html?'. SID .'">Registro</a>';
}
mysql_close();
?>