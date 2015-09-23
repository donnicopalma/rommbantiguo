<?php
require_once('config.php');
// Variables que indican el archivo de la imagen y el nuevo tamano
$filename = "$dato[carpeta]/new.png";

// Se obtienen las nuevas dimensiones
list($width, $height) = getimagesize($filename);
$newwidth = 120; ///forzamos la imagen al tamaño deseado
$newheight = floor( $height * (120 / $width ) ); ///la altura la obtenemos proporcionalmente para no deformar la imagen


// Cargar la imagen
$thumb = imagecreatetruecolor($newwidth, $newheight);
$source = imagecreatefromjpeg($filename);

// Redimensionar
imagecopyresized($thumb, $source, 0, 0, 0, 0, $newwidth, $newheight, $width, $height);

// Mostrar la nueva imagen
imagejpeg($thumb,"$dato[carpeta]/new2.png",90); //guardar en el servidor.
//imagejpeg($thumb);  (imprimir directo a la pag
echo '<script language="JavaScript">window.location.href = "home.php";</script>';
?>