$('#imprimirConsentimiento').click(function () {
	var fullDate = new Date();
	const monthNames = ["Enero","Febrero","Marzo","Abril","Mayo","Junio","Julio","Agosto","Septiembre","Octubre","Noviembre","Diciembre"
    ];
    var fecha= fullDate.getDate()+" de "+monthNames[(fullDate.getMonth()+1)]+" del "+ fullDate.getFullYear();
    var paciente= $("#pacient_id option[value='"+$("#pacient_id").val()+"']").text();
    var doctor=$("#medic_id option[value='"+$("#medic_id").val()+"']").text();
    var consentimiento="Su puuta madre";
	$.ajax({
		url:"core/app/querys/create_letter.php",
		type:'post',
		data: {'fecha':fecha,'paciente':paciente,'doctor':doctor,'consentimiento':consentimiento},
		dataType:'json',
		success() {

		}


	});
});