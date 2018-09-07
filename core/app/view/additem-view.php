<?php
/**
* VMClinic
* @author VMComp
* @url http://VMComp.com/about/
**/

if(count($_POST)>0){
	$item = new ItemData();
	$item->name = $_POST["name"];
	$item->quantity = $_POST["quantity"];
	$item->date = $_POST["date"];

	$item->add();

print "<script>window.location='index.php?view=items';</script>";


}


?>