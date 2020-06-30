<?php
//MINTRABAJO
//$user='estratco_jorgua';
//$pass='XYTEN1(q2m6b';
//$server='localhost';
//$dbase='estratco_empleados';
//INGENIERIADEVIASSAS
$user='u936710092_estratcojj';
$pass='u93671009220201303';
$server='localhost';
$dbase='u936710092_empleados';
//loclahost
//$user='root';
//$pass='';
//$server='localhost';
//$dbase='estratco_empleados';
$con= mysqli_connect($server, $user, $pass, $dbase);

if ($con->connect_errno) {
 	echo "Fallo en la conexion a la base de datos: (".$con->connect_errno.") ".$con->connect_errno;
 	exit();
 }

?>