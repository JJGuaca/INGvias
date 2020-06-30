<?php
session_start();
error_reporting(0);
print $_SESSION['Nombres_j'];
print(" ");
print $_SESSION['Apellidos_j'];
$var=$_SESSION['Nombres_j'];
if (empty($var)) {
	echo "<h1>LogIn de Nuevo</h1>";
	$_SESSION =  array();
	session_destroy();
	die();
	header("Location:../html/Index.html");

}
?>