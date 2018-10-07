<?php
require 'conexion.php';
$where='';
if(isset($_POST['medicine'])){
$reservation = R::dispense( 'reservations_medicines' );
$reservation->reservation_id=$_POST['cita'];
$reservation->dosis=$_POST['dosis'];
$reservation->medicine=$_POST['medicine'];
$id=R::store($reservation);
}
$lista=R::find( 'reservations_medicines', ' reservation_id =  '.$_POST['cita']);
$lista=json_encode($lista);
echo $lista;
?>