<?php
require 'conexion.php';
R::trashBatch( 'book', $_POST['id'] );
$lista=R::find( 'reservations_medicines', ' reservation_id =  '.$_POST['cita']);
$lista=json_encode($lista);
echo $lista;
?>