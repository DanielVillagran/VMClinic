<?php

$category = MedicineData::getById($_GET["id"]);

$category->del();
Core::redir("./index.php?view=medicine");


?>