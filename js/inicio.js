window.onload=function(){
	cargar();
}
function Registrar(){
	var documento = $("#documento").val();
	var nombre = $("#nombre").val();
	var apellido = $("#apellido").val();
	var nickname = $("#nickname").val();
	$('#respuesta').html("Porfavor espera estamos ingresando");

	$.ajax({
		type: "POST",
		url: "../php/registro.php",
		data: $("#formu").serialize(),
		success: function(respuesta){
			$("#respuesta").html(respuesta);
			limpiar();
			cargar();
		}
	});
}
function contar(){
	$.ajax({
		type: "POST",
		url: "../php/contar.php",
		data: "",
		success: function(respuesta){
			$("#av").html(respuesta);
			limpiar();
			cargar();
		}
	});
}
function contar2(){
	$.ajax({
		type: "POST",
		url: "../php/evaluados.php",
		data: "",
		success: function(respuesta){
		$("#eval").html(respuesta);
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
		url:"../php/contar.php",
	}).done(function(res){
		porcento=100/res;
		$.ajax({
		data:{var1:"$res"},
		type:"GET",
		dataType:"json",
		url:"../php/evaluados.php",
	}).done(function(res2){
		avance=res2*porcento;
		$("#avance").html(avance.toFixed(1)+"%");
		$("#avance").css("width",avance+"%");
		pendientes=100-avance;
		$("#pendientes").css("width",pendientes+"%")
		$("#pendientes").html(pendientes.toFixed(1)+"%");



	});	
	});	
}

function consultar2(){
	$('#respuesta').html("Porfavor espera estamos consultando");
	$.ajax({
		type: "POST",
		url: "../php/consulta2.php",
		data: $("#foru2").serialize(),
		success: function(respuesta){
			$("#respuesta").html(respuesta);
			limpiar();
			cargar();
		}
	});
}

function consultaGral(){
	$('#respuesta').html("Porfavor espera estamos consultando");
	$.ajax({
		type: "POST",
		url: "../php/consultaGral.php",
		data: $("#foru2").serialize(),
		success: function(respuesta){
			$("#respuesta").html(respuesta);
			limpiar();
			cargar();
		}
	});
}
function iniciar(){
	$('#respuesta').html("Porfavor espera estamos consultando");
	$.ajax({
		type: "POST",
		url: "../php/iniciar.php",
		data: $("#login").serialize(),
		success: function(respuesta){
			$("#respuesta").html(respuesta);
			limpiar();
			cargar();
		}
	});
}
function session(){
	$.ajax({
		type: "POST",
		url: "../php/sesion.php",
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