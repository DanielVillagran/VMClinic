$('#imprimirConsentimiento').click(function () {
	var fullDate = new Date();
	const monthNames = ["Enero","Febrero","Marzo","Abril","Mayo","Junio","Julio","Agosto","Septiembre","Octubre","Noviembre","Diciembre"
	];
	var fecha= fullDate.getDate()+" de "+monthNames[(fullDate.getMonth())]+" del "+ fullDate.getFullYear();
	var paciente= $("#pacient_id option[value='"+$("#pacient_id").val()+"']").text();
	var doctor=$("#medic_id option[value='"+$("#medic_id").val()+"']").text();

	var consentimiento="Su puuta madre";
	swal({
		type: 'info',
		title: 'Consentimiento.',
		text: 'A que procedimientos se sometera el paciente?',
		input:'text',
		showCancelButton: true,

	}).then((result) => {
		var inputValue=result.value;
					//swal.close();
					if (inputValue == "" || inputValue == null) {
						swal("Error","Necesitas escribir un motivo!");
						return false
					}else{
						consentimiento=inputValue;
						$.ajax({
							url:"core/app/querys/create_letter.php",
							type:'post',
							data: {'fecha':fecha,'paciente':paciente,'doctor':doctor,'consentimiento':consentimiento},
							dataType:'html',
							success() {
								$("#vinculoConsentimiento").attr("href","core/app/querys/Resources/carta"+paciente+".docx");
								$("#vinculoConsentimiento").click();
								window.open("core/app/querys/Resources/carta"+paciente+".docx","Carta"+ paciente);
							}
						});
						
					}
				});
});