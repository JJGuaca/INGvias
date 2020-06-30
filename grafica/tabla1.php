  <!--TABLEEXPORT-->
<link href="tableExport/css/tableexport.css" rel="stylesheet">

<?php
$i=0;
$j=0;

$data = file_get_contents("emp.json");
$data1=file_get_contents("empresa.json");
$datos1=json_decode($data1, true);
$datos = json_decode($data, true);
foreach ($datos as $dat) {
	$i+=1;
}
?>
<table></table>
<table id="tabla1" class="table-responsive table table-striped table-bordered">
	<tr>
		<th style="text-align: center;">PROYECTO</th>
		<th style="text-align: center;">RESULTADO 2020</th>
	</tr>

	<?php 
	for ($j=0; $j <$i ; $j++) { 
		echo "<tr><td>".$datos1[$j]."</td><td>".round($datos[$j],2,PHP_ROUND_HALF_DOWN)."</td></tr>";
	}
	?>
</table>