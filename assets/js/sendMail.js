$( document ).ready(function() {

});
// $('#sendMail').click(function () {
//     var fullDate = new Date();
//     const monthNames = ["Enero","Febrero","Marzo","Abril","Mayo","Junio","Julio","Agosto","Septiembre","Octubre","Noviembre","Diciembre"
//     ];
//     var fecha= fullDate.getDate()+" de "+monthNames[(fullDate.getMonth())]+" del "+ fullDate.getFullYear();
//     var paciente= $("#pacient_id option[value='"+$("#pacient_id").val()+"']").text();
//     var doctor=$("#medic_id option[value='"+$("#medic_id").val()+"']").text();
//     var medicamentos=$("#medicamentos").html();
//
//
//     var consentimiento="Su puuta madre";
//     swal({
//         type: 'info',
//         title: 'Enviar Correo',
//         html: "Asunto<br><input type='text' id='asunto' class='form-control'>\
// 		<br>Mensaje<br><input type='text' id='mensaje' class='form-control'>",
//         showCancelButton: true,
//
//     }).then((result) => {
//         var asunto=$("#asunto").val();
//         var mensaje=$("#mensaje").val();
//
//         //swal.close();
//         if (asunto==null) {
//             swal("Error","Necesitas poner un asunto");
//             return false
//         }else{
//
//
//         }
//     });
// });

function sendMail(email) {
    swal({
        type: 'info',
        title: 'Enviar Correo',
        html: "Asunto<br><input type='text' id='asunto' class='form-control'>\
		<br>Mensaje<br><textarea name='' id='mensaje' class='form-control' cols='30' rows='10'></textarea>",
        showCancelButton: true,

    }).then((result) => {
        var asunto=$("#asunto").val();
        var mensaje=$("#mensaje").val();

        //swal.close();
        if (asunto==null) {
            swal("Error","Necesitas poner un asunto");
            return false
        }else{
            window.location.href = "mailto:"+email+"?subject="+asunto+"&body="+mensaje+"";
        }
    });
}
