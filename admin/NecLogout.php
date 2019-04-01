<?php
session_start();
$_SESSION['loggedin']="no";
header('Location: NecLogin.php');
exit;
?>