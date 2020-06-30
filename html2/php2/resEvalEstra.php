<?php
require 'sesion.php';
require 'conexion2.php';
$idEvaluador=$_SESSION['id'];
//ID EN BD
$idEvaluado=$_POST['id'];
//PREGUNTAS MOD1
$pre1=$_POST['Pre1-mod1'];
$pre2=$_POST['Pre2-mod1'];
//PREGUNTAS MOD2
$pre3=$_POST['Pre1-mod2'];
$pre4=$_POST['Pre2-mod2'];
$pre5=$_POST['Pre3-mod2'];
$pre6=$_POST['Pre4-mod2'];
//PREGUNTAS MOD3
$pre7=$_POST['Pre1-mod3'];
$pre8=$_POST['Pre2-mod3'];
$pre9=$_POST['Pre3-mod3'];
//PREGUNTAS MOD4
$pre10=$_POST['Pre1-mod4'];
$pre11=$_POST['Pre2-mod4'];
$pre12=$_POST['Pre3-mod4'];
$pre13=$_POST['Pre4-mod4'];
//PREGUNTAS MOD5
$pre14=$_POST['Pre1-mod5'];
$pre15=$_POST['Pre2-mod5'];
$pre16=$_POST['Pre3-mod5'];
$pre17=$_POST['Pre4-mod5'];
//PREGUNTAS MOD5
$pre18=$_POST['Pre1-mod6'];
$pre19=$_POST['Pre2-mod6'];
$pre20=$_POST['Pre3-mod6'];
$pre21=$_POST['Pre4-mod6'];
$pre22=$_POST['Pre5-mod6'];
$pre23=$_POST['Pre6-mod6'];
$pre24=$_POST['Pre7-mod6'];
$pre25=$_POST['Pre8-mod6'];
$pre26=$_POST['Pre9-mod6'];
$pre27=$_POST['Pre10-mod6'];
//DEBILIDADES Y FORTALEZAS
$deb=$_POST['debilidades'];
$fort=$_POST['fortalezas'];
$cap=$_POST['capacitacion'];

//PROMEDIOS
$prom1=($pre1+$pre2)/2;
$prom2=($pre3+$pre4+$pre5+$pre6)/4;
$prom3=($pre7+$pre8+$pre9)/3;
$prom4=($pre10+$pre11+$pre12+$pre13)/4;
$prom5=($pre14+$pre15+$pre16+$pre17)/4;
$prom6=($pre18+$pre19+$pre20+$pre21+$pre22+$pre23+$pre24+$pre25+$pre26+$pre27)/10;
$promTotal=($prom1+$prom2+$prom3+$prom4+$prom5+$prom6)/6;


$insert= "INSERT INTO resultado_estrategica_respuestas (idevaluado, idconsultor, pre1, pre2, pre3, pre4, pre5, pre6, pre7, pre8, pre9, pre10, pre11, pre12, pre13, pre14, pre15, pre16, pre17, pre18, pre19, pre20, pre21, pre22, pre23, pre24, pre25, pre26, pre27, debilidades, fortalezas,capacitacion) VALUES ($idEvaluado,$idEvaluador,$pre1,$pre2,$pre3,$pre4,$pre5,$pre6,$pre7,$pre8,$pre9,$pre10,$pre11,$pre12,$pre13,$pre14,$pre15,$pre16,$pre17,$pre18,$pre19,$pre20,$pre21,$pre22,$pre23,$pre24,$pre25,$pre26,$pre27,'$deb','$fort','$cap');";

$insert .="UPDATE resultado_estrategico SET FechaEvaluacion=NOW(), Gestion_Desarrollo = $prom1, Ges_Financiera = $prom2, Orientacion_Res = $prom3, AdaptabilidadC = $prom4, SGC = $prom5, SIndust_SaOcupa = $prom6, TOTAL = $promTotal WHERE resultado_estrategico.idIdentificacion = $idEvaluado";


if (mysqli_multi_query($con,$insert)) {
	 	//echo "registrado correctamente el usuario";
	 	header("Location:../usuarios2.html");
	 }
	 else{
	 	echo "Error Al ingresar datos.".$insert;
	 }
	mysqli_close($con);

?>