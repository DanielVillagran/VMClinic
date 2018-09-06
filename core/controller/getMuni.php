<?php
require ('Conexion.php');

$lista=R::findAll('municipalities');
if($lista){

    foreach ($lista as $key2 ) {
        $id = $key2->id;
        $name =$key2->name;
        break;

    }
}



echo array('id'=>$id, 'name'=>$name);
?>