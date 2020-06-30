<?php
session_start();
$idEvaluado= $_GET['var1'];
?>
<!DOCTYPE html>
<html>
	  <head>
	    <meta charset="utf-8">
	    <meta http-equiv="X-UA-Compatible" content="IE=edge">
	    <meta name="viewport" content="width=device-width, initial-scale=1">
	    <!-- The above 3 meta tags *must* come first in the head; any other head content must come *after* these tags -->

	    <title>Evaluacion | TACTICO ESTRATEGICO</title>
      <link rel="shortcut icon" href="../../img/logo.ico" />

	    <!-- Bootstrap core CSS -->
	    <link href="../../css/bootstrap.min.css" rel="stylesheet">
	    <link rel="stylesheet" type="text/css" href="../../css/inicio.css">
	    <script src="https://code.jquery.com/jquery-3.2.1.js"></script>
		   <script type="text/javascript">
		      $(document).ready(function() {       
		          setTimeout(function() {session();},10);});
		  </script>
	  </head>
<body>
	<!--Menu de navegación-->
    <nav class="navbar navbar-default">
      <div class="container">
        <div class="navbar-header">
          <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#navbar" aria-expanded="false" aria-controls="navbar">
            <span class="sr-only">Toggle navigation</span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
          </button>
          <a class="navbar-brand" style="font-size: 210%;">Evaluacion</a>
        </div>
        <div id="navbar" class="collapse navbar-collapse">
        </div><!--/.nav-collapse -->
      </div>
    </nav>
     <!--header -->
    <header id="header">
      <header class="container">
        <div class="row">
          <div class="col-md-10">
            <h1 style="font-size: 200%;margin-top: 10px;">Evaluacion Tactico Estrategica | <span class="glyphicon glyphicon-list-alt" area-hiden="true"></span><small><div style="width: 2%;"></div><span class ="nn">
            </span></small></h1>
          </div>
        </div>
      </header>
    </header>

    <!--Seccion principal, laterales y frontales-->
    <section id="principal">
      <div class="container">
        <div class="row">
          <!--laterales*3 de ancho-->
          <div class="col-md-12">
            <div class="well" style="overflow-y: scroll; height: 500px;">
             <form id="formevalestra" class="well" action="resEvalTacEstra.php" method="post">
              <input type="text" name="id" value='<?php echo $idEvaluado;?>' style="visibility:hidden" >
            	
            <!--Modulo 1-->
                <h4>Modulo 1 <small>GESTIÓN DE NEGOCIO Y EXCELENCIA OPERACIONAL</small></h4>
                <div class="well">
                  		<span><h3>1.</h3><p>Planifica, organiza, prioriza e informa oportunamente a la Gerencia General y/o a sus pares, sobre los proyectos y actividades que impactan directamente los resultados del negocio.</p></span>
                  		<div class="form-group">
                        <div class="form-check form-check-inline " >                     
                          <label class="form-check-label" for="1"><input class="form-check-input" type="radio" name="Pre1-mod1" id="1" value="4.5" required>Siempre</label>                       
                          <label class="form-check-label" for="2"><input class="form-check-input" type="radio" name="Pre1-mod1" id="2" value="3.5">Frecuentemente</label>                      
                          <label class="form-check-label" for="3"><input class="form-check-input" type="radio" name="Pre1-mod1" id="3" value="2">Ocasionalmente</label>                      
                          <label class="form-check-label" for="4"><input class="form-check-input" type="radio" name="Pre1-mod1" id="4" value="1">Nunca</label>
                        </div>
                      </div>
                      <span><h3>2.</h3><p>Propone y desarrolla proyectos e ideas que contribuyen a la optimización de los recursos o al crecimiento de la empresa.</p></span>
                  	  <div class="form-group">
                        <div class="form-check form-check-inline " >                     
                          <label class="form-check-label" for="5"><input class="form-check-input" type="radio" name="Pre2-mod1" id="5" value="4.5" required>Siempre</label>                       
                          <label class="form-check-label" for="6"><input class="form-check-input" type="radio" name="Pre2-mod1" id="6" value="3.5">Frecuentemente</label>                      
                          <label class="form-check-label" for="7"><input class="form-check-input" type="radio" name="Pre2-mod1" id="7" value="2">Ocasionalmente</label>                      
                          <label class="form-check-label" for="8"><input class="form-check-input" type="radio" name="Pre2-mod1" id="8" value="1">Nunca</label>
                        </div>
                      </div>
                      <span><h3>3.</h3><p>Cuando se requiere, define, revisa y modifica junto a su equipo de trabajo, los procedimientos que se deben llevar a cabo para el cumplimiento de los objetivos del área</p></span>
                      <div class="form-group">
                      <div class="form-check form-check-inline " >                     
                        <label class="form-check-label" for="9"><input class="form-check-input" type="radio" name="Pre3-mod1" id="9" value="4.5" required>Siempre</label>                       
                        <label class="form-check-label" for="10"><input class="form-check-input" type="radio" name="Pre3-mod1" id="10" value="3.5">Frecuentemente</label>                      
                        <label class="form-check-label" for="11"><input class="form-check-input" type="radio" name="Pre3-mod1" id="11" value="2">Ocasionalmente</label>                      
                        <label class="form-check-label" for="12"><input class="form-check-input" type="radio" name="Pre3-mod1" id="12" value="1">Nunca</label>
                      </div>
                    </div>
                      <span><h3>4.</h3><p>Planifica de manera organizada las actividades del área, para lograr sus objetivos dentro de los tiempos programados y con los recursos necesarios.</p></span>
                      <div class="form-group">
                      <div class="form-check form-check-inline " >                     
                        <label class="form-check-label" for="13"><input class="form-check-input" type="radio" name="Pre4-mod1" id="13" value="4.5" required>Siempre</label>                       
                        <label class="form-check-label" for="14"><input class="form-check-input" type="radio" name="Pre4-mod1" id="14" value="3.5">Frecuentemente</label>                      
                        <label class="form-check-label" for="15"><input class="form-check-input" type="radio" name="Pre4-mod1" id="15" value="2">Ocasionalmente</label>                      
                        <label class="form-check-label" for="16"><input class="form-check-input" type="radio" name="Pre4-mod1" id="16" value="1">Nunca</label>
                      </div>
                    </div>
                      <span><h3>5.</h3><p>Realiza controles y seguimientos de las actividades propias del área, informando oportunamente a su jefe inmediato, garantizando así calidad y efectividad en todos los procesos.</p></span>
                      <div class="form-group">
                      <div class="form-check form-check-inline " >                     
                        <label class="form-check-label" for="17"><input class="form-check-input" type="radio" name="Pre5-mod1" id="17" value="4.5" required>Siempre</label>                       
                        <label class="form-check-label" for="18"><input class="form-check-input" type="radio" name="Pre5-mod1" id="18" value="3.5">Frecuentemente</label>                      
                        <label class="form-check-label" for="19"><input class="form-check-input" type="radio" name="Pre5-mod1" id="19" value="2">Ocasionalmente</label>                      
                        <label class="form-check-label" for="20"><input class="form-check-input" type="radio" name="Pre5-mod1" id="20" value="1">Nunca</label>
                      </div>
                    </div>
                </div>
            <!--Modulo 2-->
                <h4>Modulo 2 <small>CONSTRUCCIÓN DE RELACIONES INTERPERSONALES</small></h4>
                <div class="well">
                		<span><h3>1.</h3><p>Promueve con sus acciones, relaciones interpersonales adecuadas tanto con cliente interno como externo para beneficiar la consecución de metas corporativas</p></span>
                    <div class="form-group">
                      <div class="form-check form-check-inline " >                     
                        <label class="form-check-label" for="21"><input class="form-check-input" type="radio" name="Pre1-mod2" id="21" value="4.5" required>Siempre</label>                       
                        <label class="form-check-label" for="22"><input class="form-check-input" type="radio" name="Pre1-mod2" id="22" value="3.5">Frecuentemente</label>                      
                        <label class="form-check-label" for="23"><input class="form-check-input" type="radio" name="Pre1-mod2" id="23" value="2">Ocasionalmente</label>                      
                        <label class="form-check-label" for="24"><input class="form-check-input" type="radio" name="Pre1-mod2" id="24" value="1">Nunca</label>
                      </div>
                    </div>  
                		
                  	<span><h3>2.</h3><p>Trabaja en equipo con sus pares de forma comunicativa y constructiva, demostrando un comportamiento orientado a la colaboración continua y entendimiento interpersonal para cumplimiento de metas Gerenciales.</p></span>
                    <div class="form-group">
                      <div class="form-check form-check-inline " >                     
                        <label class="form-check-label" for="25"><input class="form-check-input" type="radio" name="Pre2-mod2" id="25" value="4.5" required>Siempre</label>                       
                        <label class="form-check-label" for="26"><input class="form-check-input" type="radio" name="Pre2-mod2" id="26" value="3.5">Frecuentemente</label>                      
                        <label class="form-check-label" for="27"><input class="form-check-input" type="radio" name="Pre2-mod2" id="27" value="2">Ocasionalmente</label>                      
                        <label class="form-check-label" for="28"><input class="form-check-input" type="radio" name="Pre2-mod2" id="28" value="1">Nunca</label>
                      </div>
                    </div>                  	
                  	<span><h3>3.</h3><p>Fomenta dentro su grupo un clima laboral de respeto, colaboración e integración en pro del cumplimiento de objetivos inherentes a su área.</p></span>
                    <div class="form-group">
                      <div class="form-check form-check-inline " >                     
                        <label class="form-check-label" for="29"><input class="form-check-input" type="radio" name="Pre3-mod2" id="29" value="4.5" required>Siempre</label>                       
                        <label class="form-check-label" for="30"><input class="form-check-input" type="radio" name="Pre3-mod2" id="30" value="3.5">Frecuentemente</label>                      
                        <label class="form-check-label" for="31"><input class="form-check-input" type="radio" name="Pre3-mod2" id="31" value="2">Ocasionalmente</label>                      
                        <label class="form-check-label" for="32"><input class="form-check-input" type="radio" name="Pre3-mod2" id="32" value="1">Nunca</label>
                      </div>
                    </div>                		
  		                <span><h3>4.</h3><p>Construye y desarrolla permanentemente con sus superiores relaciones interpersonales basadas en la comunicación efectiva, de tal manera que se generan espacios productivos para la sana discusión de los proyectos de su área</p></span>
                      <div class="form-group">
                      <div class="form-check form-check-inline " >                     
                        <label class="form-check-label" for="33"><input class="form-check-input" type="radio" name="Pre4-mod2" id="33" value="4.5" required>Siempre</label>                       
                        <label class="form-check-label" for="34"><input class="form-check-input" type="radio" name="Pre4-mod2" id="34" value="3.5">Frecuentemente</label>                      
                        <label class="form-check-label" for="35"><input class="form-check-input" type="radio" name="Pre4-mod2" id="35" value="2">Ocasionalmente</label>                      
                        <label class="form-check-label" for="36"><input class="form-check-input" type="radio" name="Pre4-mod2" id="36" value="1">Nunca</label>
                      </div>
                    </div>   
  		              	
                </div>
            <!--Modulo 3-->
                <h4>Modulo 3 <small>GESTIÓN DE RECURSOS</small></h4>
                <div class="well">
                		<span><h3>1.</h3><p>Planea de forma adecuada el presupuesto y recursos asignados para su área, buscando rentabilidad y eficiencia</p></span>
                    <div class="form-group">
                      <div class="form-check form-check-inline " >                     
                        <label class="form-check-label" for="37"><input class="form-check-input" type="radio" name="Pre1-mod3" id="37" value="4.5" required>Siempre</label>                       
                        <label class="form-check-label" for="38"><input class="form-check-input" type="radio" name="Pre1-mod3" id="38" value="3.5">Frecuentemente</label>                      
                        <label class="form-check-label" for="39"><input class="form-check-input" type="radio" name="Pre1-mod3" id="39" value="2">Ocasionalmente</label>                      
                        <label class="form-check-label" for="40"><input class="form-check-input" type="radio" name="Pre1-mod3" id="40" value="1">Nunca</label>
                      </div>
                    </div>                		
                 		 <span><h3>2.</h3><p>Gestiona los recursos necesarios para garantizar la operación y la ejecución de las funciones de su área con calidad y oportunidad</p></span>
                     <div class="form-group">
                      <div class="form-check form-check-inline " >                     
                        <label class="form-check-label" for="41"><input class="form-check-input" type="radio" name="Pre2-mod3" id="41" value="4.5" required>Siempre</label>                       
                        <label class="form-check-label" for="42"><input class="form-check-input" type="radio" name="Pre2-mod3" id="42" value="3.5">Frecuentemente</label>                      
                        <label class="form-check-label" for="43"><input class="form-check-input" type="radio" name="Pre2-mod3" id="43" value="2">Ocasionalmente</label>                      
                        <label class="form-check-label" for="44"><input class="form-check-input" type="radio" name="Pre2-mod3" id="44" value="1">Nunca</label>
                      </div>
                    </div>                		
                 		 <span><h3>3.</h3><p>Controla y evalúa la ejecución y uso de los recursos definidos para el cumplimiento del objetivo trazado en su área</p></span>
                     <div class="form-group">
                      <div class="form-check form-check-inline " >                     
                        <label class="form-check-label" for="45"><input class="form-check-input" type="radio" name="Pre3-mod3" id="45" value="4.5" required>Siempre</label>                       
                        <label class="form-check-label" for="46"><input class="form-check-input" type="radio" name="Pre3-mod3" id="46" value="3.5">Frecuentemente</label>                      
                        <label class="form-check-label" for="47"><input class="form-check-input" type="radio" name="Pre3-mod3" id="47" value="2">Ocasionalmente</label>                      
                        <label class="form-check-label" for="48"><input class="form-check-input" type="radio" name="Pre3-mod3" id="48" value="1">Nunca</label>
                      </div>
                    </div>
                		            	
                </div>
            <!--Modulo 4-->
                <h4>Modulo 4 <small>ADAPTABILIDAD AL CAMBIO</small></h4>
                <div class="well">
                		<span><h3>1.</h3><p>Se adapta al cambio, para alcanzar determinados objetivos cuando surgen dificultades, cambios en el medio interno o externo, del cliente o de los requerimientos del trabajo en sí.</p></span>
                    <div class="form-group">
                      <div class="form-check form-check-inline " >                     
                        <label class="form-check-label" for="49"><input class="form-check-input" type="radio" name="Pre1-mod4" id="49" value="4.5" required>Siempre</label>                       
                        <label class="form-check-label" for="50"><input class="form-check-input" type="radio" name="Pre1-mod4" id="50" value="3.5">Frecuentemente</label>                      
                        <label class="form-check-label" for="51"><input class="form-check-input" type="radio" name="Pre1-mod4" id="51" value="2">Ocasionalmente</label>                      
                        <label class="form-check-label" for="52"><input class="form-check-input" type="radio" name="Pre1-mod4" id="52" value="1">Nunca</label>
                      </div>
                    </div>                		
                 		 <span><h3>2.</h3><p>Apoya y promueve dentro de su grupo de trabajo nuevos planes y estrategias para cumplir con los objetivos de la organización</p></span>
                     <div class="form-group">
                      <div class="form-check form-check-inline " >                     
                        <label class="form-check-label" for="53"><input class="form-check-input" type="radio" name="Pre2-mod4" id="53" value="4.5" required>Siempre</label>                       
                        <label class="form-check-label" for="54"><input class="form-check-input" type="radio" name="Pre2-mod4" id="54" value="3.5">Frecuentemente</label>                      
                        <label class="form-check-label" for="55"><input class="form-check-input" type="radio" name="Pre2-mod4" id="55" value="2">Ocasionalmente</label>                      
                        <label class="form-check-label" for="56"><input class="form-check-input" type="radio" name="Pre2-mod4" id="56" value="1">Nunca</label>
                      </div>
                    </div>                		
                 		 <span><h3>3.</h3><p>Es receptivo y proactivo frente a las nuevas disposiciones que requiera la Gerencia en el desarrollo del negocio y/o de los proyectos en los cuales participa.</p></span>
                     <div class="form-group">
                      <div class="form-check form-check-inline " >                     
                        <label class="form-check-label" for="57"><input class="form-check-input" type="radio" name="Pre3-mod4" id="57" value="4.5" required>Siempre</label>                       
                        <label class="form-check-label" for="58"><input class="form-check-input" type="radio" name="Pre3-mod4" id="58" value="3.5">Frecuentemente</label>                      
                        <label class="form-check-label" for="59"><input class="form-check-input" type="radio" name="Pre3-mod4" id="59" value="2">Ocasionalmente</label>                      
                        <label class="form-check-label" for="60"><input class="form-check-input" type="radio" name="Pre3-mod4" id="60" value="1">Nunca</label>
                      </div>
                    </div>
                </div>
            <!--Modulo 5-->
                <h4>Modulo 5 <small>ORIENTACION A RESULTADOS</small></h4>
                <div class="well">
                		<span><h3>1.</h3><p>Alcanza los resultados esperados a partir de establecer la relación costo/beneficio de sus funciones</p></span>
                    <div class="form-group">
                      <div class="form-check form-check-inline " >                     
                        <label class="form-check-label" for="61"><input class="form-check-input" type="radio" name="Pre1-mod5" id="61" value="4.5" required>Siempre</label>                       
                        <label class="form-check-label" for="62"><input class="form-check-input" type="radio" name="Pre1-mod5" id="62" value="3.5">Frecuentemente</label>                      
                        <label class="form-check-label" for="63"><input class="form-check-input" type="radio" name="Pre1-mod5" id="63" value="2">Ocasionalmente</label>                      
                        <label class="form-check-label" for="64"><input class="form-check-input" type="radio" name="Pre1-mod5" id="64" value="1">Nunca</label>
                      </div>
                    </div>                		
                 		 <span><h3>2.</h3><p>Define los procedimientos de su área de manera tal que le garanticen alcanzar las metas propuestas para su área, alineadas a los objetivos Estratégicos y la Misión de la Organización</p></span>
                     <div class="form-group">
                      <div class="form-check form-check-inline " >                     
                        <label class="form-check-label" for="65"><input class="form-check-input" type="radio" name="Pre2-mod5" id="65" value="4.5" required>Siempre</label>                       
                        <label class="form-check-label" for="66"><input class="form-check-input" type="radio" name="Pre2-mod5" id="66" value="3.5">Frecuentemente</label>                      
                        <label class="form-check-label" for="67"><input class="form-check-input" type="radio" name="Pre2-mod5" id="67" value="2">Ocasionalmente</label>                      
                        <label class="form-check-label" for="68"><input class="form-check-input" type="radio" name="Pre2-mod5" id="68" value="1">Nunca</label>
                      </div>
                    </div>                		
                 		 <span><h3>3.</h3><p>Gestiona ante la Gerencia los recursos necesarios para su área y organiza con sus colaboradores los tiempos para mejorar las metas establecidas.</p></span>
                     <div class="form-group">
                    <div class="form-check form-check-inline " >                     
                      <label class="form-check-label" for="69"><input class="form-check-input" type="radio" name="Pre3-mod5" id="69" value="4.5" required>Siempre</label>                       
                      <label class="form-check-label" for="70"><input class="form-check-input" type="radio" name="Pre3-mod5" id="70" value="3.5">Frecuentemente</label>                      
                      <label class="form-check-label" for="71"><input class="form-check-input" type="radio" name="Pre3-mod5" id="71" value="2">Ocasionalmente</label>                      
                      <label class="form-check-label" for="72"><input class="form-check-input" type="radio" name="Pre3-mod5" id="72" value="1">Nunca</label>
                    </div>
                  </div>
                </div>
            <!--Modulo 6-->
                <h4>Modulo 6 <small>SISTEMA DE GESTIÓN DE CALIDAD (SGC)</small></h4>
                <div class="well">
              		<span><h3>1.</h3><p>Da cumplimiento a la política de calidad y las demás disposiciones del sistema de gestión de calidad.</p></span>
                  <div class="form-group">
                    <div class="form-check form-check-inline " >                     
                      <label class="form-check-label" for="73"><input class="form-check-input" type="radio" name="Pre1-mod6" id="73" value="4.5" required>Siempre</label>                       
                      <label class="form-check-label" for="74"><input class="form-check-input" type="radio" name="Pre1-mod6" id="74" value="3.5">Frecuentemente</label>                      
                      <label class="form-check-label" for="75"><input class="form-check-input" type="radio" name="Pre1-mod6" id="75" value="2">Ocasionalmente</label>                      
                      <label class="form-check-label" for="76"><input class="form-check-input" type="radio" name="Pre1-mod6" id="76" value="1">Nunca</label>
                    </div>
                  </div>
              		
               		 <span><h3>2.</h3><p>Verifica y asegura que todo su personal a cargo cumpla las disposiciones del sistema de gestión de calidad y del SST-MA</p></span>
                   <div class="form-group">
                    <div class="form-check form-check-inline " >                     
                      <label class="form-check-label" for="77"><input class="form-check-input" type="radio" name="Pre2-mod6" id="77" value="4.5" required>Siempre</label>                       
                      <label class="form-check-label" for="78"><input class="form-check-input" type="radio" name="Pre2-mod6" id="78" value="3.5">Frecuentemente</label>                      
                      <label class="form-check-label" for="79"><input class="form-check-input" type="radio" name="Pre2-mod6" id="79" value="2">Ocasionalmente</label>                      
                      <label class="form-check-label" for="80"><input class="form-check-input" type="radio" name="Pre2-mod6" id="80" value="1">Nunca</label>
                    </div>
                  </div>
              		
               		 <span><h3>3.</h3><p>Emplea de forma correcta y oportuna los documentos y formatos del SGC elaborados por su proceso.</p></span>
                   <div class="form-group">
                    <div class="form-check form-check-inline " >                     
                      <label class="form-check-label" for="81"><input class="form-check-input" type="radio" name="Pre3-mod6" id="81" value="4.5" required>Siempre</label>                       
                      <label class="form-check-label" for="82"><input class="form-check-input" type="radio" name="Pre3-mod6" id="82" value="3.5">Frecuentemente</label>                      
                      <label class="form-check-label" for="83"><input class="form-check-input" type="radio" name="Pre3-mod6" id="83" value="2">Ocasionalmente</label>                      
                      <label class="form-check-label" for="84"><input class="form-check-input" type="radio" name="Pre3-mod6" id="84" value="1">Nunca</label>
                    </div>
                  </div>
              		
               		 <span><h3>4.</h3><p>Identifica e implementa acciones correctivas, acciones preventivas y oportunidades de mejora eficaces que aporten al desarrollo de su proceso.</p></span>
                   <div class="form-group">
                    <div class="form-check form-check-inline " >                     
                      <label class="form-check-label" for="85"><input class="form-check-input" type="radio" name="Pre4-mod6" id="85" value="4.5" required>Siempre</label>                       
                      <label class="form-check-label" for="86"><input class="form-check-input" type="radio" name="Pre4-mod6" id="86" value="3.5">Frecuentemente</label>                      
                      <label class="form-check-label" for="87"><input class="form-check-input" type="radio" name="Pre4-mod6" id="87" value="2">Ocasionalmente</label>                      
                      <label class="form-check-label" for="88"><input class="form-check-input" type="radio" name="Pre4-mod6" id="88" value="1">Nunca</label>
                    </div>
                  </div>
              		
               		 <span><h3>5.</h3><p>Controla, realiza seguimiento, medición y análisis para cumplir los objetivos específicos propuestos de su proceso.</p></span>
                   <div class="form-group">
                    <div class="form-check form-check-inline " >                     
                      <label class="form-check-label" for="89"><input class="form-check-input" type="radio" name="Pre5-mod6" id="89" value="4.5" required>Siempre</label>                       
                      <label class="form-check-label" for="90"><input class="form-check-input" type="radio" name="Pre5-mod6" id="90" value="3.5">Frecuentemente</label>                      
                      <label class="form-check-label" for="91"><input class="form-check-input" type="radio" name="Pre5-mod6" id="91" value="2">Ocasionalmente</label>                      
                      <label class="form-check-label" for="92"><input class="form-check-input" type="radio" name="Pre5-mod6" id="92" value="1">Nunca</label>
                    </div>
                  </div>        	
                </div>
            <!--Modulo 7-->
                <h4>Modulo 7 <small>SEGURIDAD INDUSTRIAL, SALUD OCUPACIONAL Y MEDIO AMBIENTE</small></h4>
                <div class="well">
                    <span><h3>1.</h3><p>Cumple y hace cumplir con las normas y procedimientos establecidos por la compañía en el Sistema de Gestión SST-MA.</p></span>
                     
                  <div class="form-group">
                    <div class="form-check form-check-inline " >                     
                      <label class="form-check-label" for="93"><input class="form-check-input" type="radio" name="Pre1-mod7" id="93" value="4.5" required>Siempre</label>                       
                      <label class="form-check-label" for="94"><input class="form-check-input" type="radio" name="Pre1-mod7" id="94" value="3.5">Frecuentemente</label>                      
                      <label class="form-check-label" for="95"><input class="form-check-input" type="radio" name="Pre1-mod7" id="95" value="2">Ocasionalmente</label>                      
                      <label class="form-check-label" for="96"><input class="form-check-input" type="radio" name="Pre1-mod7" id="96" value="1">Nunca</label>
                    </div>
                  </div>
                     <span><h3>2.</h3><p>Realiza seguimiento a la debida implementación de las Políticas por medio del cumplimiento de los objetivos, metas y procedimientos estipulados en el manual de Gestión SST-MA.</p></span>
                    <div class="form-group">
                    <div class="form-check form-check-inline " >                     
                      <label class="form-check-label" for="97"><input class="form-check-input" type="radio" name="Pre2-mod7" id="97" value="4.5" required>Siempre</label>                       
                      <label class="form-check-label" for="98"><input class="form-check-input" type="radio" name="Pre2-mod7" id="98" value="3.5">Frecuentemente</label>                      
                      <label class="form-check-label" for="99"><input class="form-check-input" type="radio" name="Pre2-mod7" id="99" value="2">Ocasionalmente</label>                      
                      <label class="form-check-label" for="100"><input class="form-check-input" type="radio" name="Pre2-mod7" id="100" value="1">Nunca</label>
                    </div>
                  </div>
                     <span><h3>3.</h3><p>Promueve los hábitos de vida y trabajo saludables, convirtiéndose en modelo sobre el auto-cuidado en salud.</p></span>
                    <div class="form-group">
                    <div class="form-check form-check-inline " >                     
                      <label class="form-check-label" for="101"><input class="form-check-input" type="radio" name="Pre3-mod7" id="101" value="4.5" required>Siempre</label>                       
                      <label class="form-check-label" for="102"><input class="form-check-input" type="radio" name="Pre3-mod7" id="102" value="3.5">Frecuentemente</label>                      
                      <label class="form-check-label" for="103"><input class="form-check-input" type="radio" name="Pre3-mod7" id="103" value="2">Ocasionalmente</label>                      
                      <label class="form-check-label" for="104"><input class="form-check-input" type="radio" name="Pre3-mod7" id="104" value="1">Nunca</label>
                    </div>
                  </div>
                    <span><h3>4.</h3><p>Participa activamente de las actividades del Sistema de gestión SST-MA. ( campañas de salud, capacitaciones, inducciones, inspecciones)</p></span>
                    <div class="form-group">
                    <div class="form-check form-check-inline " >                     
                      <label class="form-check-label" for="105"><input class="form-check-input" type="radio" name="Pre4-mod7" id="105" value="4.5" required>Siempre</label>                       
                      <label class="form-check-label" for="106"><input class="form-check-input" type="radio" name="Pre4-mod7" id="106" value="3.5">Frecuentemente</label>                      
                      <label class="form-check-label" for="107"><input class="form-check-input" type="radio" name="Pre4-mod7" id="107" value="2">Ocasionalmente</label>                      
                      <label class="form-check-label" for="108"><input class="form-check-input" type="radio" name="Pre4-mod7" id="108" value="1">Nunca</label>
                    </div>
                  </div> 
                    <span><h3>5.</h3><p>Conoce los riesgos a los cuales está expuesto en el desarrollo de sus labores cotidianas y ejecuta los controles.</p></span>
                    <div class="form-group">
                    <div class="form-check form-check-inline " >                     
                      <label class="form-check-label" for="109"><input class="form-check-input" type="radio" name="Pre5-mod7" id="109" value="4.5" required>Siempre</label>                       
                      <label class="form-check-label" for="110"><input class="form-check-input" type="radio" name="Pre5-mod7" id="110" value="3.5">Frecuentemente</label>                      
                      <label class="form-check-label" for="111"><input class="form-check-input" type="radio" name="Pre5-mod7" id="111" value="2">Ocasionalmente</label>                      
                      <label class="form-check-label" for="112"><input class="form-check-input" type="radio" name="Pre5-mod7" id="112" value="1">Nunca</label>
                    </div>
                  </div>                       
                    <span><h3>6.</h3><p>Demuestra compromiso con el mejoramiento continuo del sistema de gestión reportando oportunidades de mejora.</p></span>
                    <div class="form-group">
                    <div class="form-check form-check-inline " >                     
                      <label class="form-check-label" for="113"><input class="form-check-input" type="radio" name="Pre6-mod7" id="113" value="4.5" required>Siempre</label>                       
                      <label class="form-check-label" for="114"><input class="form-check-input" type="radio" name="Pre6-mod7" id="114" value="3.5">Frecuentemente</label>                      
                      <label class="form-check-label" for="115"><input class="form-check-input" type="radio" name="Pre6-mod7" id="115" value="2">Ocasionalmente</label>                      
                      <label class="form-check-label" for="116"><input class="form-check-input" type="radio" name="Pre6-mod7" id="116" value="1">Nunca</label>
                    </div>
                  </div>
                    <span><h3>7.</h3><p>Realiza una adecuada gestión de los residuos sólidos y/o peligrosos generados en el desarrollo de las actividades de acuerdo a lo dispuesto por la empresa y/o cliente</p></span>
                    <div class="form-group">
                    <div class="form-check form-check-inline " >                     
                      <label class="form-check-label" for="117"><input class="form-check-input" type="radio" name="Pre7-mod7" id="117" value="4.5" required>Siempre</label>                       
                      <label class="form-check-label" for="118"><input class="form-check-input" type="radio" name="Pre7-mod7" id="118" value="3.5">Frecuentemente</label>                      
                      <label class="form-check-label" for="119"><input class="form-check-input" type="radio" name="Pre7-mod7" id="119" value="2">Ocasionalmente</label>                      
                      <label class="form-check-label" for="120"><input class="form-check-input" type="radio" name="Pre7-mod7" id="120" value="1">Nunca</label>
                    </div>
                  </div>
                    <span><h3>8.</h3><p>Detecta y reporta no conformidades potenciales para implementar acciones preventivas</p></span>
                    <div class="form-group">
                    <div class="form-check form-check-inline " >                     
                      <label class="form-check-label" for="121"><input class="form-check-input" type="radio" name="Pre8-mod7" id="121" value="4.5" required>Siempre</label>                       
                      <label class="form-check-label" for="122"><input class="form-check-input" type="radio" name="Pre8-mod7" id="122" value="3.5">Frecuentemente</label>                      
                      <label class="form-check-label" for="123"><input class="form-check-input" type="radio" name="Pre8-mod7" id="123" value="2">Ocasionalmente</label>                      
                      <label class="form-check-label" for="124"><input class="form-check-input" type="radio" name="Pre8-mod7" id="124" value="1">Nunca</label>
                    </div>
                  </div>
                    <span><h3>9.</h3><p>Detecta y reporta no conformidades reales para eliminar sus causas</p></span>
                    <div class="form-group">
                    <div class="form-check form-check-inline " >                     
                      <label class="form-check-label" for="125"><input class="form-check-input" type="radio" name="Pre9-mod7" id="125" value="4.5" required>Siempre</label>                       
                      <label class="form-check-label" for="126"><input class="form-check-input" type="radio" name="Pre9-mod7" id="126" value="3.5">Frecuentemente</label>                      
                      <label class="form-check-label" for="127"><input class="form-check-input" type="radio" name="Pre9-mod7" id="127" value="2">Ocasionalmente</label>                      
                      <label class="form-check-label" for="128"><input class="form-check-input" type="radio" name="Pre9-mod7" id="128" value="1">Nunca</label>
                    </div>
                  </div>
                </div>
                <div class="form-group">
                  <span><h3><p>Entrevista con Empleado</p></h3></span>
                      <label for="exampleFormControlTextarea1">Fortalezas</label>
                      <textarea class="form-control " name="fortalezas" rows="3" placeholder="Escriba las Fortalezas..."></textarea>
                      <label for="exampleFormControlTextarea1">Debilidades</label>
                      <textarea class="form-control" name="debilidades"rows="3" placeholder="Escriba las Debilidades..."></textarea>
                      <label for="exampleFormControlTextarea1">Necesidades de capacitación y/o entrenamiento</label>
                      <textarea class="form-control" name="capacitacion"rows="3" placeholder="Escriba las Necesidades de posibles capacitaciones o entrenamientos..."required></textarea>
                </div>                         
               <button type="submit" class="btn btn-primary btn-block">Enviar</button>
              </form>
            </div>              
          </div>
        </div>
      </div>
    </section>
   
                       

    <footer id="footer">
      <p>Derechos Registrados Consulta de panel jj, &copy; 2020</p>      
    </footer>
<!-- Bootstrap core JavaScript
    ================================================== -->
    <!-- Placed at the end of the document so the pages load faster -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
    <script src="../../js/bootstrap.min.js"></script>
    <script src="../../js/inicio.js"></script>
</body>
</html>