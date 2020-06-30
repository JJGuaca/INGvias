<?php 
require("../../php/conexion.php");
$consulta=mysqli_query($con, "SELECT CONCAT(u_consultor.Nombres_u,' ', u_consultor.Apellidos_u) Nombres, u_consultor.Identificacion FROM u_consultor");
$filas=array();
$i=0;

	echo "<table class='table table-hover'>";
 while ($filas=mysqli_fetch_array($consulta, MYSQLI_ASSOC)) {
 	 	$i=$i+1;
	echo "<tr>
			<td WIDTH=20%>".$filas['Nombres']."</td>
			<td WIDTH=20% align=center>".$filas['Identificacion']."</td>
			<td id='evaluar$i' WIDTH=20% align=center>
			<script language='javascript'> 
				$.ajax({
					type: 'POST',
					url: 'php1/evaluadorescontar.php',
					data: {'docu': $filas[Identificacion]},
					success: function(respuesta){
					$('#evaluar'+$i).html(respuesta);
					limpiar();
					cargar();
					}
				});	
			</script>
			</td>
			<td id='evaluados$i' WIDTH=20% align=center>
				<script language='javascript'> 
				$.ajax({
					type: 'POST',
					url: 'php1/evaluados_contar.php',
					data: {'docu': $filas[Identificacion]},
					success: function(respuesta){
					$('#evaluados'+$i).html(respuesta);
					limpiar();
					cargar();
					}
				});			
	
			</script>
			</td>
			<td WIDTH=20% >
			<script language='javascript'> 
			porcento=0;
			var1=0;
			var2=0;
			avance=0;
				$.ajax({
					type: 'POST',
					url: 'php1/evaluadorescontar.php',
					data: {'docu': $filas[Identificacion]},
					success: function(respuesta){
						
					$.ajax({
						type: 'POST',
						url: 'php1/evaluados_contar.php',
						data: {'docu':$filas[Identificacion]},
						success: function(respuesta2){
							var1=parseFloat(100/respuesta);							
							var2=parseFloat(respuesta2);						
							avance=parseFloat(var1*var2);
							$('#resultado'+$i).html(avance.toFixed(1)+'%');
							$('#resultado'+$i).css('width',avance+'%');
							limpiar();
							cargar();
						}

					});			
					}
				});	
			</script>
			<a href='avance1.html?doc=$filas[Identificacion]' style='text-decoration: none;'>
			<div class='progress'>
               <div class='barra-progreso' role='progressbar' aria-valuenow='60' aria-valuemin='0' aria-valuemax='100' style='width: 0%;' id='resultado$i'>0%</div>
              </div></a>
			</td>
		</tr>";
	
}
?>
