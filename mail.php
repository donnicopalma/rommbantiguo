<?

# Indicamos la direcci�n (nombre) del servidor

$server_name = "roomba.cl";

# Indicamos el nombre de la persona que va a recibir el mensaje

$person_name = "nico";

# Indicamos la direcci�n de correo de esa persona

$person_email ="nico.palma@gmail.com";

# Las tres l�neas que vienen a continuaci�n son necesarias
# para que la cabecera del mensaje est� en formato HTML

$header = "MIME-Version: 1.0\n";
$header .= "Content-Type: text/html; charset=iso-8859-1\n";
$header .="From: webmaster@$server_name\nReply-To: webmaster@$server_name\nX-Mailer: PHP/";

# Esto que viene es el mensaje. (F�jate en los tags HTML)

$mensaje = "<font face='verdana' size='2'>Hola $person_name,<br><br>
Perdona nuestra intromisi�n. Simplemente te molestamos para que, si tienes un poco de tiempo, visites nuestro Sitio Web.<br><br>
La direcci�n la tienes en la parte inferior de este mensaje.<br><br>
Por favor no respondas a este mensaje. Si no te interesa, simplemente ign�ralo.<br><br>
Gracias por todo.<br><br>
Sinceramente,<br><br>
Aurelio Buend�a<br>
Webmaster de <b>Incordios</b><br>
<a href='http://www.miservidor,net'>http://www.miservidor.net</a><br>
<a href='mailto:webmaster@miservidor.net'>webmaster@miservidor.net</a></font>
<br><br>";

# Funci�n de env�o del mensaje

mail("$person_email","Recomendaci�n","$mensaje","$header");

# Ten en cuenta que:
# $person_email es la direcci�n de correo de la persona que recibe el mensaje
# "Recomendaci�n" es el Asunto del mensaje
# $mensaje es todo el texto del mensaje
# $header es la cabecera. En ella va incluida la direcci�n de remite.

# Para comprobar que el script ha funcionado, podemos poner lo siguiente:

echo "Mensaje enviado.";

?>