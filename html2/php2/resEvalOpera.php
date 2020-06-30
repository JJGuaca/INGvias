<?php
require 'sesion.php';
require 'conexion2.php';
$idEva=$_SESSION['id'];
//ID EN BD
$id=$_POST['ide'];
//PREGUNTAS MOD1
$pre1=$_POST['Pre1-mod1'];
$pre2=$_POST['Pre2-mod1'];
$pre3=$_POST['Pre3-mod1'];
$pre4=$_POST['Pre4-mod1'];
//PROMEDIO
$prom1=($pre1+$pre2+$pre3+$pre4)/4;
//PREGUNTAS MOD2
$pre5=$_POST['Pre1-mod2'];
$pre6=$_POST['Pre2-mod2'];
$pre7=$_POST['Pre3-mod2'];
//PROMEDIO
$prom2=($pre5+$pre6+$pre7)/3;
//PREGUNTAS MOD3
$pre8=$_POST['Pre1-mod3'];
$pre9=$_POST['Pre2-mod3'];
//PROMEDIO
$prom3=($pre8+$pre9)/2;
//PREGUNTAS MOD4
$pre10=$_POST['Pre1-mod4'];
$pre11=$_POST['Pre2-mod4'];
$pre12=$_POST['Pre3-mod4'];
$pre13=$_POST['Pre4-mod4'];
//PROMEDIO
$prom4=($pre10+$pre11+$pre12+$pre13)/4;
//PREGUNTAS MOD5
$pre14=$_POST['Pre1-mod5'];
$pre15=$_POST['Pre2-mod5'];
//PROMEDIO
$prom5=($pre14+$pre15)/2;
//PREGUNTAS MOD6
$pre16=$_POST['Pre1-mod6'];
$pre17=$_POST['Pre2-mod6'];
$pre18=$_POST['Pre3-mod6'];
$pre19=$_POST['Pre4-mod6'];
$pre20=$_POST['Pre5-mod6'];
$pre21=$_POST['Pre6-mod6'];
$pre22=$_POST['Pre7-mod6'];
$pre23=$_POST['Pre8-mod6'];
$pre24=$_POST['Pre9-mod6'];
$pre25=$_POST['Pre10-mod6'];
//PROMEDIO
$prom6=($pre16+$pre17+$pre18+$pre19+$pre20+$pre21+$pre22+$pre23+$pre24+$pre25)/10;
//PROMEDIO TOTAL
$promTotal=($prom1+$prom2+$prom3+$prom4+$prom5+$prom6)/6;
//DEBILIDADES Y FORTALEZAS
$deb=$_POST['debilidades'];
$fort=$_POST['fortalezas'];
$cap=$_POST['capacitacion'];

$insert="INSERT INTO resultado_operativo_respuestas(idEvaluado, idCosultor, pre1, pre2, pre3, pre4, pre5, pre6, pre7, pre8, pre9, pre10, pre11, pre12, pre13, pre14, pre15, pre16, pre17, pre18, pre19, pre20, pre21, pre22, pre23, pre24, pre25, debilidades, fortalezas, capacitacion) VALUES ($id, $idEva,$pre1,$pre2,$pre3,$pre4,$pre5,$pre6,$pre7,$pre8,$pre9,$pre10,$pre11,$pre12,$pre13,$pre14,$pre15,$pre16,$pre17,$pre18,$pre19,$pre20,$pre21,$pre22,$pre23,$pre24,$pre25,'$deb','$fort','$cap');";
$insert .="UPDATE resultado_operativo SET FechaEvaluacion=NOW(),Ex_Operaciona=$prom1,Ges_Recursos=$prom2,Adap_Cambio=$prom3,Or_Resultados=$prom4,SGC=$prom5,SIndust_SaOcupa=$prom6,TOTAL=$promTotal WHERE resultado_operativo.idIdentificacion=$id";

if (mysqli_multi_query($con,$insert)) {
	 	//echo "registrado correctamente el usuario";
	 	header("Location:../usuarios2.html");
	 }
	 else{
	 	echo "Error Al ingresar datos.".$insert;
	 }
	mysqli_close($con);

?>