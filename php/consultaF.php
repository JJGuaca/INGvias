<?php
require("conexion.php");
$consulta =mysqli_query($con, "SELECT * FROM estratco_empleados WHERE 1");
if(mysqli_num_rows($consulta) > 0){
	echo "<table border='4' class='tab'>
			<thead>
				<tr>
					<th>DOCUMENTO</th>
					<th>NOMBRE</th>
					<th>APELLIDO</th>
					<th>NICKNAME</th>
				</tr></thead>";
	while ( $row = mysqli_fetch_array($consulta, MYSQLI_ASSOC)) {
		echo "<tr>
				<td>".$row['documento']."</td>
				<td>".$row['nombre']."</td>
				<td>".$row['apellido']."</td>
				<td>".$row['nickname']."</td>
			  </tr>";
	}
	echo "</table>";
	

} else{
	echo "<p>No hay datos Aun registrados<br>";
	#echo "Error ".$consulta." <br>".mysqli_error($con);
}
mysqli_close($con);
?>