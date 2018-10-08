<?php

if(count($_POST)>0){
	$user = PacientData::getById($_POST["user_id"]);
	$user->name = $_POST["name"];
	$user->lastname = $_POST["lastname"];
    $user->second_lastname = trim($_POST["second_lastname"]);
    $user->curp = $_POST["curp"];



    $user->gender = $_POST["gender"];
	$user->day_of_birth = $_POST["day_of_birth"];
	
	$user->sick = $_POST["sick"];
	$user->medicaments = $_POST["medicaments"];
	$user->alergy = $_POST["alergy"];
	

	$user->address = $_POST["address"];
    $user->state = trim($_POST["state"]);
    $user->municipal = trim($_POST["municipal"]);
    $user->localidad = trim($_POST["localidad"]);
    $user->born_state = trim($_POST["born_state"]);
    $user->nacionality = trim($_POST["nacionality"]);
    $user->email = trim($_POST["email"]);
	$user->phone = trim($_POST["phone"]);
	$user->update();

Core::alert("Actualizado exitosamente!");
print "<script>window.location='index.php?view=pacients';</script>";


}


?>