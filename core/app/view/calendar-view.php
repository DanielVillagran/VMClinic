<?php
$thejson=null;
$events = ReservationData::getEvery();
foreach($events as $event){
	if($event->type=="1"){
		$thejson[] = array("title"=>$event->title,"url"=>"./?view=editreservation&id=".$event->id,"start"=>$event->date_at."T".$event->time_at);
	}else if($event->type=="2"){
		$thejson[] = array("title"=>$event->title,"url"=>"#","start"=>$event->date_at."T".$event->time_at);
	}else{
		$thejson[] = array("title"=>$event->title,"url"=>"./?view=editfastreservation&id=".$event->id,"start"=>$event->date_at."T".$event->time_at);
	}
}
?>
<script>
	$(document).ready(function() {

		$('#calendar').fullCalendar({
			header: {
				left: 'prev,next today',
				center: 'title',
				right: 'month,agendaWeek,agendaDay'
			},
			defaultDate: '<?php echo date('Y-m-d');?>',
			editable: false,
			locale:'es',
  			eventLimit: true, // allow "more" link when too many events
  			events: <?php echo json_encode($thejson); ?>,
  			dayClick: function(date, jsEvent, view) {
				//alert('Clicked on: ' + date.format());
				//alert('Coordinates: ' + jsEvent.pageX + ',' + jsEvent.pageY);
				//alert('Current view: ' + view.name);
				swal({
					title: 'Cita o incidencia',
					text: "Selecciona lo que deseas hacer",
					type: 'warning',
					showCancelButton: true,
					confirmButtonColor: '#3085d6',
					cancelButtonColor: '#d33',
					confirmButtonText: 'Cita',
					cancelButtonText: 'Incidencia',
				}).then((result) => {
					if (result.value) {
						swal({
					type: 'info',
					title: 'Cita.',
					text: 'Cita para el '+date.format()+"<br>Nombre del paciente<br><input type='text' id='nombreF' class='form-control'><br>Hora de la cita<br><input type='time' id='timeF' class='form-control'>",
					html:true,
					showCancelButton: true,
					
				}).then((result) => {
					var inputValue=result.value;
					//swal.close();
					if (inputValue == "" || inputValue == null) {
						swal("Error","Necesitas escribir un motivo!");
						return false
					}else{
						$.ajax({
							url:"core/app/querys/insert_reservation.php",
							type:'post',
							data: {'titulo': inputValue,'fecha':date.format()},
							dataType:'json',
							success(data) {
							}
						});
						//swal("Listo!", "Agendado con exito.", "success");	
						//window.location='index.php?view=calendar';
						swal({
							title: 'Listo!',
							text: "Se ha gruardado la incidencia con exito!",
							type: 'success',
							showCancelButton: false,
							confirmButtonColor: '#3085d6',
							cancelButtonColor: '#d33',
							confirmButtonText: 'Perfecto!'
						}).then((result) => {
							if (result.value) {
								window.location='index.php?view=calendar';
							}
						})
					}
				});
					}else{
						swal({
							type: 'info',
							title: 'Manejo de ausencia.',
							text: 'Por que razon no estara disponibles el '+date.format()+"?",
							input:'text',
							showCancelButton: true,

						}).then((result) => {
							var inputValue=result.value;
					//swal.close();
					if (inputValue == "" || inputValue == null) {
						swal("Error","Necesitas escribir un motivo!");
						return false
					}else{
						$.ajax({
							url:"core/app/querys/insert_reservation.php",
							type:'post',
							data: {'titulo': inputValue,'fecha':date.format()},
							dataType:'json',
							success(data) {
							}
						});
						//swal("Listo!", "Agendado con exito.", "success");	
						//window.location='index.php?view=calendar';
						swal({
							title: 'Listo!',
							text: "Se ha gruardado la incidencia con exito!",
							type: 'success',
							showCancelButton: false,
							confirmButtonColor: '#3085d6',
							cancelButtonColor: '#d33',
							confirmButtonText: 'Perfecto!'
						}).then((result) => {
							if (result.value) {
								window.location='index.php?view=calendar';
							}
						})
					}
				});
					}
				});
				
				//$(this).css('background-color', 'green');
			}
		});

	});

</script>


<div class="row">
	<div class="col-md-12">
		<div class="card">
			<div class="card-header" data-background-color="blue">
				<h4 class="title">Calendario de Citas</h4>
			</div>
			<div class="card-content table-responsive">
				<div id="calendar"></div>
			</div>
		</div>
	</div>
</div>
