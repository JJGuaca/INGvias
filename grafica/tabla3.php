  <script src="../js/bootstrap.min.js"></script>

  <?php
  require 'conexion.php';
  $i=0;
  $data = file_get_contents("numeros.json");
  $val = json_decode($data, true);
  $consulta1=mysqli_query($con,'SELECT COUNT(*)Cuantos FROM `resultado_estrategica_respuestas`');
  if(mysqli_num_rows($consulta1)>0){
    while ($row=mysqli_fetch_array($consulta1,MYSQLI_ASSOC)){
        $conteo=$row['Cuantos'];
    }
  }
  $consulta2=mysqli_query($con,'SELECT COUNT(*)Cuantos FROM `resultado_tacticoestrategico_respuestas`');
  if(mysqli_num_rows($consulta2)>0){
    while ($row=mysqli_fetch_array($consulta2,MYSQLI_ASSOC)) {
      $conteo2=$row['Cuantos'];
    }
  }
  $consulta3=mysqli_query($con,'SELECT COUNT(*)Cuantos FROM `resultado_tactico_respuestas`');
  if(mysqli_num_rows($consulta3)>0){
    while ($row=mysqli_fetch_array($consulta3,MYSQLI_ASSOC)) {
      $conteo3=$row['Cuantos'];
    }
  }
  $consulta4=mysqli_query($con,'SELECT COUNT(*)Cuantos FROM `resultado_operativo_respuestas`');
  if(mysqli_num_rows($consulta4)>0){
    while ($row=mysqli_fetch_array($consulta4,MYSQLI_ASSOC)) {
      $conteo4=$row['Cuantos'];
    }
  }

  ?>
  <table id="tabla3" class="table-responsive table table-striped table-bordered">
   		<tr>
  			<th style="text-align: center;" width="20%">COMPETENCIA</th>
  			<th style="text-align: center;" width="20%">EVALUACION</th>
  			<th style="text-align: center;" width="20%">TOTAL DE EMPLEADOS A EVALUAR</th>
        <th style="text-align: center;" width="20%">TOTAL DE EMPLEADOS EVALUADOS</th>
  		</tr>				
  		<tr>
  			<td>Estrategico</td>
  			<td><?php echo round($val[0],2,PHP_ROUND_HALF_DOWN); ?></td>
  			<td><?php echo $val[4]; ?></td>
        <td><?php echo $conteo; ?></td>
  		</tr>
  		<tr>
  			<td>Tactico Estrategico</td>
  			<td><?php echo round($val[1],2,PHP_ROUND_HALF_DOWN); ?></td>
  			<td><?php echo $val[5]; ?></td>
        <td><?php echo $conteo2; ?></td>
  		</tr> 
  		<tr>
  			<td>Tactico</td>
  			<td><?php echo round($val[2],2,PHP_ROUND_HALF_DOWN); ?></td>
  			<td><?php echo $val[6]; ?></td>
        <td><?php echo $conteo3; ?></td>
  		</tr> 
  		<tr>
  			<td>Operativo</td>
  			<td><?php echo round($val[3],2,PHP_ROUND_HALF_DOWN); ?></td>
  			<td><?php echo $val[7]; ?></td>
        <td><?php echo $conteo4; ?></td>
  		</tr>
  		<tr>
  			<th>TOTAL PROMEDIO GENERAL</th>
  			<td><?php echo round((($val[3]+$val[2]+$val[1]+$val[0])/4),2,PHP_ROUND_HALF_DOWN); ?></td>
  			<td><?php echo ($val[4]+$val[5]+$val[6]+$val[7]); ?></td>
        <td><?php echo ($conteo+$conteo2+$conteo3+$conteo4); ?></td>
  		</tr>                                                                      
  </table>

  <script type="text/javascript" src="tableExport/js/jquery-1.11.3.min.js"></script>
  <script type="text/javascript" src="tableExport/js/Bootstrap/bootstrap.js"></script>
  <script type="text/javascript" src="tableExport/js/bootstrap-autohidingnavbar/jquery.bootstrap-autohidingnavbar.js"></script>
  <script type="text/javascript" src="tableExport/js/ZeroClipboard/ZeroClipboard.js"></script>
  <script type="text/javascript" src="tableExport/js/js-xlsx/xlsx.core.min.js"></script>
  <script type="text/javascript" src="tableExport/js/Blob.js/Blob.js"></script>
  <script type="text/javascript" src="tableExport/js/FileSaver.js/FileSaver.js"></script>
  <script type="text/javascript" src="tableExport/js/Export2Excel.js"></script>
  <!--<script type="text/javascript" src="tableExport/js/TableExport.js/jquery.tableexport.js"></script>-->
  <script type="text/javascript" src="tableExport/js/TableExport.js/jquery.tableexport.v2.js"></script>
  <script type="text/javascript" src="tableExport/js/main.js"></script>