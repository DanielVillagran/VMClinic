<?php

$client = DocsData::getById($_GET["id"]);
$client->del();
Core::redir("./index.php?view=documents");

?>