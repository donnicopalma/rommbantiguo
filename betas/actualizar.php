<?php
require_once('config.php');
if(isset($_SESSION[usuario])) {
	echo 'Bienvenido <b>' . $_SESSION[usuario] . '</b><br />';
	if($rango == 'Administrador') {
		echo '<a href="pagAdmin.php">P&aacute;gina de Administrador</a>&nbsp;|&nbsp;';
	} 
	echo '<!--Este código es únacamente	del formulario -->
<style type="text/css">
<!--
.Estilo1 {
	font-size: 9px;
	color: #FF9900;
}
.Estilo2 {color: #FF9900}
-->
</style>

<center>
  
</center>
<table width="443" border="0" cellpadding="0" cellspacing="0">
  <!--DWLayoutTable-->
  <tr>
    <td width="443" height="227" valign="top"><form name="registro" method="post" action="actualizar2.php">
      <label></label>
      <div align="center">
        <table width="443" border="0">
          <!--DWLayoutTable-->
          <tr>
            <td width="200" height="24" valign="top">Sexo</td>
              <td width="227" valign="top"><select name="sexo" id="sexo">
                  <option value="null" selected="selected"></option>
                  <option>Masculino</option>
                  <option>Femenino</option>
                  </select>
                <span class="Estilo1">
                <label> </label>
                </span></td>
              <td width="1"></td>
            </tr>
          <tr>
            <td height="24" valign="top">Fecha de nacimiento</td>
              <td valign="top"><select name="dia_nac" id="dia_nac" autocomplete="off">
                  <option value="-1">D&iacute;a</option>
                  <option value="1">1</option>
                  <option value="2">2</option>
                  <option value="3">3</option>
                  <option value="4">4</option>
                  <option value="5">5</option>
                  <option value="6">6</option>
                  <option value="7">7</option>
                  <option value="8">8</option>
                  <option value="9">9</option>
                  <option value="10">10</option>
                  <option value="11">11</option>
                  <option value="12">12</option>
                  <option value="13">13</option>
                  <option value="14">14</option>
                  <option value="15">15</option>
                  <option value="16">16</option>
                  <option value="17">17</option>
                  <option value="18">18</option>
                  <option value="19">19</option>
                  <option value="20">20</option>
                  <option value="21">21</option>
                  <option value="22">22</option>
                  <option value="23">23</option>
                  <option value="24">24</option>
                  <option value="25">25</option>
                  <option value="26">26</option>
                  <option value="27">27</option>
                  <option value="28">28</option>
                  <option value="29">29</option>
                  <option value="30">30</option>
                  <option value="31">31</option>
                  </select>
                <select name="mes_nac" id="mes_nac");" autocomplete="off">
                  <option value="null">Mes</option>
                  <option value="01">Ene</option>
                  <option value="02">Feb</option>
                  <option value="03">Mar</option>
                  <option value="04">Abr</option>
                  <option value="05">May</option>
                  <option value="06">Jun</option>
                  <option value="07">Jul</option>
                  <option value="08">Ago</option>
                  <option value="09">Sep</option>
                  <option value="10">Oct</option>
                  <option value="11">Nov</option>
                  <option value="12">Dic</option>
                </select>
                <select name="ano_nac" id="ano_nac");" autocomplete="off">
                  <option value="-1" selected="selected">A&ntilde;o</option>
                  <option value="2006">2006</option>
                  <option value="2005">2005</option>
                  <option value="2004">2004</option>
                  <option value="2003">2003</option>
                  <option value="2002">2002</option>
                  <option value="2001">2001</option>
                  <option value="2000">2000</option>
                  <option value="1999">1999</option>
                  <option value="1998">1998</option>
                  <option value="1997">1997</option>
                  <option value="1996">1996</option>
                  <option value="1995">1995</option>
                  <option value="1994">1994</option>
                  <option value="1993">1993</option>
                  <option value="1992">1992</option>
                  <option value="1991">1991</option>
                  <option value="1990">1990</option>
                  <option value="1989">1989</option>
                  <option value="1988">1988</option>
                  <option value="1987">1987</option>
                  <option value="1986">1986</option>
                  <option value="1985">1985</option>
                  <option value="1984">1984</option>
                  <option value="1983">1983</option>
                  <option value="1982">1982</option>
                  <option value="1981">1981</option>
                  <option value="1980">1980</option>
                  <option value="1979">1979</option>
                  <option value="1978">1978</option>
                  <option value="1977">1977</option>
                  <option value="1976">1976</option>
                  <option value="1975">1975</option>
                  <option value="1974">1974</option>
                  <option value="1973">1973</option>
                  <option value="1972">1972</option>
                  <option value="1971">1971</option>
                  <option value="1970">1970</option>
                  <option value="1969">1969</option>
                  <option value="1968">1968</option>
                  <option value="1967">1967</option>
                  <option value="1966">1966</option>
                  <option value="1965">1965</option>
                  <option value="1964">1964</option>
                  <option value="1963">1963</option>
                  <option value="1962">1962</option>
                  <option value="1961">1961</option>
                  <option value="1960">1960</option>
                  <option value="1959">1959</option>
                  <option value="1958">1958</option>
                  <option value="1957">1957</option>
                  <option value="1956">1956</option>
                  <option value="1955">1955</option>
                  <option value="1954">1954</option>
                  <option value="1953">1953</option>
                  <option value="1952">1952</option>
                  <option value="1951">1951</option>
                  <option value="1950">1950</option>
                  <option value="1949">1949</option>
                  <option value="1948">1948</option>
                  <option value="1947">1947</option>
                  <option value="1946">1946</option>
                  <option value="1945">1945</option>
                  <option value="1944">1944</option>
                  <option value="1943">1943</option>
                  <option value="1942">1942</option>
                  <option value="1941">1941</option>
                  <option value="1940">1940</option>
                  <option value="1939">1939</option>
                  <option value="1938">1938</option>
                  <option value="1937">1937</option>
                  <option value="1936">1936</option>
                  <option value="1935">1935</option>
                  <option value="1934">1934</option>
                  <option value="1933">1933</option>
                  <option value="1932">1932</option>
                  <option value="1931">1931</option>
                  <option value="1930">1930</option>
                  <option value="1929">1929</option>
                  <option value="1928">1928</option>
                  <option value="1927">1927</option>
                  <option value="1926">1926</option>
                  <option value="1925">1925</option>
                  <option value="1924">1924</option>
                  <option value="1923">1923</option>
                  <option value="1922">1922</option>
                  <option value="1921">1921</option>
                  <option value="1920">1920</option>
                  <option value="1919">1919</option>
                  <option value="1918">1918</option>
                  <option value="1917">1917</option>
                  <option value="1916">1916</option>
                  <option value="1915">1915</option>
                  <option value="1914">1914</option>
                  <option value="1913">1913</option>
                  <option value="1912">1912</option>
                  <option value="1911">1911</option>
                  <option value="1910">1910</option>
                </select></td>
              <td></td>
            </tr>
          <tr>
            <td height="1"></td>
              <td rowspan="2" valign="top"><select name="ocupacion" id="ocupacion">
                  <option value="'. $_SESSION[usuario] .'" selected></option>
                  <option>Jardinero</option>
                  <option>Roombero</option>
                  <option>Pat&aacute;n</option>
                  <option>Carretero</option>
                  <option>Fumador</option>
                  </select>
                <span class="Estilo1">
                <label> </label>
                </span></td>
              <td></td>
            </tr>
          <tr>
            <td height="21" valign="top">Ocupaci&oacute;n</td>
              <td></td>
            </tr>
          <tr>
            <td height="1"></td>
              <td rowspan="2" valign="top"><select name="ocupacion_s" size="1" id="ocupacion_s">
                  <option value="null" selected="selected"></option>
                  <option>DIOS</option>
                  <option>SAT&Aacute;N</option>
                  <option>TROLO</option>
                  </select>
                <span class="Estilo1">
                <label> </label>
                </span></td>
              <td></td>
            </tr>
          <tr>
            <td height="21" valign="top">Ocupaci&oacute;n so&ntilde;ada
              <label></label></td>
              <td></td>
            </tr>
          
          
          <tr>
            <td height="24" valign="top">Pa&iacute;s</td>
              <td valign="top"><select name="pais" size="1" id="pais">
                  <option value="null" selected="selected"></option>
                  <option>Chile</option>
                  </select>
                <span class="Estilo1">
                <label> </label>
                </span></td>
              <td></td>
            </tr>
          <tr>
            <td height="1"></td>
              <td rowspan="2" valign="top"><select name="region" size="1" id="region">
                  <option value="null" selected="selected"></option>
                  <option>Metropolitana</option>
                  <option>I</option>
                  <option>II</option>
                  <option>III</option>
                  <option>IV</option>
                  <option>V</option>
                  </select>
                <span class="Estilo1">
                <label> </label>
                </span></td>
              <td></td>
            </tr>
          <tr>
            <td height="21" valign="top">Regi&oacute;n</td>
              <td></td>
            </tr>
          <tr>
            <td height="1"></td>
              <td rowspan="2" valign="top"><label>
                <input name="zipcode" type="text" id="zipcode" value="'. $_SESSION['sexo'] .'" />
                </label></td>
              <td></td>
            </tr>
          <tr>
            <td height="21" valign="top">Zipcode</td>
              <td></td>
            </tr>
          </table>
        </div>
        <p align="center" class="Estilo1"><label></label>
          <label></label><label>
          <input type="submit" name="registro" id="registro" value="Registrarse" />
          </label>
          | 
          <label>
          <input type="submit" name="borrar" id="borrar" value="Borrar todo" />
          </label>
        </p>
    </form></td>
  </tr>
</table>
';
} else {
	echo 'Bienvenido <b>Visitante</b><br />
	Por favor <a href="index.php">reg&iacute;strate</a> o <a href="login.php">logu&eacute;ate</a>';
}
?>