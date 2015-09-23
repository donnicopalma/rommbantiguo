<HTML>
<HEAD>
<TITLE>Cambio de imagen a través de una Lista</TITLE>

<head>
<SCRIPT LANGUAGE="JavaScript">
<!-- begin script
function Validar(Netscape, Explorer) {
  if ((navigator.appVersion.substring(0,3) >= Netscape && navigator.appName == 'Netscape') ||      
      (navigator.appVersion.substring(0,3) >= Explorer && navigator.appName.substring(0,9) == 'Microsoft'))
    return true;
else return false;
}
//  end script -->
</SCRIPT>
</head>

<body>
<FORM>
<IMG NAME="imagen" SRC="ejemplos/red.gif" BORDER=0 WIDTH=50 HEIGHT=50>
<SELECT NAME="lista" SIZE=1 onChange ="if (Validar(3.0,4.0)) 	imagen.src=form.lista.options[form.lista.selectedIndex].value;">
  <OPTION VALUE="ejemplos/blue.gif">Azul
  <OPTION VALUE="ejemplos/yellow.gif">Amarillo
  <OPTION VALUE="ejemplos/green.gif">Verde
</SELECT>
</FORM>
</body>
<html>
</BODY>
</HTML>
