<?php
/**
* VMClinic
* @author VMComp
**/



$r = new ReservationData();
$r->title = $_POST["title"];
$r->medic_id = $_POST["medic_id"];
$r->date_at = $_POST["date_at"];
$r->time_at = $_POST["time_at"];
$r->user_id = $_SESSION["user_id"];
$r->name = $_POST["name"];
$r->phone = $_POST["phone"];
$r->address = $_POST["address"];

$r->status_id = $_POST["status_id"];
$r->payment_id = $_POST["payment_id"];
$r->price = $_POST["price"];
$r->sick = $_POST["sick"];
$r->symtoms = $_POST["symtoms"];
$r->medicaments = $_POST["medicaments"];


$r->addfast();

Core::alert("Agregado exitosamente!");

Core::redir("./index.php?view=reservations");
?>