<?php

require 'conexion.php';
$where='';
if(isset($_POST['id'])){
  $lista=R::find( 'municipalities', ' state_id =  '.$_POST['id']);
  $lista=json_encode($lista);
}
else{
 $lista=R::find( 'municipalities','ORDER BY name asc');
}
echo $lista;
?>