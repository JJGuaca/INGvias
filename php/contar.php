<?php
require("ses.php");
require("conexion2.php");
$id=$_SESSION['id'];
$consulta=mysqli_query($con, "SELECT COUNT(Nombres) FROM `evaluados` WHERE idConsultor=$id");
$filas=array();

while ($filas=mysqli_fetch_array($consulta, MYSQLI_ASSOC)) {
	echo $filas['COUNT(Nombres)'];
	json_encode($filas['COUNT(NOMBRES)']);
	
}

?>