<?
// Configuración //
///////////////////
// $extensiones=array("1ªext","2ªext","....");
// Aqui debes poner las extensiones que NO admitas
// por ejemplo si no quieres admitir .html , .exe ni .gif :
// $extensiones=array("html","exe","gif");
///////////////////////////////////////
$extensiones=array("html","exe","php");
/////////////////
// $path="/ruta/ta/ta";
// Si el server rula bajo LinuX toda la ruta completa /var/etc/..
// Si rulas bajo WindoWs C:/midirectorioroot/tal..
// Nota: Sin el último / ej: C:/miweb NO C:/miweb/
////////////////
$path="C:";
$nombre=$HTTP_POST_FILES['archivo']['name'];
$tamanio=$HTTP_POST_FILES['archivo']['size'];
$tipo=$HTTP_POST_FILES['archivo']['type'];
$var = explode(".","$nombre");
$num = count($extensiones);
$valor = $num-1;
for($i=0; $i<=$valor; $i++) {
    if($extensiones[$i] == $var[1]) {
    echo "Tipo de Archivo no admitido";
    exit;
    }
}
if (is_uploaded_file($HTTP_POST_FILES['archivo']['tmp_name']))
 {
  copy($HTTP_POST_FILES['archivo']['tmp_name'], "$path/$nombre");
  echo "El archivo se ha subido correctamente al servidor, muchas gracias <p>";
  echo "Nombre: $nombre <p>";
  echo "Tamaño: $tamanio <p>";
  echo "Tipo: $tipo";
 }
else { echo "Error al subir el archivo"; }
?> 
