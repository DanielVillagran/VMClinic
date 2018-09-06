<?php
$thejson=null;
$events = ReservationData::getEvery();
foreach($events as $event){
	$thejson[] = array("title"=>$event->title,"url"=>"./?view=editreservation&id=".$event->id,"start"=>$event->date_at."T".$event->time_at);
}
?>
<div class="row">
<div class="col-md-12">
<div class="card" style="text-align: center;">

<img class="img-responsive" src="assets/images/vmcomp.png" style="width: 80%; margin-left: 10%;">
</div>
</div>
</div>
