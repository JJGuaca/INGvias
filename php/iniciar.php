<?php
$user=$_POST['user'];
$username=$_POST['username'];
$Cla=$_POST['password'];



if ($user=='admin') {
	require("conexion.php");
	$consulta =mysqli_query($con, "SELECT * FROM usuarios WHERE email='$username'");
	if(mysqli_num_rows($consulta)>0){
		while ($row=mysqli_fetch_array($consulta, MYSQLI_ASSOC)) {
			$has1=$row['email'];
			$has2=$row['password'];
			$has3=$row['Nombres'];
			
			
			
			$cla2=sha1($Cla);
			if ($has1==$username && $has2==$cla2) {
			session_start();
			$_SESSION["Nombres"]=$has3;

				echo "<body>
						<script type='text/javascript'>
							window.location='../html/inicio.html';
						</script>
					 </body>";
			}else{
				echo "Verifique Los datos";

			}

			mysqli_close($con);
		}
	}else {
		echo "<p>Usuario no registrado<br>";
	}


} elseif ($user=='jefe') {
	require("conexion1.php");
	$consulta =mysqli_query($con, "SELECT * FROM u_jefe WHERE email='$username'");
	if(mysqli_num_rows($consulta)>0){
		while ($row=mysqli_fetch_array($consulta, MYSQLI_ASSOC)) {
			$has1=$row['email'];
			$has2=$row['password'];
			$has3=$row['Nombres_j'];
			$cla2=sha1($Cla);
			if ($has1==$username && $has2==$cla2) {
				session_start();
			$_SESSION["Nombres_j"]=$has3;
				echo "<body><script type='text/javascript'>window.location='../html1/inicio1.html';</script></body>";
			}else{
				echo "Verifique Los datos";

			}

			mysqli_close($con);
		}
	}else {
		echo "<p>Usuario no registrado<br>";
	}


}elseif ($user=='evaluador'){
	require("conexion2.php");
	$consulta =mysqli_query($con, "SELECT * FROM u_consultor WHERE email='$username'");
	if(mysqli_num_rows($consulta)>0){
		while ($row=mysqli_fetch_array($consulta, MYSQLI_ASSOC)) {
			$has1=$row['email'];
			$has2=$row['password'];
			$has3=$row['Nombres_u'];
			$has5=$row['Apellidos_u'];
			$has4=$row['Identificacion'];
			//$cat=$row['Categoria'];
			$cla2=sha1($Cla);
			if ($has1==$username && $has2==$cla2) {

				session_start();
				$_SESSION["Nombres_u"]=$has3;
				$_SESSION['Apellidos_u']=$has5;
				$_SESSION['id']=$has4;
				echo "<body><script type='text/javascript'>window.location='../html2/inicio2.html';</script></body>";
			}else{
				echo "Verifique Los datos";

			}
				mysqli_close($con);
		}
	}else {
		echo "<p>Usuario no registrado<br>";
	}


}elseif ($user=='') {
	echo "<h1>verifique los datos ingresados, gracias</h1>";
}
?>