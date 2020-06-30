<?php
require"ses.php";
require("conexion2.php");
$id=$_SESSION['id'];
$cat=$_POST['cat'];
	
if ($cat==1) {
	$consulta =mysqli_query($con, "SELECT evaluados.Nombres,evaluados.Apellidos, evaluados.Identificacion, Gestion_Desarrollo, Ges_Financiera, Orientacion_Res,AdaptabilidadC, SGC, SIndust_SaOcupa, TOTAL FROM resultado_estrategico INNER JOIN evaluados ON evaluados.Identificacion=resultado_estrategico.idIdentificacion INNER JOIN u_consultor ON u_consultor.Identificacion=resultado_estrategico.idIdentificacionConsultor WHERE 	idIdentificacionConsultor=$id");
	
			echo "<table class='table table-striped table-hover' style='font-size: 90%;text-align: left;'>
                  <tr>
                    <th>Nombres</th>
                    <th>Apellidos</th>
                    <th>#Doc.</th>
                    <th>Mod.1</th>
                    <th>Mod.2</th>
                    <th>Mod.3</th>
                    <th>Mod.4</th>
                    <th>Mod.5</th>
                    <th>Mod.6</th>
                    <th>Calificación</th>
                    <th>Descargar</th>
                  </tr>";
			if(mysqli_num_rows($consulta) > 0){
				while ( $row = mysqli_fetch_array($consulta, MYSQLI_ASSOC)) {
				echo "
				  <tr>	
					<td>".$row['Nombres']."</td>
					<td>".$row['Apellidos']."</td>
					<td>".$row['Identificacion']."</td>
					";
					if ($row['Gestion_Desarrollo']=='0') {
						echo "<td><a href='../html2/php2/evalestrategico.php?var1=$row[Identificacion]' class='btn btn-primary'style='padding:3px 5px; font-size:100%;'>Evaluar</td>";
						# code...
					}else{
						echo "<td>".$row['Gestion_Desarrollo']."</td>";
					}
					if ($row['Ges_Financiera']=='0') {
						echo "<td><a href='../html2/php2/evalestrategico.php?var1=$row[Identificacion]' class='btn btn-primary'style='padding:3px 5px; font-size:100%;'>Evaluar</td>";
						# code...
					}else{
						echo "<td>".$row['Ges_Financiera']."</td>";
					}
					if ($row['Orientacion_Res']=='0') {
						echo "<td><a href='../html2/php2/evalestrategico.php?var1=$row[Identificacion]' class='btn btn-primary'style='padding:3px 5px; font-size:100%;'>Evaluar</td>";
						# code...
					}else{
						echo "<td>".$row['Orientacion_Res']."</td>";
					}
					if ($row['AdaptabilidadC']=='0') {
						echo "<td><a href='../html2/php2/evalestrategico.php?var1=$row[Identificacion]' class='btn btn-primary'style='padding:3px 5px; font-size:100%;'>Evaluar</td>";
						# code...
					}else{
						echo "<td>".$row['AdaptabilidadC']."</td>";
					}
					if ($row['SGC']=='0') {
						echo "<td><a href='../html2/php2/evalestrategico.php?var1=$row[Identificacion]' class='btn btn-primary'style='padding:3px 5px; font-size:100%;'>Evaluar</td>";
						# code...
					}else{
						echo "<td>".$row['SGC']."</td>";
					}
					if ($row['SIndust_SaOcupa']=='0') {
						echo "<td><a href='../html2/php2/evalestrategico.php?var1=$row[Identificacion]' class='btn btn-primary'style='padding:3px 5px; font-size:100%;'>Evaluar</td>";
						# code...
					}else{
						echo "<td>".$row['SIndust_SaOcupa']."</td>";
					}

					if($row['TOTAL']=='0'){
						echo "<td>".$row['TOTAL']."</td>
						  <td><a class='btn btn-danger glyphicon glyphicon-remove-circle' style='padding:0px 19px; font-size:125%;'>
						  </td></tr>";
					}else{
							echo "<td>".$row['TOTAL']."</td>
						  <td><a class='btn btn-primary glyphicon glyphicon-download-alt btn btn-primary' href='../fpdf/reporteEstrategico.php?var1=$row[Identificacion]' style='padding:0px 19px; font-size:125%;'></td></tr>";
						}
				}
			}
			else{
			echo "<p>No hay datos Aun registrados<br>";
		#echo "Error ".$consulta." <br>".mysqli_error($con);
		}

	echo "</table>";
	mysqli_close($con);
	# code...
}elseif ($cat==2) {
	$consulta =mysqli_query($con, "SELECT evaluados.Nombres,evaluados.Apellidos, evaluados.Identificacion, GES_NEGYEXEL,CON_REL_INTER,GES_RECU,ADAP_CAMBIO,ORIEN_RESULT,SGC,SEG_IND_SAL_OCUP, TOTAL from resultado_tacticoestrategico inner join evaluados on evaluados.Identificacion=resultado_tacticoestrategico.idIdentificacion inner join u_consultor on u_consultor.Identificacion=resultado_tacticoestrategico.idIdentificacionConsultor WHERE idIdentificacionConsultor=$id");
	
	echo "<table class='table table-striped table-hover' style='font-size: 90%;text-align: left;'>
                  <tr>
                    <th>Nombres</th>
                    <th>Apellidos</th>
                    <th>#Doc.</th>
                    <th>Mod.1</th>
                    <th>Mod.2</th>
                    <th>Mod.3</th>
                    <th>Mod.4</th>
                    <th>Mod.5</th>
                    <th>Mod.6</th>
                    <th>Mod.7</th>
                    <th>Calificación</th>
                    <th>Descargar</th>
                  </tr>";
	if(mysqli_num_rows($consulta) > 0){
		while ( $row = mysqli_fetch_array($consulta, MYSQLI_ASSOC)) {
			
			echo "<tr>	
					<td>".$row['Nombres']."</td>
					<td>".$row['Apellidos']."</td>
					<td>".$row['Identificacion']."</td>
					";
					if ($row['GES_NEGYEXEL']=='0') {
						echo "<td><a href='../html2/php2/evalTacEstrategico.php?var1=$row[Identificacion]' class='btn btn-primary'style='padding:3px 5px; font-size:100%;'>Evaluar</td>";
						# code...
					}else{
						echo "<td>".$row['GES_NEGYEXEL']."</td>";
					}
					if ($row['CON_REL_INTER']=='0') {
						echo "<td><a href='../html2/php2/evalTacEstrategico.php?var1=$row[Identificacion]' class='btn btn-primary'style='padding:3px 5px; font-size:100%;'>Evaluar</td>";
						# code...
					}else{
						echo "<td>".$row['CON_REL_INTER']."</td>";
					}
					if ($row['GES_RECU']=='0') {
						echo "<td><a href='../html2/php2/evalTacEstrategico.php?var1=$row[Identificacion]' class='btn btn-primary'style='padding:3px 5px; font-size:100%;'>Evaluar</td>";
						# code...
					}else{
						echo "<td>".$row['GES_RECU']."</td>";
					}
					if ($row['ADAP_CAMBIO']=='0') {
						echo "<td><a href='../html2/php2/evalTacEstrategico.php?var1=$row[Identificacion]' class='btn btn-primary'style='padding:3px 5px; font-size:100%;'>Evaluar</td>";
						# code...
					}else{
						echo "<td>".$row['ADAP_CAMBIO']."</td>";
					}
					if ($row['ORIEN_RESULT']=='0') {
						echo "<td><a href='../html2/php2/evalTacEstrategico.php?var1=$row[Identificacion]' class='btn btn-primary'style='padding:3px 5px; font-size:100%;'>Evaluar</td>";
						# code...
					}else{
						echo "<td>".$row['ORIEN_RESULT']."</td>";
					}
					if ($row['SGC']=='0') {
						echo "<td><a href='../html2/php2/evalTacEstrategico.php?var1=$row[Identificacion]' class='btn btn-primary'style='padding:3px 5px; font-size:100%;'>Evaluar</td>";
						# code...
					}else{
						echo "<td>".$row['SGC']."</td>";
					}if ($row['SEG_IND_SAL_OCUP']=='0') {
						echo "<td><a href='../html2/php2/evalTacEstrategico.php?var1=$row[Identificacion]' class='btn btn-primary'style='padding:3px 5px; font-size:100%;'>Evaluar</td>";
						# code...
					}else{
						echo "<td>".$row['SEG_IND_SAL_OCUP']."</td>";
					}
					if($row['TOTAL']=='0'){
						echo "<td>".$row['TOTAL']."</td>
						   <td><a class='btn btn-danger glyphicon glyphicon-remove-circle' style='padding:0px 19px; font-size:125%;'></td></tr>";
					}else{
							echo "<td>".$row['TOTAL']."</td>
						  <td><a class='btn btn-primary glyphicon glyphicon-download-alt btn btn-primary' href='../fpdf/reporteTacticoEstrategico.php?var1=$row[Identificacion]' style='padding:0px 19px; font-size:125%;'></td></tr>";

						}

		}
		

	} else{
		echo "<p>No hay datos Aun registrados<br>";
	}
	echo "</table>";
	mysqli_close($con);
	# code...
}elseif ($cat==3) {
	$consulta =mysqli_query($con, "SELECT evaluados.Nombres,evaluados.Apellidos, evaluados.Identificacion,CONS_REL_INTER,EXEL_OPERACION,GEST_RECURSOS,ADAPT_CAMBIO,ORIEN_RESULTA,SGC,SEG_IND_SAL_OCUP, TOTAL from resultado_tactico inner join evaluados on evaluados.Identificacion=resultado_tactico.idIdentificacion inner join u_consultor on u_consultor.Identificacion=resultado_tactico.idIdentificacionConsultor WHERE idIdentificacionConsultor=$id");

	echo "<table class='table table-striped table-hover' style='font-size: 90%;text-align: left;'>
                  <tr>
                    <th>Nombres</th>
                    <th>Apellidos</th>
                    <th>#Doc.</th>
                    <th>Mod.1</th>
                    <th>Mod.2</th>
                    <th>Mod.3</th>
                    <th>Mod.4</th>
                    <th>Mod.5</th>
                    <th>Mod.6</th>
                    <th>Mod.7</th>
                    <th>Calificación</th>
                    <th>Descargar</th>
                  </tr>";
	
	if(mysqli_num_rows($consulta) > 0){
		while ( $row = mysqli_fetch_array($consulta, MYSQLI_ASSOC)) {
			echo "
					<tr>	
					<td>".$row['Nombres']."</td>
					<td>".$row['Apellidos']."</td>
					<td>".$row['Identificacion']."</td>";
					if ($row['CONS_REL_INTER']=='0') {
						echo "<td><a href='../html2/php2/evaltactico.php?var1=$row[Identificacion]' class='btn btn-primary'style='padding:3px 5px; font-size:100%;'>Evaluar</td>";
						# code...
					}else{
						echo "<td>".$row['CONS_REL_INTER']."</td>";
					}
					if ($row['EXEL_OPERACION']=='0') {
						echo "<td><a href='../html2/php2/evaltactico.php?var1=$row[Identificacion]' class='btn btn-primary'style='padding:3px 5px; font-size:100%;'>Evaluar</td>";
						# code...
					}else{
						echo "<td>".$row['EXEL_OPERACION']."</td>";
					}
					if ($row['GEST_RECURSOS']=='0') {
						echo "<td><a href='../html2/php2/evaltactico.php?var1=$row[Identificacion]' class='btn btn-primary'style='padding:3px 5px; font-size:100%;'>Evaluar</td>";
						# code...
					}else{
						echo "<td>".$row['GEST_RECURSOS']."</td>";
					}
					if ($row['ADAPT_CAMBIO']=='0') {
						echo "<td><a href='../html2/php2/evaltactico.php?var1=$row[Identificacion]' class='btn btn-primary'style='padding:3px 5px; font-size:100%;'>Evaluar</td>";
						# code...
					}else{
						echo "<td>".$row['ADAPT_CAMBIO']."</td>";
					}
					if ($row['ORIEN_RESULTA']=='0') {
						echo "<td><a href='../html2/php2/evaltactico.php?var1=$row[Identificacion]' class='btn btn-primary'style='padding:3px 5px; font-size:100%;'>Evaluar</td>";
						# code...
					}else{
						echo "<td>".$row['ORIEN_RESULTA']."</td>";
					}if ($row['SGC']=='0') {
						echo "<td><a href='../html2/php2/evaltactico.php?var1=$row[Identificacion]' class='btn btn-primary'style='padding:3px 5px; font-size:100%;'>Evaluar</td>";
						# code...
					}else{
						echo "<td>".$row['SGC']."</td>";
					}
					if ($row['SEG_IND_SAL_OCUP']=='0') {
						echo "<td><a href='../html2/php2/evaltactico.php?var1=$row[Identificacion]' class='btn btn-primary'style='padding:3px 5px; font-size:100%;'>Evaluar</td>";
						# code...
					}else{
						echo "<td>".$row['SEG_IND_SAL_OCUP']."</td>";
					}
					if($row['TOTAL']=='0'){
						echo "<td>".$row['TOTAL']."</td>
						  <td><a class='btn btn-danger glyphicon glyphicon-remove-circle' style='padding:0px 19px; font-size:125%;'></td></tr>";
					}else{
							echo "<td>".$row['TOTAL']."</td>
						  <td><a class='btn btn-primary glyphicon glyphicon-download-alt btn btn-primary' href='../fpdf/reporteTactico.php?var1=$row[Identificacion]' style='padding:0px 19px; font-size:125%;'></td></tr>";

						}
		}
		

	} else{
		echo "<p>No hay datos Aun registrados<br>";
		#echo "Error ".$consulta." <br>".mysqli_error($con);
	}
	echo "</table>";
	mysqli_close($con);
}elseif ($cat==4) {
	$consulta =mysqli_query($con, "SELECT evaluados.Nombres,evaluados.Apellidos, evaluados.Identificacion, Ex_Operaciona, Ges_Recursos, Adap_Cambio, Or_Resultados, SGC, SIndust_SaOcupa, TOTAL from resultado_operativo inner join evaluados on evaluados.Identificacion=resultado_operativo.idIdentificacion inner join u_consultor on u_consultor.Identificacion=resultado_operativo.idIdentificacionConsultor WHERE idIdentificacionConsultor=$id");
	echo "<table class='table table-striped table-hover' style='font-size: 90%;text-align: left;'>
                  <tr>
                    <th>Usuario</th>
                    <th>Apellidos</th>
                    <th>#Doc.</th>
                    <th>Mod.1</th>
                    <th>Mod.2</th>
                    <th>Mod.3</th>
                    <th>Mod.4</th>
                    <th>Mod.5</th>
                    <th>Mod.6</th>
                    <th>Calificación</th>
                    <th>Descargar</th>
                  </tr>";
	if(mysqli_num_rows($consulta) > 0){
		while ( $row = mysqli_fetch_array($consulta, MYSQLI_ASSOC)) {
			echo "<tr>	
					<td>".$row['Nombres']."</td>
					<td>".$row['Apellidos']."</td>
					<td>".$row['Identificacion']."</td>
					";
					if ($row['Ex_Operaciona']=='0') {
						echo "<td><a href='../html2/php2/evaloperativo.php?var1=$row[Identificacion]' class='btn btn-primary'style='padding:3px 5px; font-size:100%;'>Evaluar</td>";
						# code...
					}else{
						echo "<td>".$row['Ex_Operaciona']."</td>";
					}
					if ($row['Ges_Recursos']=='0') {
						echo "<td><a href='../html2/php2/evaloperativo.php?var1=$row[Identificacion]' class='btn btn-primary'style='padding:3px 5px; font-size:100%;'>Evaluar</td>";
						# code...
					}else{
						echo "<td>".$row['Ges_Recursos']."</td>";
					}
					if ($row['Adap_Cambio']=='0') {
						echo "<td><a href='../html2/php2/evaloperativo.php?var1=$row[Identificacion]' class='btn btn-primary'style='padding:3px 5px; font-size:100%;'>Evaluar</td>";
						# code...
					}else{
						echo "<td>".$row['Adap_Cambio']."</td>";
					}
					if ($row['Or_Resultados']=='0') {
						echo "<td><a href='../html2/php2/evaloperativo.php?var1=$row[Identificacion]' class='btn btn-primary'style='padding:3px 5px; font-size:100%;'>Evaluar</td>";
						# code...
					}else{
						echo "<td>".$row['Or_Resultados']."</td>";
					}
					if ($row['SGC']=='0') {
						echo "<td><a href='../html2/php2/evaloperativo.php?var1=$row[Identificacion]' class='btn btn-primary'style='padding:3px 5px; font-size:100%;'>Evaluar</td>";
						# code...
					}else{
						echo "<td>".$row['SGC']."</td>";
					}
					if ($row['SIndust_SaOcupa']=='0') {
						echo "<td><a href='../html2/php2/evaloperativo.php?var1=$row[Identificacion]' class='btn btn-primary'style='padding:3px 5px; font-size:100%;'>Evaluar</td>";
						# code...
					}else{
						echo "<td>".$row['SIndust_SaOcupa']."</td>";
					}
					if($row['TOTAL']=='0'){
						echo "<td>".$row['TOTAL']."</td>
						  <td><a class='btn btn-danger glyphicon glyphicon-remove-circle' style='padding:0px 19px; font-size:125%;'></td></tr>";
					}else{
							echo "<td>".$row['TOTAL']."</td>
						  <td><a class='btn btn-primary glyphicon glyphicon-download-alt btn btn-primary' href='../fpdf/reporteOperativo.php?var1=$row[Identificacion]' style='padding:0px 19px; font-size:125%;'></td></tr>";

						}

		}
		

	} else{
		echo "<p>No hay datos Aun registrados<br>";
		#echo "Error ".$consulta." <br>".mysqli_error($con);
	}
	echo "</table";
	mysqli_close($con);
	# code...
}

?>