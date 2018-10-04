<?php

<<<<<<< HEAD
require 'rb.php';
R::setup( 'mysql:host=localhost:3309;dbname=vmclinic',
    'root', 'root' );
=======
require 'conexion.php';
>>>>>>> 8211672452612f201f62bb9bafdada3ba7add1bf
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