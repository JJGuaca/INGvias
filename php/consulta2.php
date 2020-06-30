<?php
require("conexion.php");
require("ses.php");
$idEva=$_SESSION['id'];


$consulta =mysqli_query($con, "SELECT * FROM evaluados INNER JOIN categoria ON idCategoria=categoria.id WHERE idConsultor=$idEva");
if(mysqli_num_rows($consulta) > 0){
	while ( $row = mysqli_fetch_array($consulta, MYSQLI_ASSOC)) {
		$estado=$row['TOTAL'];
		if ($estado='0') {
			$estado='Sin evaluar';
			# code...
		}
		echo "<table class='table' style='text-align: left;'>
				<tr> 	
				<td width='100'>".$row['Nombres']."</td><td width='100'>".$row['Apellidos']."</td><td width='100'>".$row['Area']."</td><td width='100'>".$row['Cargo']."</td><td width='100'>".$row['nombre']."</td>
			  </tr>
			  </table>
			  ";
	}
	

} else{
	echo "<p>No hay datos Aun registrados<br>";
	#echo "Error ".$consulta." <br>".mysqli_error($con);
}
#echo "<a href='consultaGral.php?cat=$cat'></a>";
mysqli_close($con);
?>