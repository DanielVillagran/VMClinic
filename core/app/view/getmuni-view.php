<?php
/**
* VMClinic
* @author VMComp
* @url http://VMComp.com/about/
**/

if(count($_POST)>0){
	$muni = new MuniData();
	$muni->id = $_POST["id"];


	$muni->add();

print "<script>window.location='index.php?view=pacients';</script>";


}


?>