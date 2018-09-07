<?php

require 'rb.php';
R::setup( 'mysql:host=localhost;dbname=vmclinic',
    'root', '' );
$reservation = R::dispense( 'reservation' );
$reservation->title=$_POST['titulo'];
$reservation->date_at=$_POST['fecha'];
$reservation->time_at="00:00";
$reservation->created_at="NOW()";
?>