<?php
require 'conexion.php';
if(isset($_POST['medicine'])){
	R::exec("insert into reservations_medicines(reservation_id,dosis,medicine) values(\"{$_POST['cita']}\",\"{$_POST['dosis']}\",\"{$_POST['medicine']}\")");
}
$lista=R::find( 'reservations_medicines', ' reservation_id =  '.$_POST['cita']);
$lista=json_encode($lista);
echo $lista;
?>