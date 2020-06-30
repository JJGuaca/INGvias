<script src="js-plotly/plotly-latest.min.js"></script>
<div id="grafica2"></div>
<?php

$data = file_get_contents("operativo.json");

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
	datosy=cadenaLineal('<?php echo $data?>');
	var traza1={
		x: ['E.O.',
			'G.R.',
		 	'A.C.',
		  	'O.R.',
		  	'SGC',
		  	'S.I.S.O.',
		  	'Total'],

		y: datosy,
		marker:{
			color:['rgb(169,82,106)',
				   'rgb(82,87,169)',
				   'rgb(82,169,98)',
				   'rgb(180,71,39)',
				   'rgb(169,85,100)',
				   'rgb(82,78,100)',
				   'rgb(70,169,150)',
				   'rgb(200,100,200)']
		},
		name: 'COMPETENCIA',
		type: 'bar'
  };
 
var data = [traza1];
var layout = {
	barmode: 'bar',
	title: 'MODULOS OPERATIVO',
	showlegend: false
	};
Plotly.newPlot('grafica2', data, layout, {displaylogo: false});
</script>