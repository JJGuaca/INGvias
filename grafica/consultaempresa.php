<?php 
require 'conexion.php';
$empresa=array();

$consulta="SELECT Area FROM evaluados GROUP BY Area";
if (mysqli_multi_query($con,$consulta)) {
	do{
		if ($result=mysqli_store_result($con)) {
			while($row=mysqli_fetch_row($result)){
				$empresa[]=$row[0];
			}
			mysqli_free_result($result);
		}

	}while (mysqli_more_results($con) && mysqli_next_result($con));
}
$empre=json_encode($empresa);
$file2='empresa.json';
file_put_contents($file2, $empre);

?>