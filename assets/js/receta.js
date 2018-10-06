$('#imprimirReceta').click(function () {
	var fullDate = new Date();
	const monthNames = ["Enero","Febrero","Marzo","Abril","Mayo","Junio","Julio","Agosto","Septiembre","Octubre","Noviembre","Diciembre"
	];
	var fecha= fullDate.getDate()+" de "+monthNames[(fullDate.getMonth())]+" del "+ fullDate.getFullYear();
	var paciente= $("#pacient_id option[value='"+$("#pacient_id").val()+"']").text();
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
		var edad=$("edadF").val();
		var peso=$("pesoF").val();
		var ta=$("taF").val();
		var fc=$("fcF").val();

		var fr=$("frF").val();
		var temp=$("tempF").val();
		var sato=$("satoF").val();
					//swal.close();
					if (edad==""||edad== null||peso==""||peso== null) {
						swal("Error","Necesitas llenar los campos solicitados!");
						return false
					}else{
						consentimiento=inputValue;
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