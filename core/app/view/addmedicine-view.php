<?php
/**
* VMClinic
* @author VMComp
**/

if(count($_POST)>0){
	$user = new MedicineData();
	$user->name = $_POST["name"];
	$user->url = $_POST["url"];
	$user->add();

print "<script>window.location='index.php?view=medicine';</script>";


}


?>