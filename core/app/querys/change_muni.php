<?php

require 'rb.php';
R::setup( 'mysql:host=localhost:3309;dbname=vmclinic',
    'root', 'root' );
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