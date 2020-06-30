<?php
require("../../php/conexion.php");
$id=$_POST['docu'];


$consulta=mysqli_query($con, "SELECT COUNT(u_consultor.Identificacion)Cantidad FROM evaluados INNER JOIN u_consultor ON u_consultor.Identificacion=evaluados.idConsultor WHERE evaluados.idConsultor=$id");
$filas=array();
	while ($filas=mysqli_fetch_array($consulta, MYSQLI_ASSOC)) {
		echo $filas['Cantidad'];
		json_encode($filas['Cantidad']);
	}


?>