<?php

require 'conexion.php';
$reservation = R::dispense( 'reservation' );
$reservation->title=$_POST['titulo'].", Cita rapida.";
$reservation->date_at=$_POST['fecha'];
$reservation->time_at=$_POST['hour'];
$reservation->type="3";
$reservation->name=$_POST['titulo'];
//$reservation->created_at="NOW()";
$id=R::store($reservation);
echo "<script>window.location='index.php?view=calendar';</script>";
?>