<?php
require("ses.php");
require("conexion2.php");
$id=$_SESSION['id'];
$consulta= "SELECT COUNT(id) FROM `resultado_estrategico` WHERE idIdentificacionConsultor=$id and TOTAL>0;";
$consulta .="SELECT COUNT(id) FROM `resultado_operativo` WHERE idIdentificacionConsultor=$id and TOTAL>0;";
$consulta .="SELECT COUNT(id) FROM `resultado_tactico` WHERE idIdentificacionConsultor=$id and TOTAL>0;";
$consulta .="SELECT COUNT(id) FROM `resultado_tacticoestrategico` WHERE idIdentificacionConsultor=$id and TOTAL>0";
$res=0;
if(mysqli_multi_query($con,$consulta)){
	do{
		if ($result=mysqli_store_result($con)) {

			while ($row=mysqli_fetch_row($result)) {
				$res=$res+$row[0];
				# code...
			}
			mysqli_free_result($result);
		}
	} while (mysqli_next_result($con));

}
echo $res;
json_encode($res);
	

?>