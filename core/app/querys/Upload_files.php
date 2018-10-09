<?php
require 'conexion.php';
$pacient=$_POST['pacient_id'];
$type=$_POST['document_type'];

$nombre_tmp = $_FILES['archivo']['tmp_name'];
$nombre = $_FILES['archivo']['name'];
move_uploaded_file($_FILES['archivo']['tmp_name'], "files/".$nombre);
$document = R::dispense( 'documents' );
$document->document=$nombre;
$document->pacient=$pacient;
$document->type=$type;

$id=R::store($document);
echo true
 ?>
