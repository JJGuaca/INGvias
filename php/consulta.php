<?php
require("conexion.php");
require("sesion.php");
//$documento=$_POST['documento'];

$consulta =mysqli_query($con, "SELECT * FROM  WHERE 1");
if(mysqli_num_rows($consulta) > 0){
	while ( $row = mysqli_fetch_array($consulta, MYSQLI_ASSOC)) {
		echo "<table class='table' style='text-align: center;'>
				<tr>	
				<td>".$row['Identificacion']."</td><td>".$row['Nombres']."</td><td>".$row['Apellidos']."</td><td>".$row['usuario']."</td><td>".$row['Nombres']."</td><td>".$row['NotaFinal']."</td><td>".$row['Otra']."</td><td><span class='glyphicon glyphicon-download-alt btn btn-primary' area-hiden='true'></td>
			  </tr>
			  </table>
			  ";
	}
	

} else{
	echo "<p>No hay datos Aun registrados<br>";
	#echo "Error ".$consulta." <br>".mysqli_error($con);
}
mysqli_close($con);
?>