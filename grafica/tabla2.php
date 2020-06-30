<?php

if (isset($_POST['id']) && !empty($_POST['id'])) {
    $funcion=$_POST['id'];
    switch ($funcion) {
        case 'resultado_operativo':
            operativo();
            break;
        case 'resultado_estrategico':
            estrategico();
            break;
        case 'resultado_tactico':
            tactico();
            break;
        case 'resultado_tacticoestrategico':
            tacestra();
            break;
    }   
}

function operativo(){
	require 'conexion.php';
	$tabla=$_POST['id'];
	$consulta=mysqli_query($con,"SELECT AVG(Ex_Operaciona),AVG(Ges_Recursos),AVG(Adap_Cambio),AVG(Or_Resultados),AVG(SGC),AVG(SIndust_SaOcupa),AVG(TOTAL) FROM $tabla WHERE TOTAL>0");
	echo "<table class='table table-striped table-hover table-bordered' style='font-family: unset;font-size: 18px;letter-spacing: 0px;'>
            <thead>
            <tr>
                <th style='text-align:center;'>Excelencia Operacional</th>
                <th style='text-align:center;'>Gestión Recursos</th>
                <th style='text-align:center;'>Adaptabilidad al Cambio</th>
                <th style='text-align:center;'>Orientación de Resultados</th>
                <th style='text-align:center;'>SGC</th>
                <th style='text-align:center;'>Seguridad Industrial Y salud Ocupacional</th>
                <th style='text-align:center;'>Total</th>
            </tr></thead><tbody>";
	if (mysqli_num_rows($consulta)>0) {
		while ($row=mysqli_fetch_array($consulta,MYSQLI_ASSOC)) {
			echo "<tr>";
			foreach ($row as $dato) {
				echo "<td>".round($dato,2,PHP_ROUND_HALF_DOWN)."</td>";
			}
			echo "</tr>";
			$daty=json_encode($row);
			$file='operativo.json';
			file_put_contents($file, $daty);
			
		}

	}else{
		echo "ERROR EN CONSULTA: ". mysqli_error($con);
 }
 echo "</tbody></table>";
 mysqli_close($con);
 echo "<script type='text/javascript'>        
           $(document).ready(function(){
           $('#grafica2').load('operativogra.php');
           });
    </script>";

 }
function estrategico(){
		require 'conexion.php';
		$tabla=$_POST['id'];
		$consulta=mysqli_query($con,"SELECT AVG(Gestion_Desarrollo),AVG(Ges_Financiera),AVG(Orientacion_Res),AVG(AdaptabilidadC),AVG(SGC),AVG(SIndust_SaOcupa),AVG(TOTAL) FROM $tabla WHERE TOTAL>0");

		echo "<table class='table table-striped table-hover table-bordered' style='font-family: unset;font-size: 18px;letter-spacing: 0px;'>
            <thead>
            <tr>
                <th style='text-align:center;'>Gestión de Desarrollo</th>
                <th style='text-align:center;'>Gestión Financiera</th>
                <th style='text-align:center;'>Orientación de Resultados</th>
                <th style='text-align:center;'>Adaptabilidad al Cambio</th>
                <th style='text-align:center;'>SGC</th>
                <th style='text-align:center;'>Seguridad Industrial Y salud Ocupacional</th>
                <th style='text-align:center;'>Total</th>
            </tr></thead><tbody>";
	 if (mysqli_num_rows($consulta)>0) {
		while ($row=mysqli_fetch_array($consulta,MYSQLI_ASSOC)) {
			echo "<tr>";
			foreach ($row as $dato) {
				echo "<td>".round($dato,2,PHP_ROUND_HALF_DOWN)."</td>";
			}
			echo "</tr>";
			$daty=json_encode($row);
			$file='estrategico.json';
			file_put_contents($file, $daty);
			
		}

	 }else{
		echo "ERROR EN CONSULTA: ". mysqli_error($con);
	 }
	 echo "</tbody></table>";
	  mysqli_close($con);
	  echo "<script type='text/javascript'>        
           $(document).ready(function(){
           $('#grafica2').load('estrategicogra.php');
           });
    </script>";

	}
function tactico(){
	require 'conexion.php';
		$tabla=$_POST['id'];
		$consulta=mysqli_query($con,"SELECT AVG(CONS_REL_INTER),AVG(EXEL_OPERACION),AVG(GEST_RECURSOS),AVG(ADAPT_CAMBIO),AVG(ORIEN_RESULTA),AVG(SGC),AVG(SEG_IND_SAL_OCUP),AVG(TOTAL) FROM $tabla WHERE TOTAL>0");
		echo "<table class='table table-striped table-hover table-bordered' style='font-family: unset;font-size: 18px;letter-spacing: 0px;'>
            <thead>
            <tr>
                <th style='text-align:center;'>Construcción Relaciones Interpersonales</th>
                <th style='text-align:center;'>Excelencia Operacional</th>
                <th style='text-align:center;'>Gestión de Recursos</th>
                <th style='text-align:center;'>Adaptabilidad al Cambio</th>
                <th style='text-align:center;'>Orientación de Resultados</th>
                <th style='text-align:center;'>SGC</th>
                <th style='text-align:center;'>Seguridad Industrial Y salud Ocupacional</th>
                <th style='text-align:center;'>Total</th>
            </tr></thead><tbody>";
	 if (mysqli_num_rows($consulta)>0) {
		while ($row=mysqli_fetch_array($consulta,MYSQLI_ASSOC)) {

			echo "<tr>";
			foreach ($row as $dato) {
				echo "<td>".round($dato,2,PHP_ROUND_HALF_DOWN)."</td>";
			}

			echo "</tr>";
			$daty=json_encode($row);
			$file='tactico.json';
			file_put_contents($file, $daty);
			
		}


	 }else{
		echo "ERROR EN CONSULTA: ". mysqli_error($con);
	 }
	 echo "</tbody></table>";
	  mysqli_close($con);
	  echo "<script type='text/javascript'>        
           $(document).ready(function(){
           $('#grafica2').load('tacticogra.php');
           });
    </script>";

 }
function tacestra(){
	require 'conexion.php';
		$tabla=$_POST['id'];
		$consulta=mysqli_query($con,"SELECT AVG(GES_NEGYEXEL),AVG(CON_REL_INTER),AVG(GES_RECU),AVG(ADAP_CAMBIO),AVG(ORIEN_RESULT),AVG(SGC),AVG(SEG_IND_SAL_OCUP),AVG(TOTAL) FROM $tabla WHERE TOTAL>0");
		echo "<table class='table table-striped table-hover table-bordered' style='font-family: unset;font-size: 18px;letter-spacing: 0px;'>
            <thead>
            <tr>
                <th style='text-align:center;'>Gestion Neg. y Excelencia Operacional</th>
                <th style='text-align:center;'>Construcción Relaciones Interpersonlaes</th>
                <th style='text-align:center;'>Gestión de Recursos</th>
                <th style='text-align:center;'>Adaptabilidad al Cambio</th>
                <th style='text-align:center;'>Orientación de Resultados</th>
                <th style='text-align:center;'>SGC</th>
                <th style='text-align:center;'>Seguridad Industrial Y salud Ocupacional</th>
                <th style='text-align:center;'>Total</th>
            </tr></thead><tbody>";


	 if (mysqli_num_rows($consulta)>0) {
		while ($row=mysqli_fetch_array($consulta,MYSQLI_ASSOC)) {
			
			echo "<tr>";
			foreach ($row as $dato) {
				echo "<td>".round($dato,2,PHP_ROUND_HALF_DOWN)."</td>";
			}
			echo "</tr>";
			$daty=json_encode($row);
			$file='tacestra.json';
			file_put_contents($file, $daty);
			
		}

	 }else{
		echo "ERROR EN CONSULTA: ". mysqli_error($con);
	 }
	 echo "</tbody></table>";
	  mysqli_close($con);
	  echo "<script type='text/javascript'>        
           $(document).ready(function(){
           $('#grafica2').load('tactiestragra.php');
           });
    </script>";
	}