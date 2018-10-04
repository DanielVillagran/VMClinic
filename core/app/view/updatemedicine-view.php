<?php

if(count($_POST)>0){
	$user = MedicineData::getById($_POST["user_id"]);
	$user->name = $_POST["name"];
	$user->url = $_POST["url"];
	$user->update();
print "<script>window.location='index.php?view=medicine';</script>";


}


?>