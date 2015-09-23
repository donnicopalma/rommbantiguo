
<?php
session_start(); // Inicio de sessión

include("conect-bdd.php"); // conexion a la base de datos

$sid = md5(SID);
$loginCorrecto = false;
$i = 1;

function quitar($mensaje) {
$mensaje = str_replace("<","&lt;",$mensaje);
$mensaje = str_replace(">","&gt;",$mensaje);
$mensaje = str_replace("\'","'",$mensaje);
$mensaje = str_replace('\"',"&quot;",$mensaje);
$mensaje = str_replace("\\\\","&#92",$mensaje);
return $mensaje;
}
if(trim($_POST["nick"]) != "" && trim($_POST["password"]) != "") {
$nickN = quitar($_POST["nick"]);
$passN = quitar($_POST["password"]);
$result = mysql_query("SELECT nick, identificador, password FROM usuarios WHERE nick='$nickN'");
$row = mysql_fetch_array($result);
if($row["nick"] == $nickN) {
if($row["password"] == md5($passN)) {
$nickN = quitar($_POST["nick"]);
$passN = quitar($_POST["password"]);
$result = mysql_query("SELECT nick, password FROM usuarios WHERE nick='$nickN'");
$row = mysql_fetch_array($result);
$I = settype($row["identificador"], "double");
if ($I == $i) {
$loginCorrecto = true;
mysql_free_result($result);
}
else {
$loginCorrecto = false;
mysql_free_result($result);
}
if($loginCorrecto) {
echo gettype($loginCorrecto);
?> <SCRIPT LANGUAGE="javascript">location.href ="inicio2.html?<? echo SID ?>";</SCRIPT> <?
}
else {
echo 'El sistema no lo ha identificado, solo los usuarios registrados tienen acceso a este area <br>
<a href="registrar.html?'. SID .'">registrate</a> <br>
<a href="inicio.html?'. SID .'">login</a>';
}
}
else {
echo 'Password incorrecto <br> <a href="inicio.html?">Login</a>';
}
}
else {
echo 'Usuario no existente en la base de datos <br> <a href="inicio.html'. SID .'">Login</a>';
}
}
else {
echo 'Debe especificar un nick y password <br> <a href="inicio.html?">Login</a>';
}
mysql_close();
?>