<?php
require("../../php/conexion.php");
$id=$_POST['documento'];

$consulta= "SELECT Concat(evaluados.Nombres,' ',evaluados.Apellidos)Nombres,idIdentificacion,resultado_estrategico.TOTAL,categoria.nombre Categoria FROM resultado_estrategico 
	INNER JOIN evaluados on evaluados.Identificacion=resultado_estrategico.idIdentificacion 
	INNER JOIN categoria on evaluados.idCategoria=categoria.id
	WHERE resultado_estrategico.idIdentificacionConsultor=$id;";
$consulta .="SELECT Concat(evaluados.Nombres,' ',evaluados.Apellidos)Nombres,idIdentificacion,resultado_operativo.TOTAL,categoria.nombre Categoria FROM resultado_operativo 
	INNER JOIN evaluados on evaluados.Identificacion=resultado_operativo.idIdentificacion
	INNER JOIN categoria on evaluados.idCategoria=categoria.id
	WHERE  resultado_operativo.idIdentificacionConsultor=$id;";
$consulta .="SELECT Concat(evaluados.Nombres,' ',evaluados.Apellidos)Nombres,idIdentificacion,resultado_tactico.TOTAL,categoria.nombre Categoria FROM resultado_tactico 
	INNER JOIN evaluados on evaluados.Identificacion=resultado_tactico.idIdentificacion 
	INNER JOIN categoria on evaluados.idCategoria=categoria.id
	WHERE  resultado_tactico.idIdentificacionConsultor=$id;";
$consulta .="SELECT Concat(evaluados.Nombres,' ',evaluados.Apellidos)Nombres,idIdentificacion,resultado_tacticoestrategico.TOTAL,categoria.nombre Categoria FROM resultado_tacticoestrategico 
	INNER JOIN evaluados on evaluados.Identificacion=resultado_tacticoestrategico.idIdentificacion 
	INNER JOIN categoria on evaluados.idCategoria=categoria.id
	WHERE  resultado_tacticoestrategico.idIdentificacionConsultor=$id;";
$res=0;
$respuesta="Evaluado";
$respuesta1="Sin Evaluar";
if(mysqli_multi_query($con,$consulta)){
	do{
		if ($result=mysqli_store_result($con)) {

			while ($row=mysqli_fetch_row($result)) {
				echo" <table class='table table-striped table-hover' width='120%'>
						<tr>
							<td width='20%'>".$row[0]."</td><td width='20%' align='center'>".$row[1]."</td>";
				if ($row[2]>0){
					if ($row[2]>4.4) {
						echo "<td width='20%' align='center' class='btn-primary'>".$respuesta."</td><td width='20%' align='center'class='btn-info'>".$row[2]."</td><td  width='20%' align='center'>".$row[3]."</td";

					}elseif ($row[2]>3.4) {
						echo "<td width='20%' align='center' class='btn-primary'>".$respuesta."</td><td width='20%' align='center'class='btn-success'>".$row[2]."</td><td  width='20%' align='center'>".$row[3]."</td";

					}elseif ($row[2]>1.9) {
						echo "<td width='20%' align='center' class='btn-primary'>".$respuesta."</td><td width='20%' align='center'class='btn-warning'>".$row[2]."</td><td  width='20%' align='center'>".$row[3]."</td";

					}else{
						echo "<td width='20%' align='center' class='btn-primary'>".$respuesta."</td><td width='20%' align='center'class='btn-danger'>".$row[2]."</td><td  width='20%' align='center'>".$row[3]."</td";

					}
					
				}else{
					echo "<td colspan='2' width='40%' align='center' class='btn-warning'>".$respuesta1."</td><td  width='20%' align='center'>".$row[3]."</td>";
				}
				echo "</tr></table>";
			}
			mysqli_free_result($result);
		}
	} while (mysqli_more_results($con) && mysqli_next_result($con));

}

?>	