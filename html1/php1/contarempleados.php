<?php
require("../../php/conexion.php");
$consulta=mysqli_query($con, "SELECT COUNT(Nombres) FROM `evaluados`");
$filas=array();

while ($filas=mysqli_fetch_array($consulta, MYSQLI_ASSOC)) {
	echo $filas['COUNT(Nombres)'];
	json_encode($filas['COUNT(Nombres)']);
	
}

?>