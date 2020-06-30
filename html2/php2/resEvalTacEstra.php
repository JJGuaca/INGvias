<?php
require 'sesion.php';
require 'conexion2.php';
session_start();
$idEva=$_SESSION['id'];
//ID EN BD
$id=$_POST['id'];
//PREGUNTAS MOD1
$pre1=$_POST['Pre1-mod1'];
$pre2=$_POST['Pre2-mod1'];
$pre3=$_POST['Pre3-mod1'];
$pre4=$_POST['Pre4-mod1'];
$pre5=$_POST['Pre5-mod1'];
//PROMEDIO
$prom1=($pre1+$pre2+$pre3+$pre4+$pre5)/5;
//PREGUNTAS MOD2
$pre6=$_POST['Pre1-mod2'];
$pre7=$_POST['Pre2-mod2'];
$pre8=$_POST['Pre3-mod2'];
$pre9=$_POST['Pre4-mod2'];
//PROMEDIO
$prom2=($pre6+$pre7+$pre8+$pre9)/4;
//PREGUNTAS MOD3
$pre10=$_POST['Pre1-mod3'];
$pre11=$_POST['Pre2-mod3'];
$pre12=$_POST['Pre3-mod3'];
//PROMEDIO
$prom3=($pre10+$pre11+$pre12)/3;
//PREGUNTAS MOD4
$pre13=$_POST['Pre1-mod4'];
$pre14=$_POST['Pre2-mod4'];
$pre15=$_POST['Pre3-mod4'];
//PROMEDIO
$prom4=($pre13+$pre14+$pre15)/3;
//PREGUNTAS MOD5
$pre16=$_POST['Pre1-mod5'];
$pre17=$_POST['Pre2-mod5'];
$pre18=$_POST['Pre3-mod5'];
//PROMEDIO
$prom5=($pre18+$pre16+$pre17)/3;
//PREGUNTAS MOD6
$pre19=$_POST['Pre1-mod6'];
$pre20=$_POST['Pre2-mod6'];
$pre21=$_POST['Pre3-mod6'];
$pre22=$_POST['Pre4-mod6'];
$pre23=$_POST['Pre5-mod6'];
//PROMEDIO
$prom6=($pre19+$pre20+$pre21+$pre22+$pre23)/5;
//PREGUNTAS MOD7
$pre24=$_POST['Pre1-mod7'];
$pre25=$_POST['Pre2-mod7'];
$pre26=$_POST['Pre3-mod7'];
$pre27=$_POST['Pre4-mod7'];
$pre28=$_POST['Pre5-mod7'];
$pre29=$_POST['Pre6-mod7'];
$pre30=$_POST['Pre7-mod7'];
$pre31=$_POST['Pre8-mod7'];
$pre32=$_POST['Pre9-mod7'];
//DEBILIDADES Y FORTALEZAS
$deb=$_POST['debilidades'];
$fort=$_POST['fortalezas'];
$cap=$_POST['capacitacion'];

//PROMEDIO
$prom7=($pre24+$pre25+$pre26+$pre27+$pre28+$pre29+$pre30+$pre31+$pre32)/9;
//PROMEDIO TOTAL
$promTotal=($prom1+$prom2+$prom3+$prom4+$prom5+$prom6+$prom7)/7;

$insert="INSERT INTO resultado_tacticoestrategico_respuestas(identificacionEvaluado, idConsultor, pre1, pre2, pre3, pre4, pre5, pre6, pre7, pre8, pre9, pre10, pre11, pre12, pre13, pre14, pre15, pre16, pre17, pre18, pre19, pre20, pre21, pre22, pre23, pre24, pre25, pre26, pre27, pre28, pre29, pre30, pre31, pre32, debilidades, fortalezas, capacitacion) VALUES ($id,$idEva,$pre1,$pre2,$pre3,$pre4,$pre5,$pre6,$pre7,$pre8,$pre9,$pre10,$pre11,$pre12,$pre13,$pre14,$pre15,$pre16,$pre17,$pre18,$pre19,$pre20,$pre21,$pre22,$pre23,$pre24,$pre25,$pre26,$pre27,$pre28,$pre29,$pre30,$pre31,$pre32,'$deb','$fort','$cap');";
$insert .="UPDATE resultado_tacticoestrategico SET FechaEvaluacion=NOW(),GES_NEGYEXEL=$prom1,CON_REL_INTER=$prom2,GES_RECU=$prom3,ADAP_CAMBIO=$prom4,ORIEN_RESULT=$prom5,SGC=$prom6,SEG_IND_SAL_OCUP=$prom7,TOTAL=$promTotal WHERE resultado_tacticoestrategico.idIdentificacion=$id";

if (mysqli_multi_query($con,$insert)) {
	 	//echo $insert;
	 	header("Location:../usuarios2.html");
	 }
	 else{
	 	echo "Error Al ingresar los datos <br>".$insert;
	 }

	mysqli_close($con);
?>