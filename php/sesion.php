<?php
session_start();
error_reporting(0);
print $_SESSION['Nombres_u'];
print(" ");
print $_SESSION['Apellidos_u'];
$var=$_SESSION['Nombres_u'];
if (empty($var)) {
	echo "<h1>Debe iniciar Sesion de nuevo, gracias</h1>";
	$_SESSION =  array();
	session_destroy();
	die();
	header("Location:../html/index.html");

}
?>