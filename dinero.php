<?php
require_once('config.php');
if(isset($_SESSION[usuario])) {
	echo 'Bienvenido <b>' . $_SESSION[usuario] . '</b><br />';
		echo $query = mysql_query("SELECT * FROM usuarios"); 
		while ($row = mysql_fetch_array($query))
     { 
        echo $row['id']; 
	} 
	}
?>