<?php

<<<<<<< HEAD
require 'rb.php';
R::setup( 'mysql:host=localhost:3309;dbname=vmclinic',
    'root', 'root' );
=======
require 'conexion.php';
>>>>>>> 8211672452612f201f62bb9bafdada3ba7add1bf
$reservation = R::dispense( 'reservation' );
$reservation->title=$_POST['titulo'];
$reservation->date_at=$_POST['fecha'];
$reservation->time_at="08:00";
$reservation->type="2";
//$reservation->created_at="NOW()";
$id=R::store($reservation);
echo "<script>window.location='index.php?view=calendar';</script>";
?>