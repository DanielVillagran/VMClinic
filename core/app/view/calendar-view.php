<?php
$thejson=null;
$events = ReservationData::getEvery();
foreach($events as $event){
	if($event->type=="1"){
		$thejson[] = array("title"=>$event->title,"url"=>"./?view=editreservation&id=".$event->id,"start"=>$event->date_at."T".$event->time_at);
	}else if($event->type=="2"){
		$thejson[] = array("title"=>$event->title,"url"=>"#","start"=>$event->date_at."T".$event->time_at);
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
					type: 'info',
					title: 'Manejo de ausencia.',
					text: 'Por que razon no estara disponibles el '+date.format()+"?",
					input:'text',
					showCancelButton: true,
					closeOnConfirm: false
				}).then((result) => {
					var inputValue=result.value;
					if (inputValue == "" || inputValue == null) {
						swal("Error","Necesitas escribir un motivo!");
						return false
					}else{

						swal("Nice!", "You wrote: " + inputValue, "success");
					}
				});
				$(this).css('background-color', 'green');
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
