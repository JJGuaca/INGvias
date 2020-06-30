<?php
require'conexion.php';
$datosy=array();

/*Consulta 1*/
$val=array();
$total=0;
$y=0;
$i=0;
$consulta="SELECT AVG(resultado_tactico.ADAPT_CAMBIO) FROM resultado_tactico;";
$consulta.="SELECT AVG(resultado_tacticoestrategico.ADAP_CAMBIO) FROM resultado_tacticoestrategico;";
$consulta.="SELECT AVG(resultado_operativo.Adap_Cambio) FROM resultado_operativo;";
$consulta.="SELECT AVG(resultado_estrategico.AdaptabilidadC) FROM resultado_estrategico;";

if (mysqli_multi_query($con,$consulta)) {
	do{
		if ($result=mysqli_store_result($con)) {
			while ($row=mysqli_fetch_row($result)) {
				 $val[]=$row[0];
				 $i=$i+1;
				 	 
			}
			#$datosx=json_encode($val);
			mysqli_free_result($result);

		}
	}while (mysqli_more_results($con) && mysqli_next_result($con));


}
foreach ($val as $valor) {
	$y += $valor;
}
$datosy[0]=$y/$i;
/*Consulta 2*/
$val1=array();
$j=0;
$y1=0;
$consulta1="SELECT AVG(resultado_tactico.CONS_REL_INTER) FROM resultado_tactico;";
$consulta1.="SELECT AVG(resultado_tacticoestrategico.CON_REL_INTER) FROM resultado_tacticoestrategico;";
if (mysqli_multi_query($con,$consulta1)) {
	do{
		if($result=mysqli_store_result($con)){
			while ($row=mysqli_fetch_row($result)) {
				$val1[]=$row[0];
				$j=$j+1;
			}
			mysqli_free_result($result);

		}

	}while (mysqli_more_results($con)&&mysqli_next_result($con));
}
foreach ($val1 as $valor) {
	$y1+=$valor;
}
$datosy[1]=$y1/$j;
/*Consulta 3*/
$val2=array();
$k=0;
$y2=0;
$consulta2="SELECT AVG(resultado_tactico.EXEL_OPERACION) FROM resultado_tactico;";
$consulta2.="SELECT AVG(resultado_operativo.Ex_Operaciona) FROM resultado_operativo;";
if (mysqli_multi_query($con,$consulta2)) {
	do{
		if($result=mysqli_store_result($con)){
			while ($row=mysqli_fetch_row($result)) {
				$val2[]=$row[0];
				$k=$k+1;
			}
			mysqli_free_result($result);

		}

	}while (mysqli_more_results($con)&&mysqli_next_result($con));
}
foreach ($val2 as $valor) {
	$y2+=$valor;
}
$datosy[2]=$y2/$k;
/*Consulta 4*/
$val3=array();
$l=0;
$y3=0;
$consulta3="SELECT AVG(GES_NEGYEXEL)FROM resultado_tacticoestrategico;";
if (mysqli_multi_query($con,$consulta3)) {
	do{
		if($result=mysqli_store_result($con)){
			while ($row=mysqli_fetch_row($result)) {
				$val3[]=$row[0];
				$l=$l+1;
			}
			mysqli_free_result($result);

		}

	}while (mysqli_more_results($con)&&mysqli_next_result($con));
}
foreach ($val3 as $valor) {
	$y3+=$valor;
}
$datosy[3]=$y3/$l;
/*Consulta 5*/
$val4=array();
$m=0;
$y4=0;
$consulta4="SELECT AVG(resultado_tacticoestrategico.GES_RECU) FROM resultado_tacticoestrategico;";
$consulta4.="SELECT AVG(resultado_operativo.Ges_Recursos) FROM resultado_operativo;";
$consulta4.="SELECT AVG(resultado_tactico.GEST_RECURSOS) FROM resultado_tactico;";
if (mysqli_multi_query($con,$consulta4)) {
	do{
		if($result=mysqli_store_result($con)){
			while ($row=mysqli_fetch_row($result)) {
				$val4[]=$row[0];
				$m=$m+1;
			}
			mysqli_free_result($result);

		}

	}while (mysqli_more_results($con)&&mysqli_next_result($con));
}
foreach ($val4 as $valor) {
	$y4+=$valor;
}
$datosy[4]=$y4/$m;
/*Consulta 6*/
$val5=array();
$n=0;
$y5=0;
$consulta5="SELECT AVG(resultado_estrategico.Ges_Financiera) FROM resultado_estrategico;";
if (mysqli_multi_query($con,$consulta5)) {
	do{
		if($result=mysqli_store_result($con)){
			while ($row=mysqli_fetch_row($result)) {
				$val5[]=$row[0];
				$n=$n+1;
			}
			mysqli_free_result($result);

		}

	}while (mysqli_more_results($con)&&mysqli_next_result($con));
}
foreach ($val5 as $valor) {
	$y5+=$valor;
}
$datosy[5]=$y5/$n;
/*Consulta 7*/
$val6=array();
$o=0;
$y6=0;
$consulta6="SELECT AVG(resultado_estrategico.Gestion_Desarrollo) FROM resultado_estrategico;";
if (mysqli_multi_query($con,$consulta6)) {
	do{
		if($result=mysqli_store_result($con)){
			while ($row=mysqli_fetch_row($result)) {
				$val6[]=$row[0];
				$o=$o+1;
			}
			mysqli_free_result($result);

		}

	}while (mysqli_more_results($con)&&mysqli_next_result($con));
}
foreach ($val6 as $valor) {
	$y6+=$valor;
}
$datosy[6]=$y6/$o;
/*Consulta 8*/
$val7=array();
$p=0;
$y7=0;
$consulta7="SELECT AVG(resultado_estrategico.Orientacion_Res) FROM resultado_estrategico;";
$consulta7.="SELECT AVG(resultado_operativo.Or_Resultados) FROM resultado_operativo;";
$consulta7.="SELECT AVG(resultado_tactico.ORIEN_RESULTA) FROM resultado_tactico;";
$consulta7.=" SELECT AVG(resultado_tacticoestrategico.ORIEN_RESULT) FROM resultado_tacticoestrategico;";
if (mysqli_multi_query($con,$consulta7)) {
	do{
		if($result=mysqli_store_result($con)){
			while ($row=mysqli_fetch_row($result)) {
				$val7[]=$row[0];
				$p=$p+1;
			}
			mysqli_free_result($result);

		}

	}while (mysqli_more_results($con)&&mysqli_next_result($con));
}
foreach ($val7 as $valor) {
	$y7+=$valor;
}
$datosy[7]=$y7/$p;
/*Consulta 9*/
$val8=array();
$q=0;
$y8=0;
$consulta8="SELECT AVG(resultado_estrategico.SIndust_SaOcupa) FROM resultado_estrategico;";
$consulta8.="SELECT AVG(resultado_operativo.SIndust_SaOcupa) FROM resultado_operativo;";
$consulta8.="SELECT AVG(resultado_tactico.SEG_IND_SAL_OCUP) FROM resultado_tactico;";
$consulta8.=" SELECT AVG(resultado_tacticoestrategico.SEG_IND_SAL_OCUP) FROM resultado_tacticoestrategico;";
if (mysqli_multi_query($con,$consulta8)) {
	do{
		if($result=mysqli_store_result($con)){
			while ($row=mysqli_fetch_row($result)) {
				$val8[]=$row[0];
				$q=$q+1;
			}
			mysqli_free_result($result);

		}

	}while (mysqli_more_results($con)&&mysqli_next_result($con));
}
foreach ($val8 as $valor) {
	$y8+=$valor;
}
$datosy[8]=$y8/$q;
/*Consulta 10*/
$val9=array();
$r=0;
$y9=0;
$consulta9="SELECT AVG(resultado_estrategico.SGC) FROM resultado_estrategico;";
$consulta9.="SELECT AVG(resultado_operativo.SGC) FROM resultado_operativo;";
$consulta9.="SELECT AVG(resultado_tactico.SGC) FROM resultado_tactico;";
$consulta9.=" SELECT AVG(resultado_tacticoestrategico.SGC) FROM resultado_tacticoestrategico;";
if (mysqli_multi_query($con,$consulta9)) {
	do{
		if($result=mysqli_store_result($con)){
			while ($row=mysqli_fetch_row($result)) {
				$val9[]=$row[0];
				$r=$r+1;
			}
			mysqli_free_result($result);

		}

	}while (mysqli_more_results($con)&&mysqli_next_result($con));
}
foreach ($val9 as $valor) {
	$y9+=$valor;
}
$datosy[9]=$y9/$r;
$total=(($y/$i)+($y1/$j)+($y2/$k)+($y3/$l)+($y4/$m)+($y5/$n)+($y6/$o)+($y7/$p)+($y8/$q)+($y9/$r))/10;


$daty=json_encode($datosy);
$file='datos.json';
file_put_contents($file, $daty);
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
	datosy=cadenaLineal('<?php echo $daty ?>');
	var traza1={
		x: ['Adaptabilidad al Cambio',
			'Construcción de relaciones Interpersonales',
		 	'Exelencia Operacional',
		  	'Gestión de Negocio y Excelencia Operacional',
		  	'Gestion de Recursos',
		  	'Gestion financiera y de Recursos',
		  	'Getion para el desarrollo del negocio',
		 	'Orientacion a resultados',
		 	'Seguridad Industrial, Salud Ocupacional y Medio Ambiente',
		 	'Sistema de gestion de calidad Sgc'],

		y: datosy,
		marker:{
			color:['rgb(169,82,106)',
				   'rgb(82,87,169)',
				   'rgb(82,169,98)',
				   'rgb(180,71,39)',
				   'rgb(169,85,100)',
				   'rgb(82,78,100)',
				   'rgb(70,169,150)',
				   'rgb(18,70,55)',
				   'rgb(100,100,100)',
				   'rgb(200,100,200)']
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
Plotly.newPlot('grafica2', data, layout, {displaylogo: false});
</script>