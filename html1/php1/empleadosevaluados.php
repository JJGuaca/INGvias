<?php
require("../../php/conexion.php");
$consulta= "SELECT COUNT(id) FROM `resultado_estrategico` WHERE TOTAL>0;";
$consulta .="SELECT COUNT(id) FROM `resultado_operativo` WHERE  TOTAL>0;";
$consulta .="SELECT COUNT(id) FROM `resultado_tactico` WHERE  TOTAL>0;";
$consulta .="SELECT COUNT(id) FROM `resultado_tacticoestrategico` WHERE TOTAL>0";
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
	} while (mysqli_more_results($con) && mysqli_next_result($con));

}
echo $res;
json_encode($res);
	

?>