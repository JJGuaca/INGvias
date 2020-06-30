<?php
require 'conexion.php'; 
$consulta="SELECT FechaEvaluacion, COUNT(TOTAL) FROM resultado_estrategico WHERE TOTAL>0 order by FechaEvaluacion;";
$consulta .="SELECT FechaEvaluacion, COUNT(TOTAL) FROM resultado_tactico WHERE TOTAL>0 order by FechaEvaluacion;";
$consulta .="SELECT FechaEvaluacion, COUNT(TOTAL) FROM resultado_operativo WHERE TOTAL>0 order by FechaEvaluacion;";
$consulta .="SELECT FechaEvaluacion, COUNT(TOTAL) FROM resultado_tacticoestrategico WHERE TOTAL>0 order by FechaEvaluacion;";
$consulta .="SELECT Identificacion, COUNT(Nombres) FROM evaluados";
$valx=array();
$valy=array();

if (mysqli_multi_query($con,$consulta)) {
	do{
		if ($result=mysqli_store_result($con)) {
			while ($row=mysqli_fetch_row($result)) {
				 #$valx[]=$row[0];
				 $valy[]=$row[1];
				 	 
			}
			#$datosx=json_encode($valx);
			$datosy=json_encode($valy);
			mysqli_free_result($result);

		}
	}while (mysqli_more_results($con) && mysqli_next_result($con));
	
	
}
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
<div id="dona"></div>
<script type="text/javascript">
	datosy=cadenaLineal('<?php echo $datosy ?>');
	datos0=parseInt(datosy[0]);
	datos1=parseInt(datosy[1]);
	datos2=parseInt(datosy[2]);
	datos3=parseInt(datosy[3]);
	datos4=parseInt(datosy[4]);
	datos=(datos0+datos1+datos2+datos3);
	datos4=datos4-datos;
	var data = [{
  values: [datos0,datos1,datos2,datos3,datos4],
  labels: ['Estrategico', 'Tactico', 'Operativo', 'Tactico Estrategico','Por evaluar'],
  type: 'pie',
  automargin: true
}];
var layout = {
    showlegend: false
	};



Plotly.newPlot('dona', data,layout,{displaylogo: false});
</script>