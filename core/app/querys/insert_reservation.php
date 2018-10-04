<?php

require 'rb.php';
R::setup( 'mysql:host=localhost:3309;dbname=vmclinic',
    'root', 'root' );
$reservation = R::dispense( 'reservation' );
$reservation->title=$_POST['titulo'];
$reservation->date_at=$_POST['fecha'];
$reservation->time_at="08:00";
$reservation->type="2";
$reservation->created_at="NOW()";
R::store($reservation);
echo "<script>window.location='index.php?view=calendar';</script>";
?>