$( document ).ready(function() {
	var cita=$("#id").val();
	$.ajax({
		url:"core/app/querys/get_medicines.php",
		type:'post',
		data: {'cita':cita},
		dataType:'json',
		success(data) {
			$('#tabla_medicamentos').hide();
			$('#tabla_medicamentos tbody').empty();
			$("#medicamentos").empty();
			$.each(data, function (i, item) {
				$('#tabla_medicamentos').show();
				$('#tabla_medicamentos tbody').append("<tr><td>"+item.medicine+"</td>\
					<td>"+item.dosis+"</td>\
					<td><a onclick='eliminar("+item.id+")' class='btn btn-danger btn-xs'>Eliminar</a></td></tr>"
					);
				$("#medicamentos").append(item.dosis+"     "+item.medicine+"\n");

			});
		}
	});
});
$('#imprimirReceta').click(function () {
	var fullDate = new Date();
	const monthNames = ["Enero","Febrero","Marzo","Abril","Mayo","Junio","Julio","Agosto","Septiembre","Octubre","Noviembre","Diciembre"
	];
	var fecha= fullDate.getDate()+" de "+monthNames[(fullDate.getMonth())]+" del "+ fullDate.getFullYear();
	var paciente= $("#nombre").val();
	var doctor=$("#medic_id option[value='"+$("#medic_id").val()+"']").text();

	var consentimiento="Su puuta madre";
	swal({
		type: 'info',
		title: 'Datos del paciente.',
		html: "Edad<br><input type='text' id='edadF' class='form-control'>\
		<br>Peso<br><input type='text' id='pesoF' class='form-control'>\
		<br>T.A<br><input type='text' id='taF' class='form-control'>\
		<br>F.C<br><input type='text' id='fcF' class='form-control'>\
		<br>F.R<br><input type='text' id='frF' class='form-control'>\
		<br>Temperatura<br><input type='text' id='tempF' class='form-control'>\
		<br>SaTO2<br><input type='text' id='satoF' class='form-control'>",
		showCancelButton: true,

	}).then((result) => {
		var edad=$("#edadF").val();
		var peso=$("#pesoF").val();
		var ta=$("#taF").val();
		var fc=$("#fcF").val();

		var fr=$("#frF").val();
		var temp=$("#tempF").val();
		var sato=$("#satoF").val();
					//swal.close();
					if (edad==null) {
						swal("Error","Necesitas llenar los campos solicitados!");
						return false
					}else{
						$.ajax({
							url:"core/app/querys/create_letter_receta.php",
							type:'post',
							data: {'fecha':fecha,'paciente':paciente,'edad':edad,'peso':peso,'ta':ta,'fc':fc,'fr':fr,'temp':temp,'sato':sato},
							dataType:'html',
							success() {
								$("#vinculoConsentimiento").attr("href","core/app/querys/Resources/receta"+paciente+".docx");
								$("#vinculoConsentimiento").click();
								var w=window.open("core/app/querys/Resources/receta"+paciente+".docx");
								w.print();
							}
						});
						
					}
				});
});

$('#imprimirResumen').click(function () {
	alert($("#medicamentos").val());
	var fullDate = new Date();
	const monthNames = ["Enero","Febrero","Marzo","Abril","Mayo","Junio","Julio","Agosto","Septiembre","Octubre","Noviembre","Diciembre"
	];
	var fecha= fullDate.getDate()+" de "+monthNames[(fullDate.getMonth())]+" del "+ fullDate.getFullYear();
	var paciente= $("#nombre").val();
	var phone= $("#phone").val();
	var address= $("#address").val();
	var asunto=$("#asunto").val();
	var medicamentos=$("#medicamentos").val();
	var diagnostico=$("#diagnostico").val();
	var pronostico=$("#pronostico").val();
	var tratamiento=$("#tratamiento").val();
	
	$.ajax({
		url:"core/app/querys/create_letter_resumen.php",
		type:'post',
		data: {'fecha':fecha,'paciente':paciente,'phone':phone,'address':address,'asunto':asunto,'medicamentos':medicamentos,'diagnostico':diagnostico,
		'pronostico':pronostico,'tratamiento':tratamiento},
		dataType:'html',
		success() {
			$("#vinculoConsentimiento").attr("href","core/app/querys/Resources/receta"+paciente+".docx");
			$("#vinculoConsentimiento").click();
			var w=window.open("core/app/querys/Resources/constancia"+paciente+".docx");
			w.print();
		}
	});
});

$('#agregarMedicine').click(function (){
	var medicine= $("#medicine_id option[value='"+$("#medicine_id").val()+"']").text();
	var dosis=$("#dosis").val();
	var cita=$("#id").val();
	$.ajax({
		url:"core/app/querys/get_medicines.php",
		type:'post',
		data: {'medicine':medicine,'dosis':dosis,'cita':cita},
		dataType:'json',
		success(data) {
			$('#tabla_medicamentos').hide();
			$('#tabla_medicamentos tbody').empty();
			$("#medicamentos").empty();
			$.each(data, function (i, item) {
				$('#tabla_medicamentos').show();
				$('#tabla_medicamentos tbody').append("<tr><td>"+item.medicine+"</td>\
					<td>"+item.dosis+"</td>\
					<td><a onclick='eliminar("+item.id+")' class='btn btn-danger btn-xs'>Eliminar</a></td></tr>"
					);
				$("#medicamentos").append(item.dosis+"     "+item.medicine+"\n");

			});
		}
	});
});
function eliminar(id){
	var cita=$("#id").val();
	$.ajax({
		url:"core/app/querys/delete_medicines.php",
		type:'post',
		data: {'id':id,'cita':cita},
		dataType:'json',
		success(data) {
			$('#tabla_medicamentos').hide();
			$('#tabla_medicamentos tbody').empty();
			$.each(data, function (i, item) {
				$('#tabla_medicamentos').show();
				$('#tabla_medicamentos tbody').append("<tr><td>"+item.medicine+"</td>\
					<td>"+item.dosis+"</td>\
					<td><a onclick='eliminar("+item.id+")' class='btn btn-danger btn-xs'>Eliminar</a></td></tr>"
					);
			});
		}
	});

}