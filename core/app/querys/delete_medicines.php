<?php
require 'conexion.php';
R::exec( "delete from reservations_medicines WHERE id = {$_POST['id']}" );
$lista=R::find( 'reservations_medicines', ' reservation_id =  '.$_POST['cita']);
$lista=json_encode($lista);
echo $lista;
?>