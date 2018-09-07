<?php

$client = ItemData::getById($_GET["id"]);
$client->del();
Core::redir("./index.php?view=items");

?>