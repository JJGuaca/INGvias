window.onload=function(){
	cargar();
}

function contar(){
	$.ajax({
		type: "POST",
		url: "php1/contarempleados.php",
		data: "",
		success: function(respuesta){
			$("#aevaluar").html(respuesta);
			limpiar();
			cargar();
		}
	});
}
function contar2(){
	$.ajax({
		type: "POST",
		url: "php1/empleadosevaluados.php",
		data: "",
		success: function(respuesta){
		$("#evaluados").html(respuesta);
			limpiar();
			cargar();
		}
	});
}

function avance(){
	$.ajax({
		data:{var1:"$filas"},
		type:"GET",
		dataType:"json",
		url:"php1/contarempleados.php",
	}).done(function(res){
		porcento=100/res;
		$.ajax({
		data:{var1:"$res"},
		type:"GET",
		dataType:"json",
		url:"php1/empleadosevaluados.php",
	}).done(function(res2){
		avance=res2*porcento;
		$("#avance").html(avance.toFixed(0)+"%");
		$("#avance").css("width",avance+"%");
		pendientes=100-avance;
		$("#pendientes").css("width",pendientes+"%")
		$("#pendientes").html(pendientes.toFixed(0)+"%");
	});	
	});	
}

function consultar(){
	$('#respuesta').html("Porfavor espera estamos consultando");
	$.ajax({
		type: "POST",
		url: "php1/evaluadores.php",
		data: "",
		success: function(respuesta){
			$("#respuesta").html(respuesta);
			limpiar();
			cargar();
		}
	});
}
function consultar_personal(){
	url=document.URL;
	url=String(url.match(/\?+.+/));
	url=url.replace('?','');
	url=url.split('&');
	x=0;
	while(x<url.length){
		p=url[x].split('=');
		x++;
	}
	$('#respuesta').html('Porfavor espera estamos consultando');
	dato=parseInt(p[1]);
	$.ajax({
		type: 'POST',
		url:'php1/consulta_personal.php',
		data:{documento:dato},
		success: function(respuesta){
			$('#respuesta').html(respuesta);
			limpiar();
			cargar();
		}
	});

}

function descarga(int){
	var dato=JSON.parse(int);
	$.ajax({
		type: 'POST',
		url: 'php1/descarga.php',
		data: {'dato':dato},
		success:function(respuesta){
			$('#datos').html(respuesta);
			limpiar();
			cargar();
		}
	});
}

function session(){
	$.ajax({
		type: "POST",
		url: "php1/session1.php",
		data: '',
		success: function(respuesta){
			$(".nn").html(respuesta);
			limpiar();
			cargar();
		}
	});
}
function cargar(){
		$("#datagrid").load("consulta.php");
}
function limpiar(){
	$("#documento").val("");
	$("#nombre").val("");
	$("#apellido").val("");
	$("#nickname").val("");
}