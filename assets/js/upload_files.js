$("#data").on('submit', function (eventObj){
    eventObj.preventDefault();


    $.ajax({
     url: "core/app/querys/Upload_files.php",
     type: "POST",
     data: new FormData(this),
     contentType:false,
     processData:false,

     success: function (data) {
       swal({
         title: 'Éxito',
         text: 'Documento Cargado!',
         type: 'success',
         animation: true,
         allowEscapeKey: true,
         confirmButtonColor: '#904153',

         confirmButtonText: 'Aceptar'
       }).then((result) => {
        if (result.value) {
        }
      });
     }


   });

  });
