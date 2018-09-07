<?php

if(count($_POST)>0){
	$item = ItemData::getById($_POST["user_id"]);
	$item->name = $_POST["name"];
	$item->quantity = $_POST["quantity"];
	$item->date = $_POST["date"];

	$item->update();

Core::alert("Actualizado exitosamente!");
print "<script>window.location='index.php?view=items';</script>";


}


?>