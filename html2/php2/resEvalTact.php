<?php
require 'sesion.php';
require 'conexion2.php';
$idEva=$_SESSION['id'];
//ID EN BD
$id=$_POST['id'];
//PREGUNTAS MOD1
$pre1=$_POST['Pre1-mod1'];
$pre2=$_POST['Pre2-mod1'];
$pre3=$_POST['Pre3-mod1'];
//PROMEDIO
$prom1=($pre1+$pre2+$pre3)/3;
//PREGUNTAS MOD2
$pre4=$_POST['Pre1-mod2'];
$pre5=$_POST['Pre2-mod2'];
$pre6=$_POST['Pre3-mod2'];
//PROMEDIO
$prom2=($pre4+$pre5+$pre6)/3;
//PREGUNTAS MOD3
$pre7=$_POST['Pre1-mod3'];
$pre8=$_POST['Pre2-mod3'];
$pre9=$_POST['Pre3-mod3'];
//PROMEDIO
$prom3=($pre7+$pre8+$pre9)/3;
//PREGUNTAS MOD4
$pre10=$_POST['Pre1-mod4'];
$pre11=$_POST['Pre2-mod4'];
$pre12=$_POST['Pre3-mod4'];
//PROMEDIO
$prom4=($pre10+$pre11+$pre12)/3;
//PREGUNTAS MOD5
$pre13=$_POST['Pre1-mod5'];
$pre14=$_POST['Pre2-mod5'];
$pre15=$_POST['Pre3-mod5'];
//PROMEDIO
$prom5=($pre14+$pre15+$pre13)/3;
//PREGUNTAS MOD6
$pre16=$_POST['Pre1-mod6'];
$pre17=$_POST['Pre2-mod6'];
$pre18=$_POST['Pre3-mod6'];
//PROMEDIO
$prom6=($pre16+$pre17+$pre18)/3;
//PREGUNTAS MOD7
$pre19=$_POST['Pre1-mod7'];
$pre20=$_POST['Pre2-mod7'];
$pre21=$_POST['Pre3-mod7'];
$pre22=$_POST['Pre4-mod7'];
$pre23=$_POST['Pre5-mod7'];
$pre24=$_POST['Pre6-mod7'];
$pre25=$_POST['Pre7-mod7'];
$pre26=$_POST['Pre8-mod7'];
$pre27=$_POST['Pre9-mod7'];
$pre28=$_POST['Pre10-mod7'];
$pre29=$_POST['Pre11-mod7'];
$pre30=$_POST['Pre12-mod7'];
$pre31=$_POST['Pre13-mod7'];
//PROMEDIO
$prom7=($pre19+$pre20+$pre21+$pre22+$pre23+$pre24+$pre25+$pre26+$pre27+$pre28+$pre29+$pre30+$pre31)/13;
//PROMEDIO TOTAL
$promTotal=($prom1+$prom2+$prom3+$prom4+$prom5+$prom6+$prom7)/7;
//DEBILIDADES Y FORTALEZAS
$deb=$_POST['debilidades'];
$fort=$_POST['fortalezas'];
$cap=$_POST['capacitacion'];

$insert = "INSERT INTO resultado_tactico_respuestas(idEvaluado, idConsultor, pre1, pre2, pre3, pre4, pre5, pre6, pre7, pre8, pre9, pre10, pre11, pre12, pre13, pre14, pre15, pre16, pre17, pre18, pre19, pre20, pre21, pre22, pre23, pre24, pre25, pre26, pre27, pre28, pre29, pre30, pre31, debilidades, fortalezas, capacitacion) VALUES ($id, $idEva, $pre1,$pre2,$pre3,$pre4,$pre5,$pre6,$pre7,$pre8,$pre9,$pre10,$pre11,$pre12,$pre13,$pre14,$pre15,$pre16,$pre17,$pre18,$pre19,$pre20,$pre21,$pre22,$pre23,$pre24,$pre25,$pre26,$pre27,$pre28,$pre29,$pre30,$pre31,'$deb','$fort','$cap');";
$insert .= "UPDATE resultado_tactico SET FechaEvaluacion=NOW(),CONS_REL_INTER=$prom1,EXEL_OPERACION=$prom2,GEST_RECURSOS=$prom3,ADAPT_CAMBIO=$prom4,ORIEN_RESULTA=$prom5,SGC=$prom6,SEG_IND_SAL_OCUP=$prom7,TOTAL=$promTotal WHERE resultado_tactico.idIdentificacion=$id";

if (mysqli_multi_query($con,$insert)) {
	 	//echo "registrado correctamente el usuario";
	 	header("Location:../usuarios2.html");
	 }
	 else{
	 	echo "Error Al ingresar datos.".$insert;
	 	
	 }
	mysqli_close($con);



?>