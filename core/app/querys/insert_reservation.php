<?php

require 'conexion.php';
$reservation = R::dispense( 'reservation' );
$reservation->title=$_POST['titulo'];
$reservation->date_at=$_POST['fecha'];
$reservation->time_at="08:00";
$reservation->type="2";
$reservation->created_at="NOW()";
$id=R::store($reservation);
var_dump($id);
die();
echo "<script>window.location='index.php?view=calendar';</script>";
?>