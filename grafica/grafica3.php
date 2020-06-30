<script src="js-plotly/plotly-latest.min.js"></script>
<div id="grafica3"></div>

<?php
require 'conexion.php'; 
$consulta="SELECT idIdentificacion, AVG(TOTAL) FROM resultado_estrategico WHERE TOTAL>0 order by idIdentificacion;";
$consulta .="SELECT idIdentificacion, AVG(TOTAL) FROM resultado_tacticoestrategico WHERE TOTAL>0 order by idIdentificacion;";
$consulta .="SELECT idIdentificacion, AVG(TOTAL) FROM resultado_tactico WHERE TOTAL>0 order by idIdentificacion;";
$consulta .="SELECT idIdentificacion, AVG(TOTAL) FROM resultado_operativo WHERE TOTAL>0 order by idIdentificacion;";
$consulta .="SELECT Identificacion, COUNT(Nombres) FROM evaluados WHERE idCategoria=1;";
$consulta .="SELECT Identificacion, COUNT(Nombres) FROM evaluados WHERE idCategoria=2;";
$consulta .="SELECT Identificacion, COUNT(Nombres) FROM evaluados WHERE idCategoria=3;";
$consulta .="SELECT Identificacion, COUNT(Nombres) FROM evaluados WHERE idCategoria=4;";

$valy=array();
echo "";

if (mysqli_multi_query($con,$consulta)) {
	do{
		if ($result=mysqli_store_result($con)) {
			while ($row=mysqli_fetch_row($result)) {
				$valy[]=$row[1];

			}
			$datosy=json_encode($valy);
			$file='numeros.json';
			file_put_contents($file, $datosy);
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
<!--GEnerar descargables-->





<script type="text/javascript">
	datosy=cadenaLineal('<?php echo $datosy ?>');
	var traza1={
		x: ['Estrategico','Tactico Estrategico', 'Tactico', 'Operativo'],
		y: [datosy[0],datosy[1],datosy[2],datosy[3]],
		name: 'Evaluados',
		marker:{
			color:['rgb(169,82,106)','rgb(82,87,169)','rgb(82,169,98)','rgb(180,71,39)']
		},
		type: 'bar'
	};

	var data = [traza1];
	var layout = {
		barmode: 'bar',
		title: 'TOTAL GENERAL',
		showlegend: false
	};


	Plotly.newPlot('grafica3', data, layout, {displaylogo: false});
</script>