<?php
// *** Logout the current user.
$logoutGoTo = "index.php";
if (!isset($_SESSION)) {
  session_start();
}
$_SESSION['usuario'] = NULL;
unset($_SESSION['usuario']);
if ($logoutGoTo != "") {header("Location: $logoutGoTo");
exit;
}
?>