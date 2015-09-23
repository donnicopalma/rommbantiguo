<?php
session_id();
session_destroy(); //destruimos la sesion
echo '<script language="JavaScript">window.location.href = "index.php";</script>';
?>