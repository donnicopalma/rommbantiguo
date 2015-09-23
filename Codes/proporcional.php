<?php
	/* 
	Este script es mejora con respecto al thumbnail ya publicado, este crea el thumbanil proporcional 
	al tamaño establecido, ej. $altura=100;
	*/
	$nombre="mifotografia.jpg";
	$original = imagecreatefromjpeg($nombre);
	// Establecemos el alto deseado.
	$altura=120;
	// Calculamos el ancho según el alto. ej. 150x100
    $ratio = ($datos[1] / $altura); 
	// Redondeamos el tamaño para que la imagen no se deforme.
    $anchura = round($datos[0] / $ratio); 
    $thumb = imagecreatetruecolor($anchura,$altura); 
	// Creamos el thumbnail segun los parametros
    imagecopyresampled($thumb, $original, 0, 0, 0, 0, $anchura, $altura, $datos[0], $datos[1]); 
	// Aqui ya creamos el thumbnail en el servidor con el nombre "mifotografia-thumb.jpg" para no perder
	// el nombre original "mifotografia.jpg".
    imagejpeg($thumb,"mifotografia-thumb.jpg",90); 
?>