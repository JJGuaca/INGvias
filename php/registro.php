<?php 
require("conexion.php");
function Hack($string){
	if(preg_match('[A-Za-z0-9]', $string)){
		$hack=true;
	}else{
		$hack=false;
	}
	return $hack;
}


if (Hack($_POST['documento']) || Hack($_POST['nombre']) || Hack($_POST['apellido']) || Hack($_POST['nickname'])) {
	echo "Datos erroneos";	
}else{
	$documento=$_POST['documento'];
	$nombre=$_POST['nombre'];
	$apellido=$_POST['apellido'];
	$nickname=$_POST['nickname'];

	$consulta= "INSERT INTO empleados VALUES ('$documento','$nombre','$apellido','$nickname')";

	if (mysqli_query($con, $consulta)) {
	 	echo "registrado correctamente el usuario";
	 }
	 else{
	 	echo "Error ".$consulta." <br>";
	 }
	mysqli_close($con);
}
?>