<?php
require('fpdf.php');
require('../php/conexion.php');
$idEvaluado= $_GET['var1'];

class PDF extends FPDF{
// Cabecera de página
    function Header(){
        // Logo
        $this->Image('../img/logo2.png',10,8,33);
        // Arial bold 15
        $this->SetFont('Arial','B',15);
        // Movernos a la derecha
        $this->Cell(80);
        // Título
        $this->Cell(30,10,'Reporte evaluativo de Ingenieria de Vias S.A.S',0,0,'C');
        $this->Ln(7);
        $this->Cell(80);
        $this->SetFont('Arial','',12);
        $this->Cell(30,10,utf8_decode('Evaluacion Táctica'),0,0,'C');
        // Salto de línea
        $this->Ln(20);
    }

    // Pie de página
    function Footer(){
        // Posición: a 1,5 cm del final
        $this->SetY(-15);
        // Arial italic 8
        $this->SetFont('Arial','I',8);
        // Número de página
        $this->Cell(0,10,utf8_decode('Página').$this->PageNo().'/{nb} ',0,0,'L');
        $this->Cell(0,10,date("d").'-'.date("m").'-'.date("Y"),0,0,'R');
    }
}
$consulta=mysqli_query($con,"SELECT evaluados.Nombres, evaluados.Apellidos,evaluados.Cargo,evaluados.Area, u_consultor.Nombres_u,u_consultor.Apellidos_u, FechaEvaluacion, CONS_REL_INTER,  EXEL_OPERACION, GEST_RECURSOS,ADAPT_CAMBIO,ORIEN_RESULTA,SGC,SEG_IND_SAL_OCUP,TOTAL, resultado_tactico_respuestas.pre1,resultado_tactico_respuestas.pre2, resultado_tactico_respuestas.pre3,resultado_tactico_respuestas.pre4,resultado_tactico_respuestas.pre5,resultado_tactico_respuestas.pre6,resultado_tactico_respuestas.pre7,resultado_tactico_respuestas.pre8,resultado_tactico_respuestas.pre9,resultado_tactico_respuestas.pre10,resultado_tactico_respuestas.pre11,resultado_tactico_respuestas.pre12,resultado_tactico_respuestas.pre13,resultado_tactico_respuestas.pre14,resultado_tactico_respuestas.pre15,resultado_tactico_respuestas.pre16,resultado_tactico_respuestas.pre17,resultado_tactico_respuestas.pre18,resultado_tactico_respuestas.pre19,resultado_tactico_respuestas.pre20,resultado_tactico_respuestas.pre21,resultado_tactico_respuestas.pre22,resultado_tactico_respuestas.pre23,resultado_tactico_respuestas.pre24,resultado_tactico_respuestas.pre25,resultado_tactico_respuestas.pre26,resultado_tactico_respuestas.pre27,resultado_tactico_respuestas.pre28,resultado_tactico_respuestas.pre29,resultado_tactico_respuestas.pre30,resultado_tactico_respuestas.pre31,resultado_tactico_respuestas.debilidades,resultado_tactico_respuestas.fortalezas,resultado_tactico_respuestas.capacitacion FROM `resultado_tactico` 
INNER JOIN evaluados ON evaluados.Identificacion=resultado_tactico.idIdentificacion 
INNER JOIN resultado_tactico_respuestas ON evaluados.Identificacion=resultado_tactico_respuestas.idEvaluado 
INNER JOIN u_consultor ON resultado_tactico_respuestas.idConsultor=u_consultor.Identificacion
WHERE resultado_tactico.idIdentificacion=$idEvaluado");
$row = mysqli_fetch_array($consulta, MYSQLI_ASSOC);


if ($row['CONS_REL_INTER']>4.4) {
    $col=array(0, 176, 240);
}elseif ($row['CONS_REL_INTER']>3.4) {
    $col=array(146,208,80);
}elseif ($row['CONS_REL_INTER']>1.9) {    
    $col=array(255,255,0);
}else{
    $col=array(255,0,0);    
}
if ($row['EXEL_OPERACION']>4.4) {
    $col1=array(0, 176, 240);
}elseif ($row['EXEL_OPERACION']>3.4) {
    $col1=array(146,208,80);
}elseif ($row['EXEL_OPERACION']>1.9) {    
    $col1=array(255,255,0);
}else{
    $col1=array(255,0,0);    
}
if ($row['GEST_RECURSOS']>4.4) {
    $col2=array(0, 176, 240);
}elseif ($row['GEST_RECURSOS']>3.4) {
    $col2=array(146,208,80);
}elseif ($row['GEST_RECURSOS']>1.9) {    
    $col2=array(255,255,0);
}else{
    $col2=array(255,0,0);    
}
if ($row['ADAPT_CAMBIO']>4.4) {
    $col3=array(0, 176, 240);
}elseif ($row['ADAPT_CAMBIO']>3.4) {
    $col3=array(146,208,80);
}elseif ($row['ADAPT_CAMBIO']>1.9) {    
    $col3=array(255,255,0);
}else{
    $col3=array(255,0,0);    
}
if ($row['ORIEN_RESULTA']>4.4) {
    $col4=array(0, 176, 240);
}elseif ($row['ORIEN_RESULTA']>3.4) {
    $col4=array(146,208,80);
}elseif ($row['ORIEN_RESULTA']>1.9) {    
    $col4=array(255,255,0);
}else{
    $col4=array(255,0,0);    
}
if ($row['SGC']>4.4) {
    $col5=array(0, 176, 240);
}elseif ($row['SGC']>3.4) {
    $col5=array(146,208,80);
}elseif ($row['SGC']>1.9) {    
    $col5=array(255,255,0);
}else{
    $col5=array(255,0,0);    
}
if ($row['SEG_IND_SAL_OCUP']>4.4) {
    $col6=array(0, 176, 240);
}elseif ($row['SEG_IND_SAL_OCUP']>3.4) {
    $col6=array(146,208,80);
}elseif ($row['SEG_IND_SAL_OCUP']>1.9) {    
    $col6=array(255,255,0);
}else{
    $col6=array(255,0,0);    
}


#preguntas 1
if ($row['pre1']>4.4) {
    $color1=array(0, 176, 240);
}elseif ($row['pre1']>3.4) {
    $color1=array(146,208,80);
}elseif ($row['pre1']>1.9) {    
    $color1=array(255,255,0);
}else{
    $color1=array(255,0,0);    
}
#preguntas 2
if ($row['pre2']>4.4) {
    $color2=array(0, 176, 240);
}elseif ($row['pre2']>3.4) {
    $color2=array(146,208,80);
}elseif ($row['pre2']>1.9) {
    $color2=array(255,255,0);
}else{
     $color2=array(255,0,0);
}
#preguntas 3
if ($row['pre3']>4.4) {
    $color3=array(0, 176, 240);
}elseif ($row['pre3']>3.4) {
    $color3=array(146,208,80);
}elseif ($row['pre3']>1.9) {
    $color3=array(255,255,0);
}else{
    $color3=array(255,0,0);
    
}
# ----PREGUNTA 4
if ($row['pre4']>4.4) {
    $color4=array(0, 176, 240);
}elseif ($row['pre4']>3.4) {
    $color4=array(146,208,80);
}elseif ($row['pre4']>1.9) {
    $color4=array(255,255,0);
}else{
    $color4=array(255,0,0);
    
}
# ----PREGUNTA 5
if ($row['pre5']>4.4) {
    $color5=array(0, 176, 240);
}elseif ($row['pre5']>3.4) {
    $color5=array(146,208,80);
}elseif ($row['pre5']>1.9) {
    $color5=array(255,255,0);
}else{
    $color5=array(255,0,0);
    
}
# ----PREGUNTA 6
if ($row['pre6']>4.4) {
    $color6=array(0, 176, 240);
}elseif ($row['pre6']>3.4) {
    $color6=array(146,208,80);
}elseif ($row['pre6']>1.9) {
    $color6=array(255,255,0);
}else{
    $color6=array(255,0,0);
    
}
# ----PREGUNTA 7
if ($row['pre7']>4.4) {
    $color7=array(0, 176, 240);
}elseif ($row['pre7']>3.4) {
    $color7=array(146,208,80);
}elseif ($row['pre7']>1.9) {
    $color7=array(255,255,0);
}else{
    $color7=array(255,0,0);
    
}
# ----PREGUNTA 8
if ($row['pre8']>4.4) {
    $color8=array(0, 176, 240);
}elseif ($row['pre8']>3.4) {
    $color8=array(146,208,80);
}elseif ($row['pre8']>1.9) {
    $color8=array(255,255,0);
}else{
    $color8=array(255,0,0);
    
}
# ----PREGUNTA 9
if ($row['pre9']>4.4) {
    $color9=array(0, 176, 240);
}elseif ($row['pre9']>3.4) {
    $color9=array(146,208,80);
}elseif ($row['pre9']>1.9) {
    $color9=array(255,255,0);
}else{
    $color9=array(255,0,0);
    
}
# ----PREGUNTA 10
if ($row['pre10']>4.4) {
    $color10=array(0, 176, 240);
}elseif ($row['pre10']>3.4) {
    $color10=array(146,208,80);
}elseif ($row['pre10']>1.9) {
    $color10=array(255,255,0);
}else{
    $color10=array(255,0,0);
    
}
# ----PREGUNTA 11
if ($row['pre11']>4.4) {
    $color11=array(0, 176, 240);
}elseif ($row['pre11']>3.4) {
    $color11=array(146,208,80);
}elseif ($row['pre11']>1.9) {
    $color11=array(255,255,0);
}else{
    $color11=array(255,0,0);
    
}
# ----PREGUNTA 12
if ($row['pre12']>4.4) {
    $color12=array(0, 176, 240);
}elseif ($row['pre12']>3.4) {
    $color12=array(146,208,80);
}elseif ($row['pre12']>1.9) {
    $color12=array(255,255,0);
}else{
    $color12=array(255,0,0);
    
}# ----PREGUNTA 13
if ($row['pre13']>4.4) {
    $color13=array(0, 176, 240);
}elseif ($row['pre13']>3.4) {
    $color13=array(146,208,80);
}elseif ($row['pre13']>1.9) {
    $color13=array(255,255,0);
}else{
    $color13=array(255,0,0);
    
}# ----PREGUNTA 14
if ($row['pre14']>4.4) {
    $color14=array(0, 176, 240);
}elseif ($row['pre14']>3.4) {
    $color14=array(146,208,80);
}elseif ($row['pre14']>1.9) {
    $color14=array(255,255,0);
}else{
    $color14=array(255,0,0);
    
}
# ----PREGUNTA 15
if ($row['pre15']>4.4) {
    $color15=array(0, 176, 240);
}elseif ($row['pre15']>3.4) {
    $color15=array(146,208,80);
}elseif ($row['pre15']>1.9) {
    $color15=array(255,255,0);
}else{
    $color15=array(255,0,0);
    
}
# ----PREGUNTA 16
if ($row['pre16']>4.4) {
    $color16=array(0, 176, 240);
}elseif ($row['pre16']>3.4) {
    $color16=array(146,208,80);
}elseif ($row['pre16']>1.9) {
    $color16=array(255,255,0);
}else{
    $color16=array(255,0,0);
    
}
# ----PREGUNTA 17
if ($row['pre17']>4.4) {
    $color17=array(0, 176, 240);
}elseif ($row['pre17']>3.4) {
    $color17=array(146,208,80);
}elseif ($row['pre17']>1.9) {
    $color17=array(255,255,0);
}else{
    $color17=array(255,0,0);
    
}
# ----PREGUNTA 18
if ($row['pre18']>4.4) {
    $color18=array(0, 176, 240);
}elseif ($row['pre18']>3.4) {
    $color18=array(146,208,80);
}elseif ($row['pre18']>1.9) {
    $color18=array(255,255,0);
}else{
    $color18=array(255,0,0);
    
}
# ----PREGUNTA 19
if ($row['pre19']>4.4) {
    $color19=array(0, 176, 240);
}elseif ($row['pre19']>3.4) {
    $color19=array(146,208,80);
}elseif ($row['pre19']>1.9) {
    $color19=array(255,255,0);
}else{
    $color19=array(255,0,0);
    
}
# ----PREGUNTA 20
if ($row['pre20']>4.4) {
    $color20=array(0, 176, 240);
}elseif ($row['pre20']>3.4) {
    $color20=array(146,208,80);
}elseif ($row['pre20']>1.9) {
    $color20=array(255,255,0);
}else{
    $color20=array(255,0,0);
    
}
# ----PREGUNTA 21
if ($row['pre21']>4.4) {
    $color21=array(0, 176, 240);
}elseif ($row['pre21']>3.4) {
    $color21=array(146,208,80);
}elseif ($row['pre21']>1.9) {
    $color21=array(255,255,0);
}else{
    $color21=array(255,0,0);
    
}
# ----PREGUNTA 22
if ($row['pre22']>4.4) {
    $color22=array(0, 176, 240);
}elseif ($row['pre22']>3.4) {
    $color22=array(146,208,80);
}elseif ($row['pre22']>1.9) {
    $color22=array(255,255,0);
}else{
    $color22=array(255,0,0);
    
}
# ----PREGUNTA 23
if ($row['pre23']>4.4) {
    $color23=array(0, 176, 240);
}elseif ($row['pre23']>3.4) {
    $color23=array(146,208,80);
}elseif ($row['pre23']>1.9) {
    $color23=array(255,255,0);
}else{
    $color23=array(255,0,0);
    
}
# ----PREGUNTA 24
if ($row['pre24']>4.4) {
    $color24=array(0, 176, 240);
}elseif ($row['pre24']>3.4) {
    $color24=array(146,208,80);
}elseif ($row['pre24']>1.9) {
    $color24=array(255,255,0);
}else{
    $color24=array(255,0,0);
    
}
# ----PREGUNTA 25
if ($row['pre25']>4.4) {
    $color25=array(0, 176, 240);
}elseif ($row['pre25']>3.4) {
    $color25=array(146,208,80);
}elseif ($row['pre25']>1.9) {
    $color25=array(255,255,0);
}else{
    $color25=array(255,0,0);
    
}
# ----PREGUNTA 26
if ($row['pre26']>4.4) {
    $color26=array(0, 176, 240);
}elseif ($row['pre26']>3.4) {
    $color26=array(146,208,80);
}elseif ($row['pre26']>1.9) {
    $color26=array(255,255,0);
}else{
    $color26=array(255,0,0);
    
}
# ----PREGUNTA 27
if ($row['pre27']>4.4) {
    $color27=array(0, 176, 240);
}elseif ($row['pre27']>3.4) {
    $color27=array(146,208,80);
}elseif ($row['pre27']>1.9) {
    $color27=array(255,255,0);
}else{
    $color27=array(255,0,0);
    
}
# ----PREGUNTA 28
if ($row['pre28']>4.4) {
    $color28=array(0, 176, 240);
}elseif ($row['pre28']>3.4) {
    $color28=array(146,208,80);
}elseif ($row['pre28']>1.9) {
    $color28=array(255,255,0);
}else{
    $color28=array(255,0,0);
    
}
# ----PREGUNTA 29
if ($row['pre29']>4.4) {
    $color29=array(0, 176, 240);
}elseif ($row['pre29']>3.4) {
    $color29=array(146,208,80);
}elseif ($row['pre29']>1.9) {
    $color29=array(255,255,0);
}else{
    $color29=array(255,0,0);
    
}
# ----PREGUNTA 30
if ($row['pre30']>4.4) {
    $color30=array(0, 176, 240);
}elseif ($row['pre30']>3.4) {
    $color30=array(146,208,80);
}elseif ($row['pre30']>1.9) {
    $color30=array(255,255,0);
}else{
    $color30=array(255,0,0);
    
}
# ----PREGUNTA 31
if ($row['pre31']>4.4) {
    $color31=array(0, 176, 240);
}elseif ($row['pre31']>3.4) {
    $color31=array(146,208,80);
}elseif ($row['pre31']>1.9) {
    $color31=array(255,255,0);
}else{
    $color31=array(255,0,0);
    
}
# ----PREGUNTA TOT
if ($row['TOTAL']>4.4) {
    $coltot=array(0, 176, 240);
}elseif ($row['TOTAL']>3.4) {
    $coltot=array(146,208,80);
}elseif ($row['TOTAL']>1.9) {
    $coltot=array(255,255,0);
}else{
    $coltot=array(255,0,0);
    
}
// Creación del objeto de la clase heredada
$pdf = new PDF('P','mm','Legal');
$pdf->AliasNbPages();
$pdf->SetTitle('Reporte Tactico');
$pdf->AddPage();
$pdf->SetFont('Times','',10);
$pdf->Cell(200,5,utf8_decode('EVALUACIÓN DE DESEMPEÑO'),1,0,'C',0);
$pdf->Ln();
$pdf->Cell(45,5,utf8_decode('NOMBRE DE EMPLEADO: '),1,0,'L',0);
$pdf->SetFont('Times','',8);
$pdf->Cell(108,5,utf8_decode($row['Nombres'].' '.$row['Apellidos']),1,0,'L',0);
$pdf->SetFont('Times','',10);
$pdf->Cell(47,5,utf8_decode('PUNTUACIÓN PONDERADA'),1,0,'C',0);
$pdf->Ln();
$pdf->Cell(45,5,utf8_decode('CARGO ACTUAL: '),1,0,'L',0);
$pdf->SetFont('Times','',8);
$pdf->Cell(108,5,utf8_decode($row['Cargo']),1,0,'L',0);
$pdf->SetFont('Times','',10);
$pdf->Cell(47,5,utf8_decode(''),0,0,'C',0);
$pdf->Ln();
$pdf->Cell(45,5,utf8_decode('DEPARTAMENTO: '),1,0,'L',0);
$pdf->SetFont('Times','',8);
$pdf->Cell(108,5,utf8_decode($row['Area']),1,0,'L',0);
$pdf->SetFont('Times','',20);
$pdf->SetXY(163,47);
$pdf->SetFillColor($coltot[0],$coltot[1],$coltot[2]);
$pdf->MultiCell(47,10,utf8_decode($row['TOTAL']),1,'C',1);
$pdf->SetFont('Times','',10);
$pdf->Cell(45,5,utf8_decode('FECHA DE EVALUACIÓN: '),1,0,'L',0);
$pdf->SetFont('Times','',8);
$pdf->Cell(80,5,utf8_decode($row['FechaEvaluacion']),1,0,'L',0);
$pdf->SetFont('Times','',10);
$pdf->Cell(45,5,utf8_decode('PERIODO A EVALUAR: '),1,0,'L',0);
$pdf->Cell(30,5,(date('Y')-1).'-1',1,0,'L',0);
$pdf->Ln();$pdf->Ln();
$pdf->Cell(200,10,utf8_decode('NIVEL TACTICO'),1,0,'C',0);
#                MODULO 1
$pdf->Ln();
$pdf->Cell(180,5,utf8_decode('CONSTRUCCIÓN DE RELACIONES INTERPERSONALES'),1,0,'C',0);
$pdf->SetFont('Times','',8);
$pdf->Cell(20,5,utf8_decode('CALIFICACIÓN'),1,0,'C',0);
#               PREGUNTA 1
$pdf->Ln();
$pdf->Cell(5,4,utf8_decode('1'),1,0,'C',0);
$pdf->SetFont('Times','',6);
$pdf->Cell(175,4,utf8_decode('Promueve con sus acciones, relaciones interpersonales adecuadas con cliente externo para el desarrollo de sus funciones y por ende aportar a la consecución de metas corporativas'),1,0,'L',0);
$pdf->SetFillColor($color1[0],$color1[1],$color1[2]);
$pdf->SetFont('Times','',8);
$pdf->Cell(20,4,utf8_decode($row['pre1']),1,0,'C',1);
#               PREGUNTA 2
$pdf->Ln();
$pdf->Cell(5,4,utf8_decode('2'),1,0,'C',0);
$pdf->SetFont('Times','',6);
$pdf->Cell(175,4,utf8_decode('Trabaja en equipo con compañeros de otras áreas de forma comunicativa y constructiva, demostrando un comportamiento orientado a la colaboración continua y entendimiento interpersonal'),1,0,'L',0);
$pdf->SetFillColor($color2[0],$color2[1],$color2[2]);
$pdf->SetFont('Times','',8);
$pdf->Cell(20,4,utf8_decode($row['pre2']),1,0,'C',1);
#               PREGUNTA 3
$pdf->Ln();
$pdf->Cell(5,4,utf8_decode('3'),1,0,'C',0);
$pdf->SetFont('Times','',7);
$pdf->Cell(175,4,utf8_decode('Fomenta dentro su grupo un clima laboral de respeto, colaboración e integración en pro del cumplimiento de objetivos inherentes a su área.'),1,0,'L',0);
$pdf->SetFillColor($color3[0],$color3[1],$color3[2]);
$pdf->SetFont('Times','',8);
$pdf->Cell(20,4,utf8_decode($row['pre3']),1,0,'C',1);
$pdf->Ln();
$pdf->Cell(180,6,utf8_decode('PROMEDIO DE MÓDULO'),1,0,'R',0);
$pdf->SetFillColor($col[0],$col[1],$col[2]);
$pdf->SetFont('Times','',12);
$pdf->Cell(20,6,utf8_decode($row['CONS_REL_INTER']),1,0,'C',1);
#                MODULO 2
$pdf->Ln();
$pdf->SetFont('Times','',10);
$pdf->Cell(180,5,utf8_decode('EXCELENCIA OPERACIONAL'),1,0,'C',0);
$pdf->SetFont('Times','',8);
$pdf->Cell(20,5,utf8_decode('CALIFICACIÓN'),1,0,'C',0);
#               PREGUNTA 4
$pdf->Ln();
$pdf->Cell(5,4,utf8_decode('1'),1,0,'C',0);
$pdf->SetFont('Times','',8);
$pdf->Cell(175,4,utf8_decode('Define, revisa y modifica de ser necesario los procedimientos a su cargo para el cumplimiento de los objetivos del área'),1,0,'L',0);
$pdf->SetFillColor($color4[0],$color4[1],$color4[2]);
$pdf->Cell(20,4,utf8_decode($row['pre4']),1,0,'C',1);

#               PREGUNTA 5
$pdf->Ln();
$pdf->Cell(5,4,utf8_decode('2'),1,0,'C',0);
$pdf->SetFont('Times','',8);
$pdf->Cell(175,4,utf8_decode('Realiza control y seguimiento de las actividades y funciones propias del área, garantizando oportunidad, calidad y efectividad'),1,0,'L',0);
$pdf->SetFillColor($color5[0],$color5[1],$color5[2]);
$pdf->Cell(20,4,utf8_decode($row['pre5']),1,0,'C',1);
#               PREGUNTA 6
$pdf->Ln();
$pdf->Cell(5,4,utf8_decode('3'),1,0,'C',0);
$pdf->SetFont('Times','',8);
$pdf->Cell(175,4,utf8_decode('Coordina y respalda todas las acciones y actividades que se ejecutan en su área, orientado a facilitar la consecución de los objetivos trazados'),1,0,'L',0);
$pdf->SetFillColor($color6[0],$color6[1],$color6[2]);
$pdf->Cell(20,4,utf8_decode($row['pre6']),1,0,'C',1);
$pdf->Ln();
$pdf->Cell(180,6,utf8_decode('PROMEDIO DE MÓDULO'),1,0,'R',0);
$pdf->SetFillColor($col1[0],$col1[1],$col1[2]);
$pdf->SetFont('Times','',12);
$pdf->Cell(20,6,utf8_decode($row['EXEL_OPERACION']),1,0,'C',1);

#                MODULO 3
$pdf->Ln();
$pdf->SetFont('Times','',10);
$pdf->Cell(180,5,utf8_decode('GESTIÓN DE RECURSOS'),1,0,'C',0);
$pdf->SetFont('Times','',8);
$pdf->Cell(20,5,utf8_decode('CALIFICACIÓN'),1,0,'C',0);

#               PREGUNTA 7
$pdf->Ln();
$pdf->Cell(5,4,utf8_decode('1'),1,0,'C',0);
$pdf->SetFont('Times','',8);
$pdf->Cell(175,4,utf8_decode('Define y delimita los recursos necesarios para garantizar la operación y la ejecución de las funciones de su área con calidad y oportunidad'),1,0,'L',0);
$pdf->SetFillColor($color7[0],$color7[1],$color7[2]);
$pdf->Cell(20,4,utf8_decode($row['pre7']),1,0,'C',1);

#               PREGUNTA 8
$pdf->Ln();
$pdf->Cell(5,4,utf8_decode('2'),1,0,'C',0);
$pdf->SetFont('Times','',8);
$pdf->Cell(175,4,utf8_decode('Controla y evalúa la ejecución y uso de los recursos definidos para el cumplimiento del objetivo trazado en su área'),1,0,'L',0);
$pdf->SetFillColor($color8[0],$color8[1],$color8[2]);
$pdf->Cell(20,4,utf8_decode($row['pre8']),1,0,'C',1);
#               PREGUNTA 9
$pdf->Ln();
$pdf->Cell(5,4,utf8_decode('3'),1,0,'C',0);
$pdf->SetFont('Times','',8);
$pdf->Cell(175,4,utf8_decode('Planea y organiza de forma adecuada el presupuesto y recursos asignados para su área, buscando rentabilidad y eficiencia'),1,0,'L',0);
$pdf->SetFillColor($color9[0],$color9[1],$color9[2]);
$pdf->Cell(20,4,utf8_decode($row['pre9']),1,0,'C',1);
$pdf->Ln();
$pdf->Cell(180,6,utf8_decode('PROMEDIO DE MÓDULO'),1,0,'R',0);
$pdf->SetFillColor($col2[0],$col2[1],$col2[2]);
$pdf->SetFont('Times','',12);
$pdf->Cell(20,6,utf8_decode($row['GEST_RECURSOS']),1,0,'C',1);
#                MODULO 4
$pdf->Ln();
$pdf->SetFont('Times','',10);
$pdf->Cell(180,5,utf8_decode('ADAPTABILIDAD AL CAMBIO'),1,0,'C',0);
$pdf->SetFont('Times','',8);
$pdf->Cell(20,5,utf8_decode('CALIFICACIÓN'),1,0,'C',0);
#               PREGUNTA 10
$pdf->Ln();
$pdf->Cell(5,4,utf8_decode('1'),1,0,'C',0);
$pdf->SetFont('Times','',8);
$pdf->Cell(175,4,utf8_decode('Se adapta a los diferentes cambios que se presentan en el medio en el cual ejerce la actividad de forma constructiva y positiva.'),1,0,'L',0);
$pdf->SetFillColor($color10[0],$color10[1],$color10[2]);
$pdf->Cell(20,4,utf8_decode($row['pre10']),1,0,'C',1);
#               PREGUNTA 11
$pdf->Ln();
$pdf->Cell(5,4,utf8_decode('2'),1,0,'C',0);
$pdf->SetFont('Times','',8);
$pdf->Cell(175,4,utf8_decode('Es receptivo y proactivo frente a las nuevas disposiciones que se requieran en el desarrollo del negocio y/o de los proyectos en los cuales participa'),1,0,'L',0);
$pdf->SetFillColor($color11[0],$color11[1],$color11[2]);
$pdf->Cell(20,4,utf8_decode($row['pre11']),1,0,'C',1);
#               PREGUNTA 12
$pdf->Ln();
$pdf->Cell(5,4,utf8_decode('3'),1,0,'C',0);
$pdf->SetFont('Times','',8);
$pdf->Cell(175,4,utf8_decode('Reorganiza sus actividades ante los cambios de su entorno laboral.'),1,0,'L',0);
$pdf->SetFillColor($color12[0],$color12[1],$color12[2]);
$pdf->Cell(20,4,utf8_decode($row['pre12']),1,0,'C',1);
$pdf->Ln();
$pdf->Cell(180,6,utf8_decode('PROMEDIO DE MÓDULO'),1,0,'R',0);
$pdf->SetFillColor($col3[0],$col3[1],$col3[2]);
$pdf->SetFont('Times','',12);
$pdf->Cell(20,6,utf8_decode($row['ADAPT_CAMBIO']),1,0,'C',1);
#                MODULO 5
$pdf->Ln();
$pdf->SetFont('Times','',10);
$pdf->Cell(180,5,utf8_decode('ORIENTACIÓN A RESULTADOS'),1,0,'C',0);
$pdf->SetFont('Times','',8);
$pdf->Cell(20,5,utf8_decode('CALIFICACIÓN'),1,0,'C',0);

#               PREGUNTA 13
$pdf->Ln();
$pdf->Cell(5,4,utf8_decode('1'),1,0,'C',0);
$pdf->SetFont('Times','',8);
$pdf->Cell(175,4,utf8_decode('Cumple las tareas asignadas en función de estándares y objetivos establecidos por la Organización'),1,0,'L',0);
$pdf->SetFillColor($color13[0],$color13[1],$color13[2]);
$pdf->Cell(20,4,utf8_decode($row['pre13']),1,0,'C',1);
#               PREGUNTA 14
$pdf->Ln();
$pdf->Cell(5,4,utf8_decode('2'),1,0,'C',0);
$pdf->SetFont('Times','',8);
$pdf->Cell(175,4,utf8_decode('Define cronogramas, cumple las fechas de entrega y realiza seguimientos periódicos a sus compromisos.'),1,0,'L',0);
$pdf->SetFillColor($color14[0],$color14[1],$color14[2]);
$pdf->Cell(20,4,utf8_decode($row['pre14']),1,0,'C',1);
#               PREGUNTA 15
$pdf->Ln();
$pdf->Cell(5,4,utf8_decode('3'),1,0,'C',0);
$pdf->SetFont('Times','',8);
$pdf->Cell(175,4,utf8_decode('Alcanza los resultados esperados a partir de establecer la relación costo/beneficio de sus funciones.'),1,0,'L',0);
$pdf->SetFillColor($color15[0],$color15[1],$color15[2]);
$pdf->Cell(20,4,utf8_decode($row['pre15']),1,0,'C',1);
$pdf->Ln();
$pdf->Cell(180,6,utf8_decode('PROMEDIO DE MÓDULO'),1,0,'R',0);
$pdf->SetFillColor($col4[0],$col4[1],$col4[2]);
$pdf->SetFont('Times','',12);
$pdf->Cell(20,6,utf8_decode($row['ORIEN_RESULTA']),1,0,'C',1);
#                MODULO 6
$pdf->Ln();
$pdf->SetFont('Times','',10);
$pdf->Cell(180,5,utf8_decode('SISTEMA DE GESTIÓN DE CALIDAD (SGC)'),1,0,'C',0);
$pdf->SetFont('Times','',8);
$pdf->Cell(20,5,utf8_decode('CALIFICACIÓN'),1,0,'C',0);
#               PREGUNTA 16
$pdf->Ln();
$pdf->Cell(5,4,utf8_decode('1'),1,0,'C',0);
$pdf->SetFont('Times','',8);
$pdf->Cell(175,4,utf8_decode('Documenta e implementa  los requisitos del sistema de gestión de calidad a su cargo.'),1,0,'L',0);
$pdf->SetFillColor($color16[0],$color16[1],$color16[2]);
$pdf->Cell(20,4,utf8_decode($row['pre16']),1,0,'C',1);
#               PREGUNTA 17
$pdf->Ln();
$pdf->Cell(5,4,utf8_decode('2'),1,0,'C',0);
$pdf->SetFont('Times','',8);
$pdf->Cell(175,4,utf8_decode('Efectúa seguimiento y control de su proceso a través de la medición de  los indicadores de gestión establecidos para su proceso.'),1,0,'L',0);
$pdf->SetFillColor($color17[0],$color17[1],$color17[2]);
$pdf->Cell(20,4,utf8_decode($row['pre17']),1,0,'C',1);
#               PREGUNTA 18
$pdf->Ln();
$pdf->Cell(5,4,utf8_decode('3'),1,0,'C',0);
$pdf->SetFont('Times','',8);
$pdf->Cell(175,4,utf8_decode('Identifica e implementa acciones correctivas, acciones preventivas y oportunidades de mejora que aporten al desarrollo de su proceso.'),1,0,'L',0);
$pdf->SetFillColor($color18[0],$color18[1],$color18[2]);
$pdf->Cell(20,4,utf8_decode($row['pre18']),1,0,'C',1);
$pdf->Ln();
$pdf->Cell(180,6,utf8_decode('PROMEDIO DE MÓDULO'),1,0,'R',0);
$pdf->SetFillColor($col5[0],$col5[1],$col5[2]);
$pdf->SetFont('Times','',12);
$pdf->Cell(20,6,utf8_decode($row['SGC']),1,0,'C',1);
#                MODULO 7
$pdf->Ln();
$pdf->SetFont('Times','',10);
$pdf->Cell(180,5,utf8_decode('SEGURIDAD INDUSTRIAL, SALUD OCUPACIONAL Y MEDIO AMBIENTE'),1,0,'C',0);
$pdf->SetFont('Times','',8);
$pdf->Cell(20,5,utf8_decode('CALIFICACIÓN'),1,0,'C',0);
#               PREGUNTA 19
$pdf->Ln();
$pdf->Cell(5,4,utf8_decode('1'),1,0,'C',0);
$pdf->SetFont('Times','',6);
$pdf->Cell(175,4,utf8_decode('Realiza seguimiento y cumple con los procedimientos, normas, instructivos, planes y programas establecidos en el manual del sistema de gestión SISOMA correspondientes a su proceso.'),1,0,'L',0);
$pdf->SetFillColor($color19[0],$color19[1],$color19[2]);
$pdf->SetFont('Times','',8);
$pdf->Cell(20,4,utf8_decode($row['pre19']),1,0,'C',1);
#               PREGUNTA 20
$pdf->Ln();
$pdf->Cell(5,4,utf8_decode('2'),1,0,'C',0);
$pdf->SetFont('Times','',8);
$pdf->Cell(175,4,utf8_decode('Promueve los hábitos de vida y trabajo saludables,  convirtiéndose en modelo sobre el auto-cuidado en salud.'),1,0,'L',0);
$pdf->SetFillColor($color20[0],$color20[1],$color20[2]);
$pdf->Cell(20,4,utf8_decode($row['pre20']),1,0,'C',1);
#               PREGUNTA 21
$pdf->Ln();
$pdf->Cell(5,4,utf8_decode('3'),1,0,'C',0);
$pdf->SetFont('Times','',8);
$pdf->Cell(175,4,utf8_decode('Participa activamente de las actividades del Sistema de gestión SST-MA. ( campañas de salud, capacitaciones, inducciones, inspecciones)'),1,0,'L',0);
$pdf->SetFillColor($color21[0],$color21[1],$color21[2]);
$pdf->Cell(20,4,utf8_decode($row['pre21']),1,0,'C',1);
#               PREGUNTA 22
$pdf->Ln();
$pdf->Cell(5,4,utf8_decode('4'),1,0,'C',0);
$pdf->SetFont('Times','',8);
$pdf->Cell(175,4,utf8_decode('Conoce los riesgos a los cuales esta expuesto en el desarrollo de sus labores cotidianas y ejecuta los controles.'),1,0,'L',0);
$pdf->SetFillColor($color22[0],$color22[1],$color22[2]);
$pdf->Cell(20,4,utf8_decode($row['pre22']),1,0,'C',1);
#               PREGUNTA 23
$pdf->Ln();
$pdf->Cell(5,4,utf8_decode('5'),1,0,'C',0);
$pdf->SetFont('Times','',8);
$pdf->Cell(175,4,utf8_decode('Demuestra compromiso con el mejoramiento continuo del sistema de gestión reportando oportunidades de mejora'),1,0,'L',0);
$pdf->SetFillColor($color23[0],$color23[1],$color23[2]);
$pdf->Cell(20,4,utf8_decode($row['pre23']),1,0,'C',1);
#               PREGUNTA 24
$pdf->Ln();
$pdf->Cell(5,4,utf8_decode('6'),1,0,'C',0);
$pdf->SetFont('Times','',8);
$pdf->Cell(175,4,utf8_decode('Solicita inmediata prestación de primeros auxilios en caso de lesión por siempre que parezca e informa sobre el particular al jefe inmediato'),1,0,'L',0);
$pdf->SetFillColor($color24[0],$color24[1],$color24[2]);
$pdf->Cell(20,4,utf8_decode($row['pre24']),1,0,'C',1);
#               PREGUNTA 25
$pdf->Ln();
$pdf->Cell(5,4,utf8_decode('7'),1,0,'C',0);
$pdf->SetFont('Times','',7);
$pdf->Cell(175,4,utf8_decode('Realiza una adecuada gestión de los residuos sólidos y/o peligrosos generados en el desarrollo de las actividades de acuerdo a lo dispuesto por la empresa y/o cliente'),1,0,'L',0);
$pdf->SetFillColor($color25[0],$color25[1],$color25[2]);
$pdf->SetFont('Times','',8);
$pdf->Cell(20,4,utf8_decode($row['pre25']),1,0,'C',1);
#               PREGUNTA 26
$pdf->Ln();
$pdf->Cell(5,4,utf8_decode('8'),1,0,'C',0);
$pdf->SetFont('Times','',8);
$pdf->Cell(175,4,utf8_decode('Reporta oportunamente todos los incidentes, accidentes, enfermedades y no conformidades que curren en el desarrollo de sus actividades'),1,0,'L',0);
$pdf->SetFillColor($color26[0],$color26[1],$color26[2]);
$pdf->Cell(20,4,utf8_decode($row['pre26']),1,0,'C',1);
#               PREGUNTA 27
$pdf->Ln();
$pdf->Cell(5,4,utf8_decode('9'),1,0,'C',0);
$pdf->SetFont('Times','',8);
$pdf->Cell(175,4,utf8_decode('Detecta y reporta no conformidades potenciales para implementar acciones preventivas'),1,0,'L',0);
$pdf->SetFillColor($color27[0],$color27[1],$color27[2]);
$pdf->Cell(20,4,utf8_decode($row['pre27']),1,0,'C',1);
#               PREGUNTA 28
$pdf->Ln();
$pdf->Cell(5,4,utf8_decode('10'),1,0,'C',0);
$pdf->SetFont('Times','',8);
$pdf->Cell(175,4,utf8_decode('Detecta y reporta no conformidades reales para eliminar sus causas'),1,0,'L',0);
$pdf->SetFillColor($color28[0],$color28[1],$color28[2]);
$pdf->Cell(20,4,utf8_decode($row['pre28']),1,0,'C',1);
#               PREGUNTA 29
$pdf->Ln();
$pdf->Cell(5,4,utf8_decode('11'),1,0,'C',0);
$pdf->SetFont('Times','',8);
$pdf->Cell(175,4,utf8_decode('Usa correctamente los equipos y herramientas de trabajo suministrados por la empresa'),1,0,'L',0);
$pdf->SetFillColor($color29[0],$color29[1],$color29[2]);
$pdf->Cell(20,4,utf8_decode($row['pre29']),1,0,'C',1);
#               PREGUNTA 30
$pdf->Ln();
$pdf->Cell(5,4,utf8_decode('12'),1,0,'C',0);
$pdf->SetFont('Times','',8);
$pdf->Cell(175,4,utf8_decode('Conoce, entiende y aplica las políticas SST-MA de la empresa'),1,0,'L',0);
$pdf->SetFillColor($color30[0],$color30[1],$color30[2]);
$pdf->Cell(20,4,utf8_decode($row['pre30']),1,0,'C',1);
#               PREGUNTA 31
$pdf->Ln();
$pdf->Cell(5,4,utf8_decode('13'),1,0,'C',0);
$pdf->SetFont('Times','',8);
$pdf->Cell(175,4,utf8_decode('Desarrolla las actividades propias de su cargo en forma segura promoviendo y aplicando el autocuidado'),1,0,'L',0);
$pdf->SetFillColor($color31[0],$color31[1],$color31[2]);
$pdf->Cell(20,4,utf8_decode($row['pre31']),1,0,'C',1);
$pdf->Ln();
$pdf->Cell(180,6,utf8_decode('PROMEDIO DE MÓDULO'),1,0,'R',0);
$pdf->SetFillColor($col5[0],$col5[1],$col5[2]);
$pdf->SetFont('Times','',12);
$pdf->Cell(20,6,utf8_decode($row['SEG_IND_SAL_OCUP']),1,0,'C',1);
#           DEBILIDADES Y FORTALEZAS
$pdf->Ln();$pdf->Ln();
$pdf->SetFont('Times','',10);
$pdf->Cell(200,10,utf8_decode('ENTREVISTA CON EL TRABAJADOR'),1,0,'C',0);
$pdf->Ln();
$pdf->Cell(100,5,utf8_decode('DEBILIDADES'),1,0,'C',0);
$pdf->Cell(100,5,utf8_decode('FORTALEZAS'),1,0,'C',0);
$pdf->Ln();
$pdf->MultiCell(100,5,utf8_decode($row['debilidades']),1,'L',0);
$pdf->SetXY(110,299);
$pdf->MultiCell(100,5,utf8_decode($row['fortalezas']),1,'L',0);
#           CAPACITACIO
$pdf->Ln();$pdf->Ln();$pdf->Ln();$pdf->Ln();
$pdf->SetFont('Times','',10);
$pdf->MultiCell(200,10,utf8_decode('NECESIDADES DE CAPACITACION Y/O ENTRENAMIENTO'),1,'C',0);
$pdf->SetFont('Times','',8);
$pdf->MultiCell(200,3,utf8_decode('¿Sobre qué áreas particulares de conocimientos y habilidades de su trabajo programar capacitación y/o entrenamiento, a manera de fortalecer al empleado en el desempeño de su puesto actual?'),1,'C',0);
$pdf->MultiCell(200,5,utf8_decode($row['capacitacion']),1,'L',0);
$pdf->Ln(20);
$pdf->Cell(100,5,utf8_decode('____________________________________'),0,0,'C',0);
$pdf->Cell(100,5,utf8_decode('____________________________________'),0,0,'C',0);
$pdf->Ln();
$pdf->Cell(100,5,utf8_decode('Firma Evaluador'),0,0,'C',0);
$pdf->Cell(100,5,utf8_decode('Firma Empleado'),0,0,'C',0);
$pdf->Ln();
$pdf->Cell(100,5,utf8_decode($row['Nombres_u'].' '.$row['Apellidos_u']),0,0,'C',0);
$pdf->Cell(100,5,utf8_decode($row['Nombres'].' '.$row['Apellidos']),0,0,'C',0);
$nombreArchivo="ReporteTactico".$row['Nombres'].$row['Apellidos'].".pdf";
$pdf->Output($nombreArchivo,'I');
?>