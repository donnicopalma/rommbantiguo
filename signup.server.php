<?php
require_once ("signup.common.php");
$hostname = '127.0.0.1'; 
$user = 'root';
$pass = '';
$dbnombre = 'roomb_users';
$connectid = mysql_connect($hostname, $user, $pass);
   mysql_select_db("roomb_users",$connectid);

function processForm($aFormValues)
{
	if (array_key_exists("user",$aFormValues))
	{
		return processAccountData($aFormValues);
	}
	else if (array_key_exists("dia_nac",$aFormValues))
	{
		return processPersonalData($aFormValues);
	}
}

function processAccountData($aFormValues)
{
	$objResponse = new xajaxResponse();
	$bError = false;
	
	$sqlnickigual = mysql_query("SELECT * FROM usuarios WHERE user='" . $aFormValues[user] . "'");
	if(mysql_num_rows($sqlnickigual)) {
		$objResponse->alert("Lamentablemente el e-mail que pusiste '$aFormValues[user]' ya esta siendo usado por otra persona. Por favor registrate con otro e-mail.");
		$bError = true;
}

	if (!eregi("^[a-zA-Z0-9]+[_a-zA-Z0-9-]*(\.[_a-z0-9-]+)*@[a-z??????0-9]+(-[a-z??????0-9]+)*(\.[a-z??????0-9-]+)*(\.[a-z]{2,4})$", $aFormValues['user']))
	{
		$objResponse->alert("Porfavor ingrese un e-mail valido.");
		$bError = true;
	}
	if (trim($aFormValues['nombre']) == "")
	{
		$objResponse->alert("Porfavor ingrese su nombre.");
		$bError = true;
	}
	if (stristr($aFormValues['apellidos'], ' ') == FALSE)
	{
		$objResponse->alert("Porfavor ingrese ambos apellidos.");
		$bError = true;
	}
	if (stristr($aFormValues['pass'], ' ') == TRUE)
	{
		$objResponse->alert("Porfavor ingrese un password sin espacios.");
		$bError = true;
	}
	if (strlen($aFormValues['pass']) < 4)
	{
		$objResponse->alert("Porfavor ingrese un password de minimo 4 digitos.");
		$bError = true;
	}
	
	if (!$bError)
	{

		$sForm = "<form id=\"signupForm\" action=\"javascript:void(null);\" onsubmit=\"submitSignup();\">";
		$sForm .="<table width=\"100%\" border=\"0\" cellpadding=\"0\" cellspacing=\"0\" class=\"principal\" >
      <!--DWLayoutTable-->
      <tr><td height=\"6\" colspan=\"6\" valign=\"top\"><img src=\"imagenes_index/linea.png\" width=\"290\" height=\"6\" /></td>
              <!--DWLayoutTable-->
        <tr>
          <td width=\"11\" height=\"3\"></td>
              <td width=\"94\"></td>
              <td width=\"35\"></td>
              <td width=\"123\"></td>
              <td width=\"12\"></td>
              <td width=\"18\"></td>
            <tr>
              <td height=\"28\"></td>
              <td colspan=\"4\" align=\"right\" valign=\"top\">Fecha Nac.:
                <select name=\"dia_nac\" class=\"b-casillas\" id=\"dia_nac\" autocomplete=\"off\">
                  <option value=\"null\">D&iacute;a</option>
                  <option value=\"1\">1</option>
                  <option value=\"2\">2</option>
                  <option value=\"3\">3</option>
                  <option value=\"4\">4</option>
                  <option value=\"5\">5</option>
                  <option value=\"6\">6</option>
                  <option value=\"7\">7</option>
                  <option value=\"8\">8</option>
                  <option value=\"9\">9</option>
                  <option value=\"10\">10</option>
                  <option value=\"11\">11</option>
                  <option value=\"12\">12</option>
                  <option value=\"13\">13</option>
                  <option value=\"14\">14</option>
                  <option value=\"15\">15</option>
                  <option value=\"16\">16</option>
                  <option value=\"17\">17</option>
                  <option value=\"18\">18</option>
                  <option value=\"19\">19</option>
                  <option value=\"20\">20</option>
                  <option value=\"21\">21</option>
                  <option value=\"22\">22</option>
                  <option value=\"23\">23</option>
                  <option value=\"24\">24</option>
                  <option value=\"25\">25</option>
                  <option value=\"26\">26</option>
                  <option value=\"27\">27</option>
                  <option value=\"28\">28</option>
                  <option value=\"29\">29</option>
                  <option value=\"30\">30</option>
                  <option value=\"31\">31</option>
                </select>
                <select name=\"mes_nac\" class=\"b-casillas\" id=\"mes_nac\");\" autocomplete=\"off\">
                  <option value=\"null\">Mes</option>
                  <option value=\"01\">Ene</option>
                  <option value=\"02\">Feb</option>
                  <option value=\"03\">Mar</option>
                  <option value=\"04\">Abr</option>
                  <option value=\"05\">May</option>
                  <option value=\"06\">Jun</option>
                  <option value=\"07\">Jul</option>
                  <option value=\"08\">Ago</option>
                  <option value=\"09\">Sep</option>
                  <option value=\"10\">Oct</option>
                  <option value=\"11\">Nov</option>
                  <option value=\"12\">Dic</option>
                </select>
                <select name=\"ano_nac\" class=\"b-casillas\" id=\"ano_nac\");\" autocomplete=\"off\">
                  <option value=\"null\" selected=\"selected\">A&ntilde;o</option>
                  <option value=\"2006\">2006</option>
                  <option value=\"2005\">2005</option>
                  <option value=\"2004\">2004</option>
                  <option value=\"2003\">2003</option>
                  <option value=\"2002\">2002</option>
                  <option value=\"2001\">2001</option>
                  <option value=\"2000\">2000</option>
                  <option value=\"1999\">1999</option>
                  <option value=\"1998\">1998</option>
                  <option value=\"1997\">1997</option>
                  <option value=\"1996\">1996</option>
                  <option value=\"1995\">1995</option>
                  <option value=\"1994\">1994</option>
                  <option value=\"1993\">1993</option>
                  <option value=\"1992\">1992</option>
                  <option value=\"1991\">1991</option>
                  <option value=\"1990\">1990</option>
                  <option value=\"1989\">1989</option>
                  <option value=\"1988\">1988</option>
                  <option value=\"1987\">1987</option>
                  <option value=\"1986\">1986</option>
                  <option value=\"1985\">1985</option>
                  <option value=\"1984\">1984</option>
                  <option value=\"1983\">1983</option>
                  <option value=\"1982\">1982</option>
                  <option value=\"1981\">1981</option>
                  <option value=\"1980\">1980</option>
                  <option value=\"1979\">1979</option>
                  <option value=\"1978\">1978</option>
                  <option value=\"1977\">1977</option>
                  <option value=\"1976\">1976</option>
                  <option value=\"1975\">1975</option>
                  <option value=\"1974\">1974</option>
                  <option value=\"1973\">1973</option>
                  <option value=\"1972\">1972</option>
                  <option value=\"1971\">1971</option>
                  <option value=\"1970\">1970</option>
                  <option value=\"1969\">1969</option>
                  <option value=\"1968\">1968</option>
                  <option value=\"1967\">1967</option>
                  <option value=\"1966\">1966</option>
                  <option value=\"1965\">1965</option>
                  <option value=\"1964\">1964</option>
                  <option value=\"1963\">1963</option>
                  <option value=\"1962\">1962</option>
                  <option value=\"1961\">1961</option>
                  <option value=\"1960\">1960</option>
                  <option value=\"1959\">1959</option>
                  <option value=\"1958\">1958</option>
                  <option value=\"1957\">1957</option>
                  <option value=\"1956\">1956</option>
                  <option value=\"1955\">1955</option>
                  <option value=\"1954\">1954</option>
                  <option value=\"1953\">1953</option>
                  <option value=\"1952\">1952</option>
                  <option value=\"1951\">1951</option>
                  <option value=\"1950\">1950</option>
                  <option value=\"1949\">1949</option>
                  <option value=\"1948\">1948</option>
                  <option value=\"1947\">1947</option>
                  <option value=\"1946\">1946</option>
                  <option value=\"1945\">1945</option>
                  <option value=\"1944\">1944</option>
                  <option value=\"1943\">1943</option>
                  <option value=\"1942\">1942</option>
                  <option value=\"1941\">1941</option>
                  <option value=\"1940\">1940</option>
                  <option value=\"1939\">1939</option>
                  <option value=\"1938\">1938</option>
                  <option value=\"1937\">1937</option>
                  <option value=\"1936\">1936</option>
                  <option value=\"1935\">1935</option>
                  <option value=\"1934\">1934</option>
                  <option value=\"1933\">1933</option>
                  <option value=\"1932\">1932</option>
                  <option value=\"1931\">1931</option>
                  <option value=\"1930\">1930</option>
                  <option value=\"1929\">1929</option>
                  <option value=\"1928\">1928</option>
                  <option value=\"1927\">1927</option>
                  <option value=\"1926\">1926</option>
                  <option value=\"1925\">1925</option>
                  <option value=\"1924\">1924</option>
                  <option value=\"1923\">1923</option>
                  <option value=\"1922\">1922</option>
                  <option value=\"1921\">1921</option>
                  <option value=\"1920\">1920</option>
                  <option value=\"1919\">1919</option>
                  <option value=\"1918\">1918</option>
                  <option value=\"1917\">1917</option>
                  <option value=\"1916\">1916</option>
                  <option value=\"1915\">1915</option>
                  <option value=\"1914\">1914</option>
                  <option value=\"1913\">1913</option>
                  <option value=\"1912\">1912</option>
                  <option value=\"1911\">1911</option>
                  <option value=\"1910\">1910</option>
                </select></td>
              <td></td>
            <tr>
              <td height=\"6\" colspan=\"6\" valign=\"top\"><img src=\"imagenes_index/linea.png\" width=\"290\" height=\"6\" /></td>
            <tr>
              <td height=\"3\"></td>
              <td></td>
              <td></td>
              <td></td>
              <td></td>
              <td></td>
            <tr>
              <td height=\"28\"></td>
              <td colspan=\"4\" align=\"right\" valign=\"top\"><span class=\"principal\"><a href=\"http://www.mapcity.cl/\" target=\"_blank\">carpeta: </a>
                  <input name=\"carpeta\" type=\"text\" class=\"b-casillas\" id=\"carpeta\" />
              </span></td>      
              <td></td>
            <tr>
              <td height=\"6\" colspan=\"6\" valign=\"top\"><img src=\"imagenes_index/linea.png\" width=\"290\" height=\"6\" /></td>
            <tr>
              <td height=\"3\"></td>
              <td></td>
              <td></td>
              <td></td>
              <td></td>
              <td></td>
            <tr>
              <td height=\"28\"></td>
              <td colspan=\"4\" align=\"right\" valign=\"top\"><span class=\"principal\">Pais:
                  <select name=\"pais\" class=\"b-casillas\" id=\"pais\");\" autocomplete=\"off\">
                    <option value=\"null\" selected=\"selected\"></option>
                    <option value=\"Afganistan\">Afganistan</option>
                    <option value=\"Argenitna\">Argentina</option>
                    <option value=\"Brazil\">Brazil</option>
                    <option value=\"Chile\">Chile</option>
                    <option value=\"Estados Unidos\">Estados Unidos</option>
                    <option value=\"Inglaterra\">Inglaterra</option>
                    <option value=\"Nueva Zelanda\">Nueva Zelanda</option>
                    <option value=\"Rausia\">Rusia</option>
                    <option value=\"Mexico\">Mexico</option>
                                                                        </select>
              </span></td>      
              <td></td>
            <tr>
                <td height=\"6\" colspan=\"6\" valign=\"top\"><img src=\"imagenes_index/linea.png\" width=\"290\" height=\"6\" /></td>
            <tr>
              <td height=\"3\"></td>
              <td></td>
              <td></td>
              <td></td>
              <td></td>
              <td></td>
            <tr>
              <td height=\"28\"></td>
              <td colspan=\"4\" align=\"right\" valign=\"top\"><span class=\"principal\">Sexo:
                  <select  name=\"sexo\" class=\"b-casillas\" id=\"sexo\");\" autocomplete=\"off\">
                    <option value=\"null\" selected=\"selected\"></option>
                    <option value=\"Masculino\">Masculino</option>
                    <option value=\"Femenino\">Femenino</option>
                  </select>
              </span></td>
              <td></td>
            <tr>
              <td height=\"40\" colspan=\"6\" align=\"right\" valign=\"top\" background=\"imagenes_index/linea_g.png\" class=\"Estilo27\"><label id=\"pos_right\" onclick=\"popup_show('popup', 'popup_drag', 'popup_exit', 'mouse',               -10, -10);\" ><br />
                  <a href=\"#\">&iquest;Por qu&eacute; toda esta informaci&oacute;n es importante?</a>&nbsp;&nbsp;&nbsp;&nbsp;</label></td>            <tr>
              <td height=\"9\"></td>
              <td></td>
              <td></td>
              <td></td>
              <td></td>
              <td></td>
            <tr>
              <td height=\"41\"></td>
              <td></td>
              <td></td>
              <td valign=\"top\"><div class=\"submitDiv\"><input id=\"submitButton\" src=\"imagenes_index/registrar.png\" type=\"image\" value=\"done\"/></div><input name=\"usuario\" type=\"hidden\" id=\"usuario\" value='$aFormValues[user]'><input name=\"name\" type=\"hidden\" id=\"name\" value='$aFormValues[nombre]'><input name=\"apellido\" type=\"hidden\" id=\"apellido\" value='$aFormValues[apellidos]'><input name=\"password\" type=\"hidden\" id=\"password\" value='$aFormValues[pass]'></td>
              <td></td>
              <td></td>
            <tr>
              <td height=\"12\"></td>
              <td></td>
              <td></td>
              <td></td>
              <td></td>
              <td></td>
            <tr>
              <td height=\"48\"></td>
              <td></td>
              <td colspan=\"3\" align=\"left\" valign=\"top\" class=\"Blancas\"> Al pulsar &quot;Registrarse&quot;, est&aacute;s indicando que has le&iacute;do y est&aacute;s de acuerdo con las Condiciones de Uso y la Pol&iacute;tica de Privacidad.</td>
              <td></td>
            <tr>
              <td height=\"9\"></td>
              <td></td>
              <td></td>
              <td></td>
              <td></td>
              <td></td>            
    </table>";
		$sForm .="</form>";
		$objResponse->assign("formDiv","innerHTML",$sForm);
		$objResponse->assign("outputDiv","innerHTML","\$_SESSION:<pre>".var_export($_SESSION,true)."</pre>");
	}
	else
	{
		$objResponse->assign("submitButton","value","continue ->");
		$objResponse->assign("submitButton","disabled",false);
	}
	
	return $objResponse;
}

function processPersonalData($aFormValues)
{
	$objResponse = new xajaxResponse();
	
	$bError = false;
	if (trim($aFormValues['dia_nac']) == "null")
	{
		$objResponse->alert("Porfavor ingrese su dia de nacimiento");
		$bError = true;
	}
	if (trim($aFormValues['mes_nac']) == "null")
	{
		$objResponse->alert("Porfavor ingrese su mes de nacimiento");
		$bError = true;
	}
	if (trim($aFormValues['ano_nac']) == "null")
	{
		$objResponse->alert("Porfavor ingrese su anio de nacimiento");
		$bError = true;
	}
	if (trim($aFormValues['carpeta']) == "")
	{
		$objResponse->alert("Porfavor ingrese su carpeta.");
		$bError = true;
	}
	if (trim($aFormValues['sexo']) == "null")
	{
		$objResponse->alert("Porfavor elija su sexo.");
		$bError = true;
	}
	if (trim($aFormValues['pais']) == "null")
	{
		$objResponse->alert("Porfavor elija su pais.");
		$bError = true;
	}
	
	if (!$bError)
	{
	
	
$user = stripslashes($aFormValues['usuario']);
$user = strip_tags($user);
$pass = stripslashes($aFormValues['password']);
$pass = strip_tags($pass);
$nombre = stripslashes($aFormValues['name']);
$nombre = strip_tags($nombre);
$ocup = 'Nueva Ocupacion';
$ocup_s = 'Nueva Ocupacion';
$apellidos = stripslashes($aFormValues['apellido']);
$apellidos = strip_tags($apellidos);
$carpeta = stripslashes($aFormValues['carpeta']);
$carpeta = strip_tags($carpeta);
$foto = stripslashes($aFormValues['foto']);
$foto = strip_tags("$carpeta/new2.png");
$sexo = stripslashes($aFormValues['sexo']);
$sexo = strip_tags($sexo);
$d =stripslashes($aFormValues['dia_nac']);
$d = strip_tags($d);
$m =stripslashes($aFormValues['mes_nac']);
$m = strip_tags($m);
$a =stripslashes($aFormValues['ano_nac']);
$a = strip_tags($a);
$fecha_nac = stripslashes($aFormValues['fecha_nac']);
$fecha_nac = strip_tags("$d/$m/$a");
$pais = stripslashes($aFormValues['pais']);
$pais = strip_tags($pais);
$fecha_registro = date('j F Y');
$hora_registro = date('h:i:s A');
$IP = $_SERVER["REMOTE_ADDR"];
$nivel = 4;
$cc = stripslashes($aFormValues['cc']);
$cc = strip_tags("$carpeta");

	$ssql = "INSERT INTO usuarios (user, pass, nombre, foto, apellidos, fecha_nac, ocup, ocup_s, pais, sexo, carpeta, nivel, fecha_registro, hora_registro, IP) VALUES ('$user','$pass','$nombre','$foto','$apellidos','$fecha_nac','$ocup','$ocup_s','$pais','$sexo','$carpeta','$nivel','$fecha_registro','$hora_registro','$IP')";
	if (mkdir("$cc", 0777)){
      $salida = "Creada correctamente";
   }else{
      $salida = "No se ha creado.";
   }
   if (mysql_query($ssql)){
      $salida = "Insertado correctamente";
   }else{
      $salida = "No se ha insertado. Este es el error: " . mysql_error();
   }

		
		$objResponse->assign("formDiv","style.textAlign","center");		
		$sForm = "&iexcl;Felicitaciones <span class=\"Titulos\"><strong>$aFormValues[name]</strong></span>!, ya eres parte de Roomba. Ahora puedes entrar a tu cuenta ingresando tu nombre de E-mail y tu Password en la casilla de la derecha.";
		$objResponse->assign("formDiv","innerHTML",$sForm);
		$objResponse->assign("outputDiv","innerHTML","\$_SESSION:<pre>".var_export($_SESSION,true)."</pre>");
	}
	else
	{
		$objResponse->assign("submitButton","value","done");
		$objResponse->assign("submitButton","disabled",false);
	}
	
	return $objResponse;
}

$xajax->processRequest();
?>