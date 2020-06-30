<?php 
require 'conexion.php';
$i=0;
$k=0;
$emp=array();
$temp=0;
$Eval=array();
$color=array();
$data = file_get_contents("empresa.json");
$datos = json_decode($data, true);

foreach ($datos as $dats) {
	$empresa[$i]=$dats;
	$i+=1;

}
$m=0;
$cadena=array();
for ($j=0; $j <$i ; $j++) {
		$emp=array();
		$emp1=array();	

	$consulta="SELECT SUM(resultado_operativo.TOTAL)Operativo, COUNT(*)Cuantos FROM evaluados INNER JOIN resultado_operativo ON resultado_operativo.idIdentificacion=evaluados.Identificacion WHERE evaluados.Area = '$empresa[$j]';";
	$consulta.="SELECT SUM(resultado_estrategico.TOTAL)Estrategico, COUNT(*)Cuantos FROM evaluados INNER JOIN resultado_estrategico ON resultado_estrategico.idIdentificacion=evaluados.Identificacion WHERE evaluados.Area = '$empresa[$j]';";
	$consulta.="SELECT SUM(resultado_tacticoestrategico.TOTAL)TacEstrategico,COUNT(*)Cuantos FROM evaluados INNER JOIN resultado_tacticoestrategico ON resultado_tacticoestrategico.idIdentificacion=evaluados.Identificacion WHERE evaluados.Area = '$empresa[$j]';";
	$consulta.="SELECT SUM(resultado_tactico.TOTAL)Tactico, COUNT(*)Cuantos FROM evaluados INNER JOIN resultado_tactico ON resultado_tactico.idIdentificacion=evaluados.Identificacion WHERE evaluados.Area = '$empresa[$j]';";

	if (mysqli_multi_query($con,$consulta)) {
	do{
		if ($result=mysqli_store_result($con)) {
			while ($row=mysqli_fetch_row($result)) {
				 $emp[]=$row[0];
				 $emp1[]=$row[1];
				 				 	 
			}
			mysqli_free_result($result);
			$cadena[$j]=array_sum($emp);
			$cadena1[$j]=array_sum($emp1);
			if($cadena1[$j]== 0){
				$cadena2[$j]=0;
			}else{
				$cadena2[$j]=$cadena[$j]/$cadena1[$j];
			}
			
			$color[$j]='rgb('.rand(0,255).','.rand(0,255).','.rand(0,255).')';	
		}
		

	}
	while (mysqli_more_results($con) && mysqli_next_result($con));
}

}

$emp=json_encode($cadena2);
$emp1=json_encode($empresa);
$color=json_encode($color);
$file='emp.json';
file_put_contents($file, $emp);



?>

<script type="text/javascript">
	function cadenaLineal(json){
		var parsed=JSON.parse(json);
		var arr=[];
		for (var x in parsed) {
			arr.push(parsed[x]);
		}
		return arr;
	}
</script>

<script type="text/javascript">
	datosy=cadenaLineal('<?php echo $emp; ?>');
	datosx=cadenaLineal('<?php echo $emp1; ?>');

	var traza1={
		x: datosx,
		y: datosy,
		marker:{
			color: <?php echo $color; ?>
			},
		name: 'COMPETENCIA',
		type: 'bar'
  };
 
var data = [traza1];
var layout = {
	barmode: 'bar',
	title: 'COMPETENCIA + PROMEDIO',
	showlegend: false
	};
Plotly.newPlot('grafica1', data, layout, {displaylogo: false});
</script>