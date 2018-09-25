<?php

require 'conexion.php';
$reservation = R::dispense( 'reservation' );
$reservation->title="puto";
$reservation->date_at="perro";
$reservation->time_at="08:00";
$reservation->type="2";
//$reservation->created_at="NOW()";
$id=R::store($reservation);
echo "<script>window.location='index.php?view=calendar';</script>";
?>