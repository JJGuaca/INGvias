<?php 
require 'conexion.php';
$valor=$_POST['dato'];
$i=0;
if ($valor==1) {
	echo "consultando Tactico...";
	$consulta="SELECT evaluados.Identificacion,CONCAT(evaluados.Nombres,' ',evaluados.Apellidos)Nombres,evaluados.email,evaluados.Area,evaluados.Cargo,categoria.nombre,u_consultor.Identificacion,CONCAT(u_consultor.Nombres_u,' ',u_consultor.Apellidos_u)Evaluador,resultado_tactico.FechaEvaluacion,resultado_tactico.CONS_REL_INTER,resultado_tactico.EXEL_OPERACION,resultado_tactico.GEST_RECURSOS,resultado_tactico.ADAPT_CAMBIO,resultado_tactico.ORIEN_RESULTA,resultado_tactico.SGC,resultado_tactico.SEG_IND_SAL_OCUP,resultado_tactico.TOTAL,resultado_tactico_respuestas.pre1,resultado_tactico_respuestas.pre2,resultado_tactico_respuestas.pre3,resultado_tactico_respuestas.pre4,resultado_tactico_respuestas.pre5,resultado_tactico_respuestas.pre6,resultado_tactico_respuestas.pre7,resultado_tactico_respuestas.pre8,resultado_tactico_respuestas.pre9,resultado_tactico_respuestas.pre10,resultado_tactico_respuestas.pre11,resultado_tactico_respuestas.pre12,resultado_tactico_respuestas.pre13,resultado_tactico_respuestas.pre14,resultado_tactico_respuestas.pre15,resultado_tactico_respuestas.pre16,resultado_tactico_respuestas.pre17,resultado_tactico_respuestas.pre18,resultado_tactico_respuestas.pre19,resultado_tactico_respuestas.pre20,resultado_tactico_respuestas.pre21,resultado_tactico_respuestas.pre22,resultado_tactico_respuestas.pre23,resultado_tactico_respuestas.pre24,resultado_tactico_respuestas.pre25,resultado_tactico_respuestas.pre26,resultado_tactico_respuestas.pre27,resultado_tactico_respuestas.pre28,resultado_tactico_respuestas.pre29,resultado_tactico_respuestas.pre30,resultado_tactico_respuestas.pre31,resultado_tactico_respuestas.debilidades,resultado_tactico_respuestas.fortalezas,resultado_tactico_respuestas.capacitacion FROM `evaluados` INNER JOIN u_consultor ON u_consultor.Identificacion=evaluados.idConsultor INNER JOIN categoria ON categoria.id=evaluados.idCategoria INNER JOIN resultado_tactico ON resultado_tactico.idIdentificacion=evaluados.Identificacion INNER JOIN resultado_tactico_respuestas ON resultado_tactico_respuestas.idEvaluado=evaluados.Identificacion WHERE 1";

	echo "
	<tr>
		<th style='text-align:center;'>Identificacion Evaluado</th>
		<th style='text-align:center;'>Nombres</th>
		<th style='text-align:center;'>Email</th>
		<th style='text-align:center;'>Proyecto</th>
		<th style='text-align:center;'>Cargo</th>
		<th style='text-align:center;'>Categoria</th>
		<th style='text-align:center;'>Identificacion Evaluador</th>
		<th style='text-align:center;'>Nombres Evaluador</th>
		<th style='text-align:center;'>Fecha de Evaluación</th>
		<th style='text-align:center;'>Modulo 1</th>
		<th style='text-align:center;'>Modulo 2</th>
		<th style='text-align:center;'>Modulo 3</th>
		<th style='text-align:center;'>Modulo 4</th>
		<th style='text-align:center;'>Modulo 5</th>
		<th style='text-align:center;'>Modulo 6</th>
		<th style='text-align:center;'>Modulo 7</th>
		<th style='text-align:center;'>TOTAL</th>
		<th style='text-align:center;'>Pregunta 1</th>
		<th style='text-align:center;'>Pregunta 2</th>
		<th style='text-align:center;'>Pregunta 3</th>
		<th style='text-align:center;'>Pregunta 4</th>
		<th style='text-align:center;'>Pregunta 5</th>
		<th style='text-align:center;'>Pregunta 6</th>
		<th style='text-align:center;'>Pregunta 7</th>
		<th style='text-align:center;'>Pregunta 8</th>
		<th style='text-align:center;'>Pregunta 9</th>
		<th style='text-align:center;'>Pregunta 10</th>
		<th style='text-align:center;'>Pregunta 11</th>
		<th style='text-align:center;'>Pregunta 12</th>
		<th style='text-align:center;'>Pregunta 13</th>
		<th style='text-align:center;'>Pregunta 14</th>
		<th style='text-align:center;'>Pregunta 15</th>
		<th style='text-align:center;'>Pregunta 16</th>
		<th style='text-align:center;'>Pregunta 17</th>
		<th style='text-align:center;'>Pregunta 18</th>
		<th style='text-align:center;'>Pregunta 19</th>
		<th style='text-align:center;'>Pregunta 20</th>
		<th style='text-align:center;'>Pregunta 21</th>
		<th style='text-align:center;'>Pregunta 22</th>
		<th style='text-align:center;'>Pregunta 23</th>
		<th style='text-align:center;'>Pregunta 24</th>
		<th style='text-align:center;'>Pregunta 25</th>
		<th style='text-align:center;'>Pregunta 26</th>
		<th style='text-align:center;'>Pregunta 27</th>
		<th style='text-align:center;'>Pregunta 28</th>
		<th style='text-align:center;'>Pregunta 29</th>
		<th style='text-align:center;'>Pregunta 30</th>
		<th style='text-align:center;'>Pregunta 31</th>
		<th style='text-align:center;'>Debilidades</th>
		<th style='text-align:center;'>Fortalezas</th>
		<th style='text-align:center;'>Necesidades de Capacitación</th>
	</tr>";

	if(mysqli_multi_query($con,$consulta)){
		do{
			if ($result=mysqli_store_result($con)) {

				while ($row=mysqli_fetch_row($result)) {
					echo "<tr>";
					foreach ($row as $dato) {
						echo "<td>$dato</td>";
					}
					echo "</tr>";

				}
				mysqli_free_result($result);
			}
		} while (mysqli_more_results($con) && mysqli_next_result($con));

	}

}elseif ($valor==2) {
	echo "consultando Tactico Estrategico...";
	$consulta="SELECT evaluados.Identificacion,CONCAT(evaluados.Nombres,' ',evaluados.Apellidos)Nombres,evaluados.email,evaluados.Area,evaluados.Cargo,categoria.nombre,u_consultor.Identificacion,CONCAT(u_consultor.Nombres_u,' ',u_consultor.Apellidos_u)Evaluador,resultado_tacticoestrategico.FechaEvaluacion,resultado_tacticoestrategico.GES_NEGYEXEL,resultado_tacticoestrategico.CON_REL_INTER,resultado_tacticoestrategico.GES_RECU,resultado_tacticoestrategico.ADAP_CAMBIO,resultado_tacticoestrategico.ORIEN_RESULT,resultado_tacticoestrategico.SGC,resultado_tacticoestrategico.SEG_IND_SAL_OCUP,resultado_tacticoestrategico.TOTAL,resultado_tacticoestrategico_respuestas.pre1,resultado_tacticoestrategico_respuestas.pre2,resultado_tacticoestrategico_respuestas.pre3,resultado_tacticoestrategico_respuestas.pre4,resultado_tacticoestrategico_respuestas.pre5,resultado_tacticoestrategico_respuestas.pre6,resultado_tacticoestrategico_respuestas.pre7,resultado_tacticoestrategico_respuestas.pre8,resultado_tacticoestrategico_respuestas.pre9,resultado_tacticoestrategico_respuestas.pre10,resultado_tacticoestrategico_respuestas.pre11,resultado_tacticoestrategico_respuestas.pre12,resultado_tacticoestrategico_respuestas.pre13,resultado_tacticoestrategico_respuestas.pre14,resultado_tacticoestrategico_respuestas.pre15,resultado_tacticoestrategico_respuestas.pre16,resultado_tacticoestrategico_respuestas.pre17,resultado_tacticoestrategico_respuestas.pre18,resultado_tacticoestrategico_respuestas.pre19,resultado_tacticoestrategico_respuestas.pre20,resultado_tacticoestrategico_respuestas.pre21,resultado_tacticoestrategico_respuestas.pre22,resultado_tacticoestrategico_respuestas.pre23,resultado_tacticoestrategico_respuestas.pre24,resultado_tacticoestrategico_respuestas.pre25,resultado_tacticoestrategico_respuestas.pre26,resultado_tacticoestrategico_respuestas.pre27,resultado_tacticoestrategico_respuestas.pre28,resultado_tacticoestrategico_respuestas.pre29,resultado_tacticoestrategico_respuestas.pre30,resultado_tacticoestrategico_respuestas.pre31,resultado_tacticoestrategico_respuestas.pre32,resultado_tacticoestrategico_respuestas.debilidades,resultado_tacticoestrategico_respuestas.fortalezas,resultado_tacticoestrategico_respuestas.capacitacion FROM `evaluados` INNER JOIN u_consultor ON u_consultor.Identificacion=evaluados.idConsultor INNER JOIN categoria ON categoria.id=evaluados.idCategoria INNER JOIN resultado_tacticoestrategico ON resultado_tacticoestrategico.idIdentificacion=evaluados.Identificacion INNER JOIN resultado_tacticoestrategico_respuestas ON resultado_tacticoestrategico_respuestas.identificacionEvaluado=evaluados.Identificacion WHERE 1;";
echo "<tr>
		<th style='text-align:center;'>Identificacion</th>
		<th style='text-align:center;'>Evaluado</th>
		<th style='text-align:center;'>Email</th>
		<th style='text-align:center;'>Proyecto</th>
		<th style='text-align:center;'>Cargo</th>
		<th style='text-align:center;'>Categoria</th>
		<th style='text-align:center;'>Identificacion Evaluado</th>
		<th style='text-align:center;'>Evaluador</th>
		<th style='text-align:center;'>Fecha de Evaluación</th>
		<th style='text-align:center;'>Modulo 1</th>
		<th style='text-align:center;'>Modulo 2</th>
		<th style='text-align:center;'>Modulo 3</th>
		<th style='text-align:center;'>Modulo 4</th>
		<th style='text-align:center;'>Modulo 5</th>
		<th style='text-align:center;'>Modulo 6</th>
		<th style='text-align:center;'>Modulo 7</th>
		<th style='text-align:center;'>Total</th>
		<th style='text-align:center;'>Pregunta 1</th>
		<th style='text-align:center;'>Pregunta 2</th>
		<th style='text-align:center;'>Pregunta 3</th>
		<th style='text-align:center;'>Pregunta 4</th>
		<th style='text-align:center;'>Pregunta 5</th>
		<th style='text-align:center;'>Pregunta 6</th>
		<th style='text-align:center;'>Pregunta 7</th>
		<th style='text-align:center;'>Pregunta 8</th>
		<th style='text-align:center;'>Pregunta 9</th>
		<th style='text-align:center;'>Pregunta 10</th>
		<th style='text-align:center;'>Pregunta 11</th>
		<th style='text-align:center;'>Pregunta 12</th>
		<th style='text-align:center;'>Pregunta 13</th>
		<th style='text-align:center;'>Pregunta 14</th>
		<th style='text-align:center;'>Pregunta 15</th>
		<th style='text-align:center;'>Pregunta 16</th>
		<th style='text-align:center;'>Pregunta 17</th>
		<th style='text-align:center;'>Pregunta 18</th>
		<th style='text-align:center;'>Pregunta 19</th>
		<th style='text-align:center;'>Pregunta 20</th>
		<th style='text-align:center;'>Pregunta 21</th>
		<th style='text-align:center;'>Pregunta 22</th>
		<th style='text-align:center;'>Pregunta 23</th>
		<th style='text-align:center;'>Pregunta 24</th>
		<th style='text-align:center;'>Pregunta 25</th>
		<th style='text-align:center;'>Pregunta 26</th>
		<th style='text-align:center;'>Pregunta 27</th>
		<th style='text-align:center;'>Pregunta 28</th>
		<th style='text-align:center;'>Pregunta 29</th>
		<th style='text-align:center;'>Pregunta 30</th>
		<th style='text-align:center;'>Pregunta 31</th>
		<th style='text-align:center;'>Pregunta 32</th>
		<th style='text-align:center;'>Debilidades</th>
		<th style='text-align:center;'>Fortalezas</th>
		<th style='text-align:center;'>Necedidades de Capacitación</th>
	</tr>";

	if(mysqli_multi_query($con,$consulta)){
		do{
			if ($result=mysqli_store_result($con)) {

				while ($row=mysqli_fetch_row($result)) {
					echo "<tr>";
					foreach ($row as $dato) {
						echo "<td>$dato</td>";
					}
					echo "</tr>";

				}
				mysqli_free_result($result);
			}
		} while (mysqli_more_results($con) && mysqli_next_result($con));

	}

}elseif ($valor==3) {
	echo "consultando Estrategico...";
	$consulta="SELECT evaluados.Identificacion,CONCAT(evaluados.Nombres,' ',evaluados.Apellidos)Nombres,evaluados.email,evaluados.Area,evaluados.Cargo,categoria.nombre,u_consultor.Identificacion,CONCAT(u_consultor.Nombres_u,' ',u_consultor.Apellidos_u)Evaluador, resultado_estrategico.FechaEvaluacion,resultado_estrategico.Gestion_Desarrollo,resultado_estrategico.Ges_Financiera,resultado_estrategico.Orientacion_Res,resultado_estrategico.AdaptabilidadC,resultado_estrategico.SGC,resultado_estrategico.SIndust_SaOcupa,resultado_estrategico.TOTAL,resultado_estrategica_respuestas.pre1,resultado_estrategica_respuestas.pre2,resultado_estrategica_respuestas.pre3,resultado_estrategica_respuestas.pre4,resultado_estrategica_respuestas.pre5,resultado_estrategica_respuestas.pre6,resultado_estrategica_respuestas.pre7,resultado_estrategica_respuestas.pre8,resultado_estrategica_respuestas.pre9,resultado_estrategica_respuestas.pre10,resultado_estrategica_respuestas.pre11,resultado_estrategica_respuestas.pre12,resultado_estrategica_respuestas.pre13,resultado_estrategica_respuestas.pre14,resultado_estrategica_respuestas.pre15,resultado_estrategica_respuestas.pre16,resultado_estrategica_respuestas.pre17,resultado_estrategica_respuestas.pre18,resultado_estrategica_respuestas.pre19,resultado_estrategica_respuestas.pre20,resultado_estrategica_respuestas.pre21,resultado_estrategica_respuestas.pre22,resultado_estrategica_respuestas.pre23,resultado_estrategica_respuestas.pre24,resultado_estrategica_respuestas.pre25,resultado_estrategica_respuestas.pre26,resultado_estrategica_respuestas.pre27,resultado_estrategica_respuestas.debilidades,resultado_estrategica_respuestas.fortalezas,resultado_estrategica_respuestas.capacitacion FROM `evaluados` INNER JOIN u_consultor ON u_consultor.Identificacion=evaluados.idConsultor INNER JOIN categoria ON categoria.id=evaluados.idCategoria INNER JOIN resultado_estrategico ON resultado_estrategico.idIdentificacion=evaluados.Identificacion INNER JOIN resultado_estrategica_respuestas ON resultado_estrategica_respuestas.idevaluado=evaluados.Identificacion WHERE 1;";
	echo "<tr>
		<th style='text-align:center;'>Identificacion</th>
		<th style='text-align:center;'>Nombres</th>
		<th style='text-align:center;'>Email</th>
		<th style='text-align:center;'>Proyecto</th>
		<th style='text-align:center;'>Cargo</th>
		<th style='text-align:center;'>Categoria</th>
		<th style='text-align:center;'>Identificacion Evaluador</th>
		<th style='text-align:center;'>Evaluador</th>
		<th style='text-align:center;'>Fecha de Evaluación</th>
		<th style='text-align:center;'>Modulo 1</th>
		<th style='text-align:center;'>Modulo 2</th>
		<th style='text-align:center;'>Modulo 3</th>
		<th style='text-align:center;'>Modulo 4</th>
		<th style='text-align:center;'>Modulo 5</th>
		<th style='text-align:center;'>Modulo 6</th>
		<th style='text-align:center;'>TOTAL</th>
		<th style='text-align:center;'>Pregunta 1</th>
		<th style='text-align:center;'>Pregunta 2</th>
		<th style='text-align:center;'>Pregunta 3</th>
		<th style='text-align:center;'>Pregunta 4</th>
		<th style='text-align:center;'>Pregunta 5</th>
		<th style='text-align:center;'>Pregunta 6</th>
		<th style='text-align:center;'>Pregunta 7</th>
		<th style='text-align:center;'>Pregunta 8</th>
		<th style='text-align:center;'>Pregunta 9</th>
		<th style='text-align:center;'>Pregunta 10</th>
		<th style='text-align:center;'>Pregunta 11</th>
		<th style='text-align:center;'>Pregunta 12</th>
		<th style='text-align:center;'>Pregunta 13</th>
		<th style='text-align:center;'>Pregunta 14</th>
		<th style='text-align:center;'>Pregunta 15</th>
		<th style='text-align:center;'>Pregunta 16</th>
		<th style='text-align:center;'>Pregunta 17</th>
		<th style='text-align:center;'>Pregunta 18</th>
		<th style='text-align:center;'>Pregunta 19</th>
		<th style='text-align:center;'>Pregunta 20</th>
		<th style='text-align:center;'>Pregunta 21</th>
		<th style='text-align:center;'>Pregunta 22</th>
		<th style='text-align:center;'>Pregunta 23</th>
		<th style='text-align:center;'>Pregunta 24</th>
		<th style='text-align:center;'>Pregunta 25</th>
		<th style='text-align:center;'>Pregunta 26</th>
		<th style='text-align:center;'>Pregunta 27</th>
		<th style='text-align:center;'>Debilidades</th>
		<th style='text-align:center;'>Fortalezas</th>
		<th style='text-align:center;'>Necedidades de Capacitación</th>
		</tr>";

	if(mysqli_multi_query($con,$consulta)){
		do{
			if ($result=mysqli_store_result($con)) {

				while ($row=mysqli_fetch_row($result)) {
					echo "<tr>";
					foreach ($row as $dato) {
						echo "<td>$dato</td>";
					}
					echo "</tr>";

				}
				mysqli_free_result($result);
			}
		} while (mysqli_more_results($con) && mysqli_next_result($con));

	}

}else{
	echo "consultando Operativo...";
	$consulta="SELECT evaluados.Identificacion,CONCAT(evaluados.Nombres,' ',evaluados.Apellidos)Nombres,evaluados.email,evaluados.Area,evaluados.Cargo,categoria.nombre,u_consultor.Identificacion,CONCAT(u_consultor.Nombres_u,' ',u_consultor.Apellidos_u)Evaluador,resultado_operativo.FechaEvaluacion,resultado_operativo.Ex_Operaciona,resultado_operativo.Ges_Recursos,resultado_operativo.Adap_Cambio,resultado_operativo.Or_Resultados,resultado_operativo.SGC,resultado_operativo.SIndust_SaOcupa,resultado_operativo.TOTAL,resultado_operativo_respuestas.pre1,resultado_operativo_respuestas.pre2,resultado_operativo_respuestas.pre3,resultado_operativo_respuestas.pre4,resultado_operativo_respuestas.pre5,resultado_operativo_respuestas.pre6,resultado_operativo_respuestas.pre7,resultado_operativo_respuestas.pre8,resultado_operativo_respuestas.pre9,resultado_operativo_respuestas.pre10,resultado_operativo_respuestas.pre11,resultado_operativo_respuestas.pre12,resultado_operativo_respuestas.pre13,resultado_operativo_respuestas.pre14,resultado_operativo_respuestas.pre15,resultado_operativo_respuestas.pre16,resultado_operativo_respuestas.pre17,resultado_operativo_respuestas.pre18,resultado_operativo_respuestas.pre19,resultado_operativo_respuestas.pre20,resultado_operativo_respuestas.pre21,resultado_operativo_respuestas.pre22,resultado_operativo_respuestas.pre23,resultado_operativo_respuestas.pre24,resultado_operativo_respuestas.pre25,resultado_operativo_respuestas.debilidades,resultado_operativo_respuestas.fortalezas,resultado_operativo_respuestas.capacitacion FROM `evaluados` INNER JOIN u_consultor ON u_consultor.Identificacion=evaluados.idConsultor 
	INNER JOIN categoria ON categoria.id=evaluados.idCategoria 
	INNER JOIN resultado_operativo ON resultado_operativo.idIdentificacion=evaluados.Identificacion 
	INNER JOIN resultado_operativo_respuestas ON resultado_operativo_respuestas.idEvaluado=evaluados.Identificacion WHERE 1;";
	echo "<tr>
		<th style='text-align:center;'>Identificacion</th>
		<th style='text-align:center;'>Nombres</th>
		<th style='text-align:center;'>Email</th>
		<th style='text-align:center;'>Proyecto</th>
		<th style='text-align:center;'>Cargo</th>
		<th style='text-align:center;'>Categoria</th>
		<th style='text-align:center;'>Identificacion Evaluador</th>
		<th style='text-align:center;'>Evaluador</th>
		<th style='text-align:center;'>Fecha de Evaluación</th>
		<th style='text-align:center;'>Modulo 1</th>
		<th style='text-align:center;'>Modulo 2</th>
		<th style='text-align:center;'>Modulo 3</th>
		<th style='text-align:center;'>Modulo 4</th>
		<th style='text-align:center;'>Modulo 5</th>
		<th style='text-align:center;'>Modulo 6</th>
		<th style='text-align:center;'>TOTAL Modulos</th>
		<th style='text-align:center;'>Pregunta 1</th>
		<th style='text-align:center;'>Pregunta 2</th>
		<th style='text-align:center;'>Pregunta 3</th>
		<th style='text-align:center;'>Pregunta 4</th>
		<th style='text-align:center;'>Pregunta 5</th>
		<th style='text-align:center;'>Pregunta 6</th>
		<th style='text-align:center;'>Pregunta 7</th>
		<th style='text-align:center;'>Pregunta 8</th>
		<th style='text-align:center;'>Pregunta 9</th>
		<th style='text-align:center;'>Pregunta 10</th>
		<th style='text-align:center;'>Pregunta 11</th>
		<th style='text-align:center;'>Pregunta 12</th>
		<th style='text-align:center;'>Pregunta 13</th>
		<th style='text-align:center;'>Pregunta 14</th>
		<th style='text-align:center;'>Pregunta 15</th>
		<th style='text-align:center;'>Pregunta 16</th>
		<th style='text-align:center;'>Pregunta 17</th>
		<th style='text-align:center;'>Pregunta 18</th>
		<th style='text-align:center;'>Pregunta 19</th>
		<th style='text-align:center;'>Pregunta 20</th>
		<th style='text-align:center;'>Pregunta 21</th>
		<th style='text-align:center;'>Pregunta 22</th>
		<th style='text-align:center;'>Pregunta 23</th>
		<th style='text-align:center;'>Pregunta 24</th>
		<th style='text-align:center;'>Pregunta 25</th>
		<th style='text-align:center;'>Debilidades</th>
		<th style='text-align:center;'>Fortalezas</th>
		<th style='text-align:center;'>Necedidades de Capacitación</th>
	</tr>";

	if(mysqli_multi_query($con,$consulta)){
		do{
			if ($result=mysqli_store_result($con)) {

				while ($row=mysqli_fetch_row($result)) {
					echo "<tr>";
					foreach ($row as $dato) {
						echo "<td>$dato</td>";
					}
					echo "</tr>";

				}
				mysqli_free_result($result);
			}
		} while (mysqli_more_results($con) && mysqli_next_result($con));

	}
}

?>

<script type='text/javascript'>
	$('#datos').tableExport();
 </script>


